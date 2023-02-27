<?php
/**
* @package RSForm! Pro
* @copyright (C) 2007-2019 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

defined( '_JEXEC' ) or die( 'Restricted access' );

class RsformRouter extends JComponentRouterBase
{
	public function preprocess($query)
	{
		if (!isset($query['Itemid']))
		{
			if ($item = JFactory::getApplication()->getMenu()->getActive())
			{
				$query['Itemid'] = $item->id;
			}
		}

		return $query;
	}

	public function build(&$query)
	{
		$segments   = array();
		$app 	    = JFactory::getApplication();

		// Load language
		JFactory::getLanguage()->load('com_rsform', JPATH_SITE);

		$app->triggerEvent('onRsformBeforeFormBuildRoute', array(&$segments, &$query));

		$view 	= isset($query['view']) ? $query['view'] : 'rsform';
		$layout = isset($query['layout']) ? $query['layout'] : 'default';

		// Is this a menu item?
		if (isset($query['Itemid']))
		{
			$menu = $app->getMenu();
			// Found the menu item based on Itemid
			if ($item = $menu->getItem($query['Itemid']))
			{
				// The Itemid belongs to RSForm! Pro
				if (isset($item->component) && $item->component == 'com_rsform' && isset($item->query))
				{
					// We've got a match
					if (isset($item->query['view']) && $item->query['view'] == $view)
					{
						switch ($view)
						{
							// Form menu item
							case 'rsform':
								// If it's the same formId point to the menu item directly
								if (isset($item->query['formId']) && isset($query['formId']) && $item->query['formId'] == $query['formId'])
								{
									unset($query['view']);
									unset($query['formId']);

									// If we have a task append it
									if (isset($query['task']) && $query['task'] == 'confirm')
									{
										$segments[] = JText::_('COM_RSFORM_SEF_CONFIRM_SUBMISSION');
										unset($query['task']);
									}

									return $segments;
								}
								break;

							// Submissions menu item
							case 'submissions':
								// Submissions are only accessible through the menu, point to that
								if ($layout == 'default')
								{
									unset($query['view']);
									return $segments;
								}
								// Otherwise we continue with the logic below to show a submission {detail}
								break;

							case 'directory':
								if ($layout == 'default')
								{
									unset($query['view']);
									return $segments;
								}
								break;
						}
					}
				}
			}
		}

		switch ($view)
		{
			case 'directory':
				switch ($layout)
				{
					case 'view':
						$segments[] = JText::_('COM_RSFORM_SEF_DIRECTORY_VIEW_SUBMISSION');
						if (isset($query['id']))
						{
							$segments[] = $query['id'];
						}

						unset($query['view'], $query['layout'], $query['id']);
						break;

					case 'edit':
						$segments[] = JText::_('COM_RSFORM_SEF_DIRECTORY_EDIT_SUBMISSION');
						if (isset($query['id']))
						{
							$segments[] = $query['id'];
						}

						unset($query['view'], $query['layout'], $query['id']);
						break;

					default:
					case 'default':
						$segments[] = JText::_('COM_RSFORM_SEF_SUBMISSIONS_DIRECTORY');

						unset($query['view'], $query['layout']);
						break;
				}
				break;

			case 'submissions':
				switch ($layout)
				{
					case 'view':
						$segments[] = JText::_('COM_RSFORM_SEF_SUBMISSIONS_VIEW_SUBMISSION');
						if (isset($query['cid']))
						{
							$segments[] = $query['cid'];
						}

						unset($query['view'], $query['layout'], $query['cid']);
						break;

					default:
					case 'default':
						$segments[] = JText::_('COM_RSFORM_SEF_SUBMISSIONS_VIEW_SUBMISSIONS');

						unset($query['view'], $query['layout']);
						break;
				}
				break;

			case 'deletesubmission':
				switch ($layout)
				{
					case 'complete':
						$segments[] = JText::_('COM_RSFORM_SEF_DELETE_SUBMISSION_COMPLETE');
						break;

					default:
						$segments[] = JText::_('COM_RSFORM_SEF_DELETE_SUBMISSION_REQUEST');
						break;
				}
				unset($query['view'], $query['layout']);
				break;

			case 'rsform':
				if (!empty($query['formId']))
				{
					$segments[] = JText::_('COM_RSFORM_SEF_FORM');

					$formId 	= (int) $query['formId'];
					$formName 	= JFilterOutput::stringURLSafe($this->getFormTitle($formId));

					$segments[] = $formId . (!empty($formName) ? ':' . $formName : '');

					unset($query['formId'], $query['view']);
				}
				unset($query['view']);
				break;
		}

		if (isset($query['task']))
		{
			switch ($query['task'])
			{
				case 'submissions.viewfile':
					$segments[] = JText::_('COM_RSFORM_SEF_SUBMISSIONS_VIEW_FILE');

					if (isset($query['hash']))
					{
						$segments[] = $query['hash'];
						unset($query['hash']);

						if (isset($query['file']))
						{
							$segments[] = $query['file'];
							unset($query['file']);
						}
					}

					unset($query['task']);
					break;

				case 'confirm':
					$segments[] = JText::_('COM_RSFORM_SEF_CONFIRM_SUBMISSION');
					unset($query['task']);
					break;

				case 'delete':
					if (isset($query['controller']) && $query['controller'] == 'directory')
					{
						$segments[] = JText::_('COM_RSFORM_SEF_DIRECTORY_DELETE_SUBMISSION');
						if (isset($query['id']))
						{
							$segments[] = $query['id'];
						}

						unset($query['controller'], $query['task'], $query['id']);
					}
					break;
			}
		}

		$app->triggerEvent('onRsformAfterFormBuildRoute', array(&$segments, &$query));

		return $segments;
	}

	public function parse(&$segments)
	{
		$query = array();
		$app = JFactory::getApplication();

		// Load language
		JFactory::getLanguage()->load('com_rsform', JPATH_SITE);

		$app->triggerEvent('onRsformBeforeFormParseRoute', array(&$segments, &$query));

		$segments[0] = !empty($segments[0]) ? $segments[0] : 'form';
		$segments[0] = str_replace(':', '-', $segments[0]);

		switch ($segments[0])
		{
			case JText::_('COM_RSFORM_SEF_FORM'):
				if (isset($segments[1]))
				{
					$exp = explode(':', $segments[1], 2);
					$query['formId'] = (int) $exp[0];
				}
				break;

			case JText::_('COM_RSFORM_SEF_SUBMISSIONS_VIEW_SUBMISSIONS'):
				$query['view'] = 'submissions';
				break;

			case JText::_('COM_RSFORM_SEF_SUBMISSIONS_VIEW_SUBMISSION'):
				$query['view'] = 'submissions';
				$query['layout'] = 'view';

				if (isset($segments[1]))
				{
					$query['cid'] = $segments[1];
				}
				break;

			case JText::_('COM_RSFORM_SEF_CONFIRM_SUBMISSION'):
				$query['task'] = 'confirm';
				break;

			case JText::_('COM_RSFORM_SEF_SUBMISSIONS_DIRECTORY'):
				$query['view'] = 'directory';
				break;

			case JText::_('COM_RSFORM_SEF_DIRECTORY_VIEW_SUBMISSION'):
				$query['view'] = 'directory';
				$query['layout'] = 'view';
				if (isset($segments[1]))
				{
					$query['id'] = $segments[1];
				}
				break;

			case JText::_('COM_RSFORM_SEF_DIRECTORY_EDIT_SUBMISSION'):
				$query['view'] = 'directory';
				$query['layout'] = 'edit';
				if (isset($segments[1]))
				{
					$query['id'] = $segments[1];
				}
				break;

			case JText::_('COM_RSFORM_SEF_DIRECTORY_DELETE_SUBMISSION'):
				$query['controller'] = 'directory';
				$query['task'] = 'delete';
				if (isset($segments[1]))
				{
					$query['id'] = (int) $segments[1];
				}

				break;

			case JText::_('COM_RSFORM_SEF_SUBMISSIONS_VIEW_FILE'):
				$query['task'] = 'submissions.viewfile';

				if (isset($segments[1]))
				{
					$query['hash'] = $segments[1];
				}
				if (isset($segments[2]))
				{
					$query['file'] = $segments[2];
				}

				break;

			case JText::_('COM_RSFORM_SEF_DELETE_SUBMISSION_COMPLETE'):
				$query['view'] = 'deletesubmission';
				$query['layout'] = 'complete';
				break;

			case JText::_('COM_RSFORM_SEF_DELETE_SUBMISSION_REQUEST'):
				$query['view'] = 'deletesubmission';
				$query['layout'] = 'default';
				break;
		}

		$app->triggerEvent('onRsformAfterFormParseRoute', array(&$segments, &$query));

		$segments = array();

		return $query;
	}

	private function getFormTitle($formId)
	{
		require_once JPATH_ADMINISTRATOR . '/components/com_rsform/helpers/rsform.php';

		static $titles = array();

		$lang = RSFormProHelper::getCurrentLanguage($formId);

		if (!isset($titles[$lang]))
		{
			$titles[$lang] = array();
		}

		if (!isset($titles[$lang][$formId]))
		{
			$db = JFactory::getDbo();

			$query = $db->getQuery(true)
				->select($db->qn('FormTitle'))
				->from($db->qn('#__rsform_forms'))
				->where($db->qn('FormId') . ' = ' . $db->q($formId));
			$titles[$lang][$formId] = $db->setQuery($query)->loadResult();

			if ($translations = RSFormProHelper::getTranslations('forms', $formId, $lang))
			{
				if (isset($translations['FormTitle']))
				{
					$titles[$lang][$formId] = $translations['FormTitle'];
				}
			}
		}

		return $titles[$lang][$formId];
	}
}