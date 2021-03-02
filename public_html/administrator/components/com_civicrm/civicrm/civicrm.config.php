<?php
define('CIVICRM_SETTINGS_PATH', 'C:\MAMP\htdocs\mycodelic-forest-joomla\public_html\administrator\components\com_civicrm\civicrm.settings.php');
$error = @include_once( 'C:\MAMP\htdocs\mycodelic-forest-joomla\public_html\administrator\components\com_civicrm\civicrm.settings.php' );
if ( $error == false ) {
    echo "Could not load the settings file at: C:\MAMP\htdocs\mycodelic-forest-joomla\public_html\administrator\components\com_civicrm\civicrm.settings.php
";
    exit( );
}

// Load class loader
require_once $civicrm_root . '/CRM/Core/ClassLoader.php';
CRM_Core_ClassLoader::singleton()->register();