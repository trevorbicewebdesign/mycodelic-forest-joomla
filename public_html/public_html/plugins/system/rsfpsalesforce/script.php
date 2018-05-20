<?php
/**
* @version 1.4.0
* @package RSform!Pro 1.4.0
* @copyright (C) 2007-2012 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class plgSystemRSFPSalesforceInstallerScript
{
	public function preflight($type, $parent) {
		if ($type == 'uninstall') {
			return true;
		}
		
		$app = JFactory::getApplication();
		
		if (!file_exists(JPATH_ADMINISTRATOR.'/components/com_rsform/helpers/rsform.php')) {
			$app->enqueueMessage('Please install the RSForm! Pro component before continuing.', 'error');
			return false;
		}
		
		if (!file_exists(JPATH_ADMINISTRATOR.'/components/com_rsform/helpers/version.php')) {
			$app->enqueueMessage('Please upgrade RSForm! Pro to at least R45 before continuing!', 'error');
			return false;
		}
		
		$jversion = new JVersion();
		if (!$jversion->isCompatible('2.5.5')) {
			$app->enqueueMessage('Please upgrade to at least Joomla! 2.5.5 before continuing!', 'error');
			return false;
		}
		
		return true;
	}
	
	public function update($parent) {
		$this->copyFiles($parent);
		
		$db = JFactory::getDbo();
		$db->setQuery("SHOW COLUMNS FROM `#__rsform_salesforce` WHERE `Field`='slsf_custom_fields'");
		if (!$db->loadResult())
		{
			$db->setQuery("ALTER TABLE `#__rsform_salesforce` ADD `slsf_industry` VARCHAR( 255 ) NOT NULL AFTER `slsf_debugEmail` ,".
						  "ADD `slsf_description` TEXT NOT NULL AFTER `slsf_industry` ,".
						  "ADD `slsf_mobile` VARCHAR( 255 ) NOT NULL AFTER `slsf_description` ,".
						  "ADD `slsf_fax` VARCHAR( 255 ) NOT NULL AFTER `slsf_mobile` ,".
						  "ADD `slsf_website` VARCHAR( 255 ) NOT NULL AFTER `slsf_fax` ,".
						  "ADD `slsf_salutation` VARCHAR( 255 ) NOT NULL AFTER `slsf_website` ,".
						  "ADD `slsf_revenue` VARCHAR( 255 ) NOT NULL AFTER `slsf_salutation` ,".
						  "ADD `slsf_employees` VARCHAR( 255 ) NOT NULL AFTER `slsf_revenue` ,".
						  "ADD `slsf_custom_fields` TEXT NOT NULL AFTER `slsf_employees`");
			$db->execute();
		}

		$db->setQuery("SHOW COLUMNS FROM `#__rsform_salesforce` WHERE `Field`='slsf_campaign_id'");
		if (!$db->loadResult())
		{
			$db->setQuery("ALTER TABLE `#__rsform_salesforce` ADD `slsf_campaign_id` VARCHAR( 255 ) NOT NULL AFTER `slsf_custom_fields`");
			$db->execute();
		}

		$db->setQuery("SHOW COLUMNS FROM `#__rsform_salesforce` WHERE `Field`='slsf_donotcall'");
		if (!$db->loadResult())
		{
			$db->setQuery("ALTER TABLE `#__rsform_salesforce` ADD `slsf_donotcall` VARCHAR( 255 ) NOT NULL AFTER `slsf_campaign_id`, ADD `slsf_emailoptout` VARCHAR( 255 ) NOT NULL AFTER `slsf_donotcall`,
		ADD `slsf_faxoptout` VARCHAR( 255 ) NOT NULL AFTER `slsf_emailoptout`");
			$db->execute();
		}

		$db->setQuery("SHOW COLUMNS FROM `#__rsform_salesforce` WHERE `Field`='slsf_country'");
		if (!$db->loadResult())
		{
			$db->setQuery("ALTER TABLE `#__rsform_salesforce` ADD `slsf_country` VARCHAR( 255 ) NOT NULL AFTER `slsf_zip`");
			$db->execute();
		}
	}
	
	public function install($parent) {
		$this->copyFiles($parent);
	}
	
	protected function copyFiles($parent) {
		$app = JFactory::getApplication();
		$installer = $parent->getParent();
		$src = $installer->getPath('source').'/admin';
		$dest = JPATH_ADMINISTRATOR.'/components/com_rsform';
		
		if (!JFolder::copy($src, $dest, '', true)) {
			$app->enqueueMessage('Could not copy to '.str_replace(JPATH_SITE, '', $dest).', please make sure destination is writable!', 'error');
		}
	}
}