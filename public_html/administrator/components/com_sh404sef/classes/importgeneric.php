<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 * @date        2020-06-26
 */

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Filesystem\File;

use Aspera\Spreadsheet\XLSX\Reader;
use Aspera\Spreadsheet\XLSX\SharedStringsConfiguration;

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die;

/**
 * Implement wizard based exportation of generic data
 *
 * @author shumisha
 *
 */
class Sh404sefClassImportgeneric extends JObject
{
	/**
	 * An array holding each step details
	 * A step is defined as a task, a view and a layout
	 * By default, task can be 'display', but still need
	 * to be defined in array
	 * @var array
	 */
	public $_stepsMap = array(

		-2   => array('task' => 'doTerminate', 'view' => 'wizard', 'layout' => 'default')
		, -1 => array('task' => 'doCancel', 'view' => 'wizard', 'layout' => 'default')
		, 0  => array('task' => 'doStart', 'view' => 'wizard', 'layout' => 'default')
		, 1  => array('task' => 'doUpload', 'view' => 'wizard', 'layout' => 'default')
		, 2  => array('task' => 'doValidate', 'view' => 'wizard', 'layout' => 'default')
		, 3  => array('task' => 'doImport', 'view' => 'wizard', 'layout' => 'default')

	);

	public $_stepsCount  = 0;
	public $_steps       = array('next' => 0, 'previous' => 0, 'cancel' => -1, 'terminate' => -2);
	public $_button      = '';
	public $_buttonsList = array('next', 'previous', 'terminate', 'cancel');
	// visible buttons are displayed as toolbar pressbutton
	// buttons not on that list are passed as 'hidden' post data
	public $_visibleButtonsList = array('previous', 'next', 'terminate', 'cancel');

	protected $_context          = '';
	protected $_total            = 0;
	protected $_parentController = null;
	protected $_filename         = '';
	protected $_result           = array();
	protected $_inputData        = array();

	const MAX_PAGEIDS_PER_STEP = 20;

	/**
	 * Constructor, keep reference to controller
	 * which called the adapter
	 *
	 * @param unknown_type $parentController
	 */
	public function __construct($parentController)
	{
		$this->_parentController = $parentController;
	}

	/**
	 * Parameters for current adapter, to be used by parent controller
	 *
	 */
	public function setup()
	{
		$this->_stepsCount = count($this->_stepsMap);

		// prepare data for controller
		$properties = array();

		$properties['_defaultController'] = 'wizard';
		$properties['_defaultTask']       = '';
		$properties['_defaultModel']      = '';
		$properties['_defaultView']       = 'wizard';
		$properties['_defaultLayout']     = 'default';

		$properties['_returnController'] = 'default';
		$properties['_returnTask']       = '';
		$properties['_returnView']       = 'default';
		$properties['_returnLayout']     = 'default';
		$properties['_pageTitle']        = Text::_('COM_SH404SEF_IMPORTING_TITLE');

		return $properties;
	}

	/**
	 * First step, by default a message
	 * and a Terminate button
	 *
	 */
	public function doStart()
	{
		// which button should be displayed ?
		$this->_visibleButtonsList = array('next', 'cancel');

		// next steps definition
		$this->_steps = array('next' => 1, 'previous' => 0, 'cancel' => -1, 'terminate' => -2);

		// return results
		$this->_result['mainText'] = Text::_('COM_SH404SEF_IMPORT_' . strtoupper($this->_context) . '_START');

		return $this->_result;
	}

	/**
	 * Second step, let user upload file
	 *
	 */
	public function doUpload()
	{
		// which button should be displayed ?
		$this->_visibleButtonsList = array('next', 'cancel');

		// next steps definition
		$this->_steps = array('next' => 2, 'previous' => 0, 'cancel' => -1, 'terminate' => -2);

		// return results

		// make sure we can upload, ie set the correct encoding type for the form
		$this->_result['setFormEncType'] = 'multipart/form-data';

		// prepare display
		$this->_result['mainText'] = Text::sprintf('COM_SH404SEF_IMPORT_UPLOAD_FILE', Sh404sefHelperFiles::getMaxUploadSize());

		// add a file browse button
		$this->_result['mainText'] .= '<div style="text-align:center;width:100%;" ><input type="file" name="wizardfile" size="70" /></div>';

		return $this->_result;
	}

	/**
	 * Second step, read file content, validate and display for user go ahead
	 *
	 */
	public function doValidate()
	{
		// get file name
		$fileRecord = Factory::getApplication()->input->files->get('wizardfile', null);

		// move uploaded file, to get access to it
		$this->_filename = Sh404sefHelperFiles::createFileName($this->_filename, 'sh404sef_import_' . $this->_context);

		try
		{
			if (!move_uploaded_file($fileRecord['tmp_name'], $this->_filename))
			{
				// could not write to web space temp dir
				throw new \Exception(Text::_('COM_SH404SEF_WRITE_FAILED'));
			}

			// which button should be displayed ?
			$this->_visibleButtonsList = array('previous', 'next', 'cancel');

			// next steps definition
			$this->_steps = array('next' => 3, 'previous' => 1, 'cancel' => -1, 'terminate' => -2);

			// analyse file content, returning itemsCount
			$importType = $this->_analyzeImportFileContent($this->_filename);

			// we may have to change the opSubject and related data. If user asked for instance to import
			// aliases, from the aliases page, but actually loaded an import file
			// containing urls or pageids
			if ($this->_context != $importType)
			{
				$this->_result['opSubject'] = $importType;
				// update filename
				$oldFileName     = $this->_filename;
				$this->_filename = str_replace($this->_context, $importType, $this->_filename);
				// and rename the temp file
				File::move($oldFileName, $this->_filename);
				// tell parent controller that we should go to new target afer this import
				$this->_parentController->set('_returnController', $importType);
				$this->_parentController->set('_returnView', $importType);
			}

			// save current file for next steps
			$this->_result['mainText']   = Text::sprintf('COM_SH404SEF_IMPORT_VALIDATE_IMPORT', $importType, $this->_total);
			$this->_result['hiddenText'] = '<input type="hidden" name="filename" value="' . $this->_filename . '" />';
		}
		catch (\Exception $e)
		{
			$this->_handleException($e);
		}

		return $this->_result;
	}

	/**
	 * Last step, actually perform importation
	 *
	 */
	public function doImport()
	{
		// collect file and import type information
		$this->_filename = Factory::getApplication()->input->getString('filename');

		try
		{
			$this->loadFile($this->_filename);

			// extract header line
			$header = array_shift($this->_inputData);
			if (
				empty($header)
				||
				!is_array($header)
			)
			{
				throw new \Exception('COM_SH404SEF_ERROR_IMPORT');
			}

			// count items
			$this->_total = count($this->_inputData);

			// iterate through file content and create each record
			foreach ($this->_inputData as $line)
			{
				$this->_createRecord($header, $line);
			}

			// delete temporary uploaded file
			File::delete($this->_filename);

			// which button should be displayed ?
			$this->_visibleButtonsList = array('terminate');

			// next steps definition
			$this->_steps = array('next' => 3, 'previous' => 0, 'cancel' => -1, 'terminate' => -2);

			// setup display of wizard last page
			$this->_result['hiddenText'] = '';
			$this->_result['mainText']   = Text::sprintf('COM_SH404SEF_IMPORT_DONE', $this->_total, $this->_context);
			$this->_result['mainText']   .= $this->_getTerminateOptions();
		}
		catch (\Exception $e)
		{

			$this->_handleException($e);
		}

		return $this->_result;
	}

	/**
	 * Close the wizard window and redirect to default page
	 *
	 */
	public function doTerminate()
	{
		// now go back to main page
		$this->_result = array('redirectTo' => true);

		return $this->_result;
	}

	/**
	 * Close the wizard window and redirect to default page
	 *
	 */
	public function doCancel()
	{
		$this->_result['redirectTo']      = true;
		$this->_result['redirectOptions'] = array();

		return $this->_result;
	}

	/**
	 * Load an xls/xlx file from disk into memory.
	 *
	 * @param string $filename
	 *
	 * @throws Exception
	 */
	protected function loadFile($filename)
	{
		/**********************************************
		 * cf https://github.com/AsperaGmbH/xlsx-reader
		 * /**********************************************/

		include_once JPATH_ADMINISTRATOR . '/components/com_sh404sef/vendor/autoload.php';

		$options = array(
			'TempDir'                    => Factory::getApplication()->get('tmp_path'),
			'SkipEmptyCells'             => false,
			'ReturnDateTimeObjects'      => true,
			'SharedStringsConfiguration' => new SharedStringsConfiguration(),
			'CustomFormats'              => array(),
			'OutputColumnNames'          => false
		);

		$reader = new Reader($options);
		$reader->open($filename);

		// Data must be on the 1st sheet
		$reader->changeSheet(0);
		$this->_inputData = array();
		foreach ($reader as $index => $row)
		{
			$this->_inputData[] = $row;
		}

		if (
			empty($this->_inputData)
			||
			!is_array($this->_inputData)
			||
			count($this->_inputData) < 2
		)
		{
			throw new \RuntimeException(Text::_('COM_SH404SEF_IMPORT_UNRECOGNIZED_CONTENT'));
		}
	}

	/**
	 * Analyze the content of a potential import file
	 * to try recognize its content. Also find the
	 * number of records in the file
	 *
	 * @param string $filename fully pathed file name
	 *
	 * @return string
	 * @throws Exception
	 */
	protected function _analyzeImportFileContent($filename)
	{
		$this->loadFile($filename);

		// extract header line
		$header = array_shift($this->_inputData);
		if (empty($header))
		{
			throw new \Exception(Text::_('COM_SH404SEF_IMPORT_UNRECOGNIZED_CONTENT'));
		}

		// check against known headers
		$headers = Sh404sefHelperGeneral::getExportHeaders();
		foreach ($headers as $headerName => $headerValue)
		{
			if ($header === $headerValue)
			{
				$importType = $headerName;
				break;
			}
		}

		// have we found something ?
		if (empty($importType))
		{
			throw new \Exception(Text::_('COM_SH404SEF_IMPORT_UNRECOGNIZED_CONTENT'));
		}

		$this->_total = count($this->_inputData);

		return $importType;
	}

	/**
	 * Return html for any option that could
	 * be presented to the user on the last
	 * page of the wizard (like clean temp files)
	 * for instance. This will be displayed just after
	 * the mainText text, as prepared by the main
	 * part of this controller
	 */
	protected function _getTerminateOptions()
	{
		$options = '';

		return $options;
	}

	/**
	 * Handle an exception by returning to step 2, where
	 * user can select a file
	 *
	 * @param \Exception $e
	 */
	protected function _handleException(Exception $e)
	{
		// unable to get the file, display error and go back to step 2, "doUpload"
		$this->_parentController->setError($e->getMessage());

		// try delete the uploaded file
		if (File::exists($this->_filename))
		{
			File::delete($this->_filename);
		}

		// go back to previous step
		$this->doUpload();
	}

	/**
	 * Creates a record in the database, based
	 * on data read from import file
	 *
	 * @param array  $header an array of fields, as built from the header line
	 * @param string $line raw record obtained from import file
	 *
	 * @return bool
	 */
	protected function _createRecord($header, $line)
	{
		return true;
	}
}
