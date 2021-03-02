<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 *
 * 2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\Base;

/** ensure this file is being included by a parent file */
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Base app class.
 *
 */
class App extends Base
{
	/**
	 * @var Array Stored options.
	 */
	protected $options = null;

	protected $id        = '';
	protected $namespace = '';
	protected $rootpath  = '';
	protected $enabled   = true;

	public function __construct($options = array())
	{
		parent::__construct();

		$this->options = $options;
		$this->id      = wbArrayGet(
			$options,
			'id',
			''
		);
		if (empty($this->id))
		{
			wbThrow(new \RuntimeException('Wblib: cannot start application, no id provided.'));
		}

		$this->namespace = wbArrayGet(
			$options,
			'namespace',
			''
		);
		$this->rootpath  = wbArrayGet(
			$options,
			'rootpath',
			''
		);
		if (!empty($this->namespace) && !empty($this->rootpath))
		{
			$this->factory->getThe('autoloader')
			              ->registerNamespace(
				              $this->namespace,
				              $this->rootpath
			              );
		}

		// allow user hooks by loading the "functions" file for the app.
		$this->factory->getThe('hook')
		              ->load(
			              $this->id . '_functions.php'
		              );
	}
}
