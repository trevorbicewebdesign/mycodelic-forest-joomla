<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 * @date        2020-06-26
 */

use Joomla\CMS\Factory;

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die;

/**
 * Implement analytics handling
 *
 */
class Sh404sefClassBaseanalytics
{
	/**
	 * Check if user set parameters and request
	 * data allow inserting tracking snippet
	 */
	protected function _shouldInsertSnippet()
	{
		// get config
		$config = Sh404sefFactory::getConfig();

		// check if we have a tracking code, no need to insert snippet if no tracking code
		if (empty($config->analyticsUgaId) && $config->analyticsEdition == 'uga')
		{
			return false;
		}

		if (empty($config->analyticsGtmId) && $config->analyticsEdition == 'gtm')
		{
			return false;
		}

		$user              = Factory::getUser();
		$userViewLevels    = $user->getAuthorisedViewLevels();
		$allowedViewLevels = $config->analyticsViewLevel;

		// check access view first
		$shouldInsert = false;
		if (!empty($allowedViewLevels) && is_array($allowedViewLevels) && !empty($userViewLevels) && is_array($userViewLevels))
		{
			if (array_intersect($allowedViewLevels, $userViewLevels))
			{
				$shouldInsert = true;
			}
		}

		// check if we are set to include tracking code for current user
		$groups = $user->getAuthorisedGroups();
		if (!empty($config->analyticsUserGroups) && sh404sefHelperGeneral::isInGroupList(
				$groups,
				$config->analyticsUserGroups
			)
		)
		{
			$shouldInsert = true;
		}
		if (!empty($config->analyticsUserGroupsDisabled) && sh404sefHelperGeneral::isInGroupList(
				$groups,
				$config->analyticsUserGroupsDisabled
			)
		)
		{
			$shouldInsert = false;
		}
		// check if current IP is on exclusion list
		if (!empty($config->analyticsExcludeIP))
		{
			$ip      = ShlSystem_Http::getVisitorIpAddress();
			$exclude = Sh404sefHelperGeneral::checkIPList($ip, $config->analyticsExcludeIP);
			if ($exclude)
			{
				$shouldInsert = false;
			}
		}

		return $shouldInsert;
	}
}
