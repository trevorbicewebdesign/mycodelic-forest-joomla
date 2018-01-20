<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2017
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.9.2.3552
 * @date        2017-06-01
 */

// Security check to ensure this file is being included by a parent file.
if (!defined('_JEXEC'))
{
	die('Direct Access to this location is not allowed.');
}

/**
 * Implement wizard based exportation of page title and metas data
 *
 * @author shumisha
 *
 */
class Sh404sefAdapterExportmetas extends JObject
{
	/**
	 * An array holding each step details
	 * A step is defined as a task, a view and a layout
	 * By default, task can be 'display', but still need
	 * to be defined in array
	 *
	 * @var array
	 */
	public $_stepsMap = array(

		-2   => array('task' => 'doTerminate', 'view' => 'wizard', 'layout' => 'default')
		, -1 => array('task' => 'doCancel', 'view' => 'wizard', 'layout' => 'default')
		, 0  => array('task' => 'doStart', 'view' => 'wizard', 'layout' => 'default')
		, 1  => array('task' => 'doExport', 'view' => 'wizard', 'layout' => 'default')
		, 2  => array('task' => 'doDownload', 'view' => 'wizard', 'layout' => 'default')

	);

	public $_stepsCount  = 0;
	public $_steps       = array('next' => 0, 'previous' => 0, 'cancel' => -1, 'terminate' => -2);
	public $_button      = '';
	public $_buttonsList = array('next', 'previous', 'terminate', 'cancel');
	// visible buttons are displayed as toolbar pressbutton
	// buttons not on that list are passed as 'hidden' post data
	public $_visibleButtonsList = array('previous', 'next', 'terminate', 'cancel');

	protected $_context          = 'metas';
	protected $_total            = 0;
	protected $_parentController = null;
	protected $_filename         = '';

	const MAX_PAGEIDS_PER_STEP = 100;

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
		$properties['_defaultTask'] = '';
		$properties['_defaultModel'] = '';
		$properties['_defaultView'] = 'wizard';
		$properties['_defaultLayout'] = 'default';

		$properties['_returnController'] = 'metas';
		$properties['_returnTask'] = '';
		$properties['_returnView'] = 'metas';
		$properties['_returnLayout'] = 'default';
		$properties['_pageTitle'] = JText::_('COM_SH404SEF_EXPORTING_TITLE');

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

		// A customiser :
		$this->_steps = array('next' => 1, 'previous' => 0, 'cancel' => -1, 'terminate' => -2);

		// return results
		$result = array();

		$result['mainText'] = JText::_('COM_SH404SEF_EXPORT_METAS_START');

		return $result;
	}

	/**
	 * Second step, export data
	 *
	 */
	public function doExport()
	{
		// which button should be displayed ?
		$this->_visibleButtonsList = array();

		// next steps definition
		$this->_steps = array('next' => 1, 'previous' => 0, 'cancel' => -1, 'terminate' => -2);

		// return results
		$result = array();

		// exporting a limited set of pageids at a time
		$nextStart = JRequest::getInt('nextstart', 0);

		// are we adding to an existing data file ?
		$this->_filename = Sh404sefHelperFiles::createFileName($this->_filename, 'sh404sef_export_' . $this->_context);

		// calculate number of items to export
		$model = ShlMvcModel_Base::getInstance('urls', 'Sh404sefModel');
		$model->setContext('metas.default');
		$options = (object) array('layout' => 'export', 'getMetaData' => true, 'onlyWithMetaData' => true, 'simpleUrlList' => true);
		$this->_total = $model->getTotal($options);

		// do we have anything to export ?
		if (empty($this->_total))
		{
			$result['mainText'] = JText::_('COM_SH404SEF_NOTHING_TO_EXPORT');
			// which button should be displayed ?
			$this->_visibleButtonsList = array('terminate');
			// next step so to trigger download, as file is ready now
			$this->_steps = array('next' => -2, 'previous' => 0, 'cancel' => -1, 'terminate' => -2);

			return $result;
		}

		// get new start item
		if (empty($nextStart))
		{
			// this is first pass, starting from 0
			$start = 0;
			$nextStart = $start + self::MAX_PAGEIDS_PER_STEP;
			if ($nextStart >= $this->_total)
			{
				// reached the end
				$nextStart = $this->_total;
			}
		}
		else
		{
			$start = $nextStart;
			$nextStart = $start + self::MAX_PAGEIDS_PER_STEP;
		}

		// are we done ? if so, move to next step
		$result['hiddenText'] = '';

		if ($start >= $this->_total)
		{
			// append homepage data. Hard to put them at the beginning, that'd make the whole counting logic more complex
			$this->_exportHomePageData($this->_total);

			// keep going to terminate page
			$result['mainText'] = JText::sprintf('COM_SH404SEF_EXPORT_DONE', $this->_total);
			$result['mainText'] .= $this->_getTerminateOptions();
			// which button should be displayed ?
			$this->_visibleButtonsList = array('terminate');
			// next step so to trigger download, as file is ready now
			$this->_steps = array('next' => 2, 'previous' => 0, 'cancel' => -1, 'terminate' => -2);
		}
		else
		{
			// actually export items
			$this->_export($start);

			// continuing for another round
			$result['mainText'] = JText::sprintf('COM_SH404SEF_EXPORT_EXPORTING', $start + 1, $this->_total);
			$result['hiddenText'] = '<input type="hidden" name="nextstart" value="' . $nextStart . '" />';
			$result['nextStart'] = $nextStart;
		}

		$result['continue'] = array('task' => 'next', 'nextstart' => $nextStart, 'filename' => base64_encode($this->_filename));
		$result['continue'] = array_merge($result['continue'], $this->_steps);
		$result['hiddenText'] .= '<input type="hidden" name="filename" value="' . $this->_filename . '" />';

		return $result;
	}

	/**
	 * Last step, send results as download
	 *
	 */
	public function doDownload()
	{
		// fake content
		$data = '';

		// get the current filename with path
		$this->_filename = Sh404sefHelperFiles::createFileName($this->_filename, 'sh404sef_export_' . $this->_context);

		// get a more readable filename
		$displayName = date('Y-m-d') . '_' . $this->_context . '_export.txt';

		Sh404sefHelperFiles::triggerDownload($this->_filename, $displayName);
	}

	/**
	 * Close the wizard window and redirect to default page
	 *
	 */
	public function doTerminate()
	{
		// are we set to purge temporary files ?
		$purgeTempFiles = JRequest::getInt('purge_temp_files', 0);
		if (!empty($purgeTempFiles))
		{
			Sh404sefHelperFiles::purgeTempFiles('sh404sef_export_' . $this->_context);
		}

		// now go back to main page
		$result = array('redirectTo' => true);

		return $result;
	}

	/**
	 * Close the wizard window and redirect to default page
	 *
	 */
	public function doCancel()
	{
		$result = array();
		$result['redirectTo'] = true;
		$result['redirectOptions'] = array('sh404sefMsg' => 'COM_SH404SEF_WIZARD_CANCELLED');

		return $result;
	}

	protected function _export($start)
	{
		// do we have a valid filename
		$this->_filename = Sh404sefHelperFiles::createFileName($this->_filename, 'sh404sef_export_' . $this->_context);

		// put some data in the file
		$end = $start + self::MAX_PAGEIDS_PER_STEP + 1;
		$end = $end > $this->_total ? $this->_total : $end;

		// fetch pageIds record from model
		$model = ShlMvcModel_Base::getInstance('urls', 'Sh404sefModel');
		$model->setContext('metas.default');
		$options = (object) array('layout' => 'export', 'getMetaData' => true, 'onlyWithMetaData' => true, 'simpleUrlList' => true);
		$records = $model->getList($options, $returnZeroElement = false, $start, $forcedLimit = self::MAX_PAGEIDS_PER_STEP);

		// do we need a header written to the file, for first record
		$header = $start == 0 ? Sh404sefHelperGeneral::getExportHeaders($this->_context) . "\n" : '';

		// format them for text file output
		$data = '';
		$counter = $start;
		$glue = Sh404sefHelperFiles::$stringDelimiter . Sh404sefHelperFiles::$fieldDelimiter . Sh404sefHelperFiles::$stringDelimiter;
		if (!empty($records))
		{
			foreach ($records as $record)
			{
				$counter++;
				$data .= $this->_createLine($record, $counter, $glue);
			}
		}

		// prepare data for storage
		if (!empty($header))
		{
			// first record written to file, prepend header
			$data = $header . $data;
		}

		// store in file
		$status = Sh404sefHelperFiles::appendToFile($this->_filename, $data);

		// return any error
		return $status;
	}

	protected function _exportHomePageData($start)
	{
		// get data from model
		$model = ShlMvcModel_Base::getInstance('metas', 'Sh404sefModel');
		$model->setContext('metas.default');
		$options = (object) array('layout' => 'default', 'newurl' => sh404SEF_HOMEPAGE_CODE);
		$this->_total += 1;
		$homePageMetaData = $model->getList($options);

		// format them for text file output
		$data = '';
		$counter = $start;
		$glue = Sh404sefHelperFiles::$stringDelimiter . Sh404sefHelperFiles::$fieldDelimiter . Sh404sefHelperFiles::$stringDelimiter;
		if (!empty($homePageMetaData))
		{
			foreach ($homePageMetaData as $record)
			{
				$counter++;
				$record->oldurl = '';
				$record->newurl = '__ Homepage __';
				$data .= $this->_createLine($record, $counter, $glue);
			}
		}

		// prepare data for storage
		if (!empty($header))
		{
			// first record written to file, prepend header
			$data = $header . $data;
		}

		// store in file
		$status = Sh404sefHelperFiles::appendToFile($this->_filename, $data);
	}

	/**
	 * Creates an export file line, based on db record
	 *
	 * @param $record  the data coming from DB
	 * @param $counter , running counter
	 * @param $glue    , glue string between elements of records
	 */
	protected function _createLine($record, $counter, $glue)
	{
		$textRecord = $record->oldurl
			. $glue . $record->newurl
			. $glue . (empty($record->cpt) ? 0 : $record->cpt)
			. $glue . (empty($record->rank) ? 0 : $record->rank)
			. $glue . (!isset($record->dateadd) ? '0000-00-00' : $record->dateadd)
			. $glue . Sh404sefHelperFiles::csvQuote($record->metatitle)
			. $glue . Sh404sefHelperFiles::csvQuote($record->metadesc)
			. $glue . Sh404sefHelperFiles::csvQuote($record->metakey)
			. $glue . Sh404sefHelperFiles::csvQuote($record->metalang)
			. $glue . Sh404sefHelperFiles::csvQuote($record->metarobots)
			. $glue . Sh404sefHelperFiles::csvQuote($record->canonical)
			. Sh404sefHelperFiles::$stringDelimiter;
		$line = Sh404sefHelperFiles::$stringDelimiter . $counter . $glue . $textRecord . "\n";

		return $line;
	}

	protected function _getTerminateOptions()
	{
		$options = '<br /><br />';
		$options .= '<input type="checkbox" name="purge_temp_files" value="1" checked="checked" >';
		$options .= JText::_('COM_SH404SEF_PURGE_TEMP_FILES');
		$options .= '<br />';

		return $options;
	}

}
