<?php
/**
 * Shlib - programming library
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier 2018
 * @package      shlib
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      0.4.0.685
 * @date                2019-04-25
 */

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') or die;

abstract Class ShlMvcModel_Form extends \JModelForm
{
	/**
	 * Constructor
	 *
	 * @param   array $config An array of configuration options (name, state, dbo, table_path, ignore_request).
	 *
	 * @since   11.1
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);

		// Set the model dbo
		if (!array_key_exists('dbo', $config))
		{
			$this->_db = \JFactory::getDbo();
		}
	}

}
