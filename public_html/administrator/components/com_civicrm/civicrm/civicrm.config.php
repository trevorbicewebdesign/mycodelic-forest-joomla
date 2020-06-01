<?php
$basepath = dirname(__FILE__, 5);  
define('CIVICRM_SETTINGS_PATH', "{$basepath}administrator/components/com_civicrm/civicrm.settings.php");
$error = include_once( "{$basepath}administrator/components/com_civicrm/civicrm.settings.php" );
if ( $error == false ) {
    echo "Could not load the settings file at: {$basepath}administrator/components/com_civicrm/civicrm.settings.php";
    exit( );
}

// Load class loader
require_once $civicrm_root . '/CRM/Core/ClassLoader.php';

CRM_Core_ClassLoader::singleton()->register();