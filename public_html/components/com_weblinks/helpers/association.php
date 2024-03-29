<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_weblinks
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::register('WeblinksHelper', JPATH_ADMINISTRATOR . '/components/com_weblinks/helpers/weblinks.php');
JLoader::register('WeblinksHelperRoute', JPATH_SITE . '/components/com_weblinks/helpers/route.php');
JLoader::register('CategoryHelperAssociation', JPATH_ADMINISTRATOR . '/components/com_categories/helpers/association.php');

/**
 * Weblinks Component Association Helper
 *
 * @since  3.0
 */
abstract class WeblinksHelperAssociation extends CategoryHelperAssociation
{
	/**
	 * Method to get the associations for a given item
	 *
	 * @param   integer  $id    Id of the item
	 * @param   string   $view  Name of the view
	 *
	 * @return  array   Array of associations for the item
	 *
	 * @since   3.0
	 */
	public static function getAssociations($id = 0, $view = null)
	{
		$jinput = JFactory::getApplication()->input;
		$view   = is_null($view) ? $jinput->get('view') : $view;
		$id     = empty($id) ? $jinput->getInt('id') : $id;

		if ($view === 'weblink')
		{
			if ($id)
			{
				$associations = JLanguageAssociations::getAssociations('com_weblinks', '#__weblinks', 'com_weblinks.item', $id);

				$return = array();

				foreach ($associations as $tag => $item)
				{
					$return[$tag] = WeblinksHelperRoute::getWeblinkRoute($item->id, (int) $item->catid, $item->language);
				}

				return $return;
			}
		}

		if ($view == 'category' || $view == 'categories')
		{
			return self::getCategoryAssociations($id, 'com_weblinks');
		}

		return array();
	}
}
