<?php
/**
 * @package    Joomla.Site
 *
 * @copyright  Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

define('_JDEFINES', 1); 
define('JPATH_BASE', dirname(__FILE__));

define( 'CODECEPTION', ($_SERVER['HTTP_USER_AGENT']=='Symfony BrowserKit' || preg_match("#PhantomJS#", $_SERVER['HTTP_USER_AGENT']) )?true:false );

$environment = getenv("APPLICATION_ENV")?getenv("APPLICATION_ENV"):'production';

if(CODECEPTION){$environment = 'codeception';}

// Global definitions
$parts = explode(DIRECTORY_SEPARATOR, JPATH_BASE);

// Defines.
define('JPATH_ROOT',          implode(DIRECTORY_SEPARATOR, $parts));
define('JPATH_SITE',          JPATH_ROOT);
$public_html = dirname(JPATH_ROOT, 1);
define('JPATH_CONFIGURATION', $public_html . DIRECTORY_SEPARATOR . 'configurations' . DIRECTORY_SEPARATOR .$environment);
define('JPATH_ADMINISTRATOR', $public_html . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'administrator');
define('JPATH_LIBRARIES',     $public_html . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'libraries');
define('JPATH_PLUGINS',       $public_html . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'plugins');
define('JPATH_INSTALLATION',  $public_html . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'installation');
define('JPATH_THEMES',        $public_html . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'templates');
define('JPATH_CACHE',         $public_html . DIRECTORY_SEPARATOR . 'public_html' . DIRECTORY_SEPARATOR . 'cache');
define('JPATH_MANIFESTS',     JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'manifests');