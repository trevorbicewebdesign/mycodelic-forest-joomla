<?php
/**
* @version 1.4.0
* @package RSform!Pro 1.4.0
* @copyright (C) 2007-2011 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

/**
 * RSForm! Pro system plugin
 */
class plgSystemRSFPSalesforce extends JPlugin
{
	/**
	 * Constructor
	 *
	 * For php4 compatibility we must not use the __constructor as a constructor for plugins
	 * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
	 * This causes problems with cross-referencing necessary for the observer design pattern.
	 *
	 * @access	protected
	 * @param	object	$subject The object to observe
	 * @param 	array   $config  An array that holds the plugin configuration
	 * @since	1.0
	 */
	function plgSystemRSFPSalesforce(&$subject, $config)
	{
		parent::__construct($subject, $config);
	}
	
	function rsfp_onFormSave($form)
	{
		$post = JRequest::get('post', JREQUEST_ALLOWRAW);
		$post['form_id'] = $post['formId'];
		
		$row = JTable::getInstance('RSForm_Salesforce', 'Table');
		if (!$row)
			return;
		if (!$row->bind($post))
		{
			JError::raiseWarning(500, $row->getError());
			return false;
		}
		
		$db = JFactory::getDBO();
		$db->setQuery("SELECT form_id FROM #__rsform_salesforce WHERE form_id='".(int) $post['form_id']."'");
		if (!$db->loadResult())
		{
			$db->setQuery("INSERT INTO #__rsform_salesforce SET form_id='".(int) $post['form_id']."'");
			$db->execute();
		}
		
		$row->slsf_custom_fields = '';
		if (!empty($post['slsf_api_name']))
		{
			$row->slsf_custom_fields = array();
			for ($i=0; $i<count($post['slsf_api_name']); $i++)
			{
				$tmp = new stdClass();
				$tmp->api_name = $post['slsf_api_name'][$i];
				$tmp->value = $post['slsf_value'][$i];
				
				$row->slsf_custom_fields[] = $tmp;
			}
			$row->slsf_custom_fields = serialize($row->slsf_custom_fields);
		}
		
		if ($row->store())
		{
			return true;
		}
		else
		{
			JError::raiseWarning(500, $row->getError());
			return false;
		}
	}
	
	function rsfp_bk_onAfterShowFormEditTabs()
	{
		$formId = JRequest::getInt('formId');
		
		$lang = JFactory::getLanguage();
		$lang->load('plg_system_rsfpsalesforce');
		
		$row = JTable::getInstance('RSForm_Salesforce', 'Table');
		if (!$row)
			return;
		$row->load($formId);
		$row->slsf_custom_fields = !empty($row->slsf_custom_fields) ? unserialize($row->slsf_custom_fields) : array();
		
		$lists['published'] = RSFormProHelper::renderHTML('select.booleanlist','slsf_published','class="inputbox" onclick="enableSalesforce(this.value)"',$row->slsf_published);
		$lists['debug'] = RSFormProHelper::renderHTML('select.booleanlist','slsf_debug','class="inputbox" onclick="enableSalesforceDebug(this.value)"',$row->slsf_debug);
		
		echo '<div id="salesforcediv">';
			include JPATH_ADMINISTRATOR.'/components/com_rsform/helpers/salesforce.php';
		echo '</div>';
	}
	
	function rsfp_bk_onAfterShowFormEditTabsTab()
	{
		$lang = JFactory::getLanguage();
		$lang->load('plg_system_rsfpsalesforce');
		
		echo '<li><a href="javascript: void(0);" id="salesforce"><span>'.JText::_('RSFP_SALESFORCE_INTEGRATION').'</span></a></li>';
	}
	
	function rsfp_f_onAfterFormProcess($args)
	{
		$db = JFactory::getDBO();
		
		$formId = (int) $args['formId'];
		$SubmissionId = (int) $args['SubmissionId'];
		
		$db->setQuery("SELECT * FROM #__rsform_salesforce WHERE `form_id`='".$formId."' AND `slsf_published`='1'");
		if ($row = $db->loadObject())
		{
			list($replace, $with) = RSFormProHelper::getReplacements($SubmissionId);
			$replace[] = '\n';
			$with[]	   = "\n";
			
			$req  = "&oid=" . urlencode(str_replace($replace, $with, $row->slsf_oid));
			$req .= "&lead_source=". urlencode(str_replace($replace, $with, $row->slsf_lead_source));
			$req .= "&first_name=" . urlencode(str_replace($replace, $with, $row->slsf_first_name));
			$req .= "&last_name=" . urlencode(str_replace($replace, $with, $row->slsf_last_name)); 
			$req .= "&title=" . urlencode(str_replace($replace, $with, $row->slsf_title));
			$req .= "&company=" . urlencode(str_replace($replace, $with, $row->slsf_company));
			$req .= "&email=" . urlencode(str_replace($replace, $with, $row->slsf_email));
			$req .= "&phone=" . urlencode(str_replace($replace, $with, $row->slsf_phone));
			$req .= "&street=" . urlencode(str_replace($replace, $with, $row->slsf_street));
			$req .= "&city=" . urlencode(str_replace($replace, $with, $row->slsf_city)); 
			$req .= "&state=" . urlencode(str_replace($replace, $with, $row->slsf_state));
			$req .= "&zip=" . urlencode(str_replace($replace, $with, $row->slsf_zip));
			$req .= "&country=" . urlencode(str_replace($replace, $with, $row->slsf_country));
			$req .= "&industry=" . urlencode(str_replace($replace, $with, $row->slsf_industry));
			$req .= "&description=" . urlencode(str_replace($replace, $with, $row->slsf_description));
			$req .= "&mobile=" . urlencode(str_replace($replace, $with, $row->slsf_mobile));
			$req .= "&fax=" . urlencode(str_replace($replace, $with, $row->slsf_fax));			
			$req .= "&URL=" . urlencode(str_replace($replace, $with, $row->slsf_website));
			$req .= "&salutation=" . urlencode(str_replace($replace, $with, $row->slsf_salutation));
			$req .= "&revenue=" . urlencode(str_replace($replace, $with, $row->slsf_revenue));
			$req .= "&employees=" . urlencode(str_replace($replace, $with, $row->slsf_employees));
			$req .= "&emailOptOut=" . urlencode(str_replace($replace, $with, $row->slsf_emailoptout));
			$req .= "&faxOptOut=" . urlencode(str_replace($replace, $with, $row->slsf_faxoptout));
			$req .= "&doNotCall=" . urlencode(str_replace($replace, $with, $row->slsf_donotcall));
			
			if ($row->slsf_campaign_id)
				$req .= "&Campaign_ID=" . urlencode(str_replace($replace, $with, $row->slsf_campaign_id));
			
			$row->slsf_custom_fields = !empty($row->slsf_custom_fields) ? unserialize($row->slsf_custom_fields) : array();
			if (!empty($row->slsf_custom_fields))
				foreach ($row->slsf_custom_fields as $field)
					$req .= "&".$field->api_name.'=' . urlencode(str_replace($replace, $with, $field->value));
			
			// Debugging ?
			$req .= "&debug=" . urlencode((int) $row->slsf_debug);
			if ($row->slsf_debug)
				$req .= "&debugEmail=" . urlencode(str_replace($replace, $with, $row->slsf_debugEmail));
			
			$header  = "POST /servlet/servlet.WebToLead?encoding=UTF-8 HTTP/1.0\r\n";
			$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
			$header .= "User-Agent: RSForm! Pro Web2Lead\r\n";
			$header .= "Host: www.salesforce.com\r\n";
			$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
			$fp = fsockopen ('www.salesforce.com', 80, $errno, $errstr, 30);
			if ($fp)
			{
				fputs ($fp, $header . $req);
				fclose($fp);
			}
		}
	}
}