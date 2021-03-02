<?php
/**
 * Shlib - programming library
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier 2020
 * @package      shlib
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      0.4.0.711
 * @date        2020-06-26
 */

defined('_JEXEC') or die;

/**
 * Class ShlBase
 */
class ShlBase
{
	/**
	 * @var \ShlFactory $factory Injected factory.
	 */
	protected $factory;

	/**
	 * @var \ShlPlatform_Interface Instance of the platform in use.
	 */
	protected $platform;

	/**
	 * \ShlBase constructor. Instantiate and store a factory and platform instance.
	 */
	public function __construct()
	{
		$this->factory = new \ShlFactory();
		$this->platform = $this->factory->getThe('platform');
	}
}
