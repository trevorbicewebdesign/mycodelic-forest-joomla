<?php

$basepath = dirname(__FILE__, 5);  
define("_JEXEC",true);
require_once("{$basepath}/defines.php");
require_once(JPATH_CONFIGURATION."/configuration.php");
define('CIVICRM_SETTINGS_PATH', "{$basepath}/administrator/components/com_civicrm/civicrm.settings.php");
$ClassLoader = "{$basepath}/administrator/components/com_civicrm/civicrm/CRM/Core/ClassLoader.php";
$error = include_once( CIVICRM_SETTINGS_PATH );
if ( $error == false ) {
    echo "Could not load the settings file at: ".CIVICRM_SETTINGS_PATH;
    exit( );
}
require_once $ClassLoader;
CRM_Core_ClassLoader::singleton()->register();