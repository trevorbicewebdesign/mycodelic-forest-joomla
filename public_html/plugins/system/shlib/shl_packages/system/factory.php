<?php
/**
 * Shlib - programming library
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier 2018
 * @package      shlib
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      0.4.0.678
 * @date        2018-08-02
 */

// no direct access
defined('_JEXEC') or die;

$fileName = __DIR__ . '/' . \ShlSystem_Compat::getJoomlaVersionPrefix() . '/' . basename(__FILE__);
if (file_exists($fileName))
{
	include_once $fileName;
}
