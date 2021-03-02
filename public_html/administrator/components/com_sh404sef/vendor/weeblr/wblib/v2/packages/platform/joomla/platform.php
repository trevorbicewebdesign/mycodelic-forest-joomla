<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author                  Yannick Gaultier
 * @copyright               (c) Yannick Gaultier - Weeblr llc - 2020
 * @package                 sh404SEF
 * @license                 http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version                 4.21.0.4206
 *
 * 2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\Platform;

use Joomla\CMS\Factory;
use Joomla\CMS\Filesystem\Folder;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Http\HttpFactory;
use Joomla\CMS\Cache\Cache;
use Joomla\Registry\Registry;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Session\Session;
use Joomla\CMS\Toolbar\ToolbarHelper;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 */
class JoomlaPlatform extends Platform implements Platforminterface
{
	protected $_name = 'joomla';

	private static $hooks = array();

	private static $hooksStack = array();

	private static $hooksRuns = array();

	/**
	 * Run any initialization code.
	 */
	public function boot()
	{

	}

	/**
	 * Detects whether running on Joomla.
	 *
	 * @return bool
	 */
	public function detect()
	{
		$detected =
			defined('_JEXEC')
			&&
			defined('JPATH_BASE');

		return $detected;
	}

	/**
	 * Returns major version of the running platform
	 */
	public function majorVersion()
	{
		$version = new \JVersion;
		return $version::MAJOR_VERSION;
	}

	/**
	 * Return full version of the running platform
	 */
	public function version()
	{
		$version = new \JVersion;
		return $version->getShortVersion();
	}

	public function getLayoutOverridePath()
	{
		return array();
	}

	public function getUniqueId()
	{
		return Factory::getConfig()->get('secret');
	}

	public function getUser($id = null)
	{
		return Factory::getUser($id);
	}

	public function sanitizeInput($type, $input)
	{
		switch ($type)
		{
			case 'string':
				$output = \JFilterInput::getInstance()->clean($input, $type);
				break;
			case 'html':
				$output = \JFilterInput::getInstance(null, null, 1, 1)->clean($input, $type);
				break;
			default:
				$output = $input;
				break;
		}

		return $output;
	}

	public function getCSRFToken($forceNew = false)
	{
		return Session::getFormToken($forceNew);
	}

	public function checkCSRFToken($method = 'post')
	{
		$method = strtolower($method);
		$token  = $this->getCSRFToken();
		$app    = \JFactory::getApplication();

		// Check from header first
		if ($token === $app->input->server->get('HTTP_X_CSRF_TOKEN', '', 'alnum'))
		{
			return true;
		}

		// Then fallback to HTTP query
		if (!$app->input->$method->get($token, '', 'alnum'))
		{
			return false;
		}

		return true;
	}

	public function getCurrentUrl()
	{
		return Uri::getInstance()->toString();
	}

	public function getSitename()
	{
		return Factory::getApplication()->get('sitename');
	}

	public function getBaseUrl($pathOnly = true)
	{
		return Uri::base($pathOnly);
	}

	public function getRootUrl($pathOnly = true)
	{
		return Uri::root($pathOnly);
	}

	public function getHttpInput()
	{
		return Factory::getApplication()->input;
	}

	public function getHttpClient($options = array())
	{
		return HttpFactory::getHttp(
			new Registry(
				$options
			)
		);
	}

	public function getCache($type, $options = array())
	{
		return Cache::getInstance(
			$type,
			$options
		);
	}

	public function getMethod()
	{
		return Factory::getApplication()->input->getMethod();
	}

	public function getRootPath()
	{
		return JPATH_ROOT;
	}

	public function getLogsPath()
	{
		return Factory::getConfig()->get('log_path');
	}

	public function getLayoutOverridesPath()
	{
		return array();
	}

	public function getCurrentLanguageTag($full = true)
	{
		return Factory::getLanguage()->getTag();
	}

	public function getCurrentLanguageDirection()
	{
		return Factory::getLanguage()->isRtl() ? 'rtl' : 'ltr';
	}

	public function getLanguageOverrides($extension)
	{
		if (empty($extension))
		{
			return array();
		}
		$extension = strtoupper($extension . '_');
		try
		{
			$language      = Factory::getLanguage();
			$r             = new \ReflectionClass('\Joomla\CMS\Language\Language');
			$overridesProp = $r->getProperty('override');
			$overridesProp->setAccessible(true);
			$overrides = $overridesProp->getValue($language);
			// only keep our overrides
			$mergedOverrides = [];
			// Keys can have a sub-level. In Overrides this is marked with a double underscore:
			// COM_FORSEO_MAIN_MENU__DASHBOARD
			foreach ($overrides as $key => $langString)
			{
				if (wbStartsWith($key, $extension))
				{
					$keys = explode('__', strtolower(wbLTrim($key, $extension)));
					if (count($keys) == 1)
					{
						$mergedOverrides[] = $langString;
					}
					else
					{
						$mergedOverrides[$keys[0]]           = isset($mergedOverrides[$keys[0]]) ? $mergedOverrides[$keys[0]] : array();
						$mergedOverrides[$keys[0]][$keys[1]] = $langString;
					}
				}
			}

			return $mergedOverrides;
		}
		catch (\Exception $e)
		{
			return array();
		}
	}

	public function loadLanguageFile($name, $location = '')
	{
		$language = Factory::getLanguage();
		$location = 'admin' == $location ? JPATH_ADMINISTRATOR : '';
		$language->load($name, $location);
	}

	public function t($key, $options = array('js_safe' => false, 'lang' => ''))
	{
		$options['jsSafe'] = !empty($options['js_safe']);

		return Text::_($key, $options);
	}

	public function tprintf($key)
	{
		$args = func_get_args();

		return call_user_func_array('\Joomla\CMS\Language\Text::sprintf', $args);
	}

	// html operations
	public function setHttpStatus($code, $message)
	{
		\JError::raiseError((int) $code, $message);

		return $this;
	}

	//public function addScript($url, $type = "text/javascript", $defer = false, $async = false);
	public function addScript($url, $options = array(), $attribs = array())
	{
		Factory::getDocument()->addScript($url, $options, $attribs);

		return $this;
	}

	public function addScripts($scripts)
	{
		if (!is_array($scripts))
		{
			return $this;
		}

		foreach ($scripts as $script)
		{
			$this->addScript(
				wbArrayGet($script, 'url', ''),
				wbArrayGet($script, 'options', array()),
				wbArrayGet($script, 'attr', array())
			);
		}
		return $this;
	}

	public function addScriptDeclaration($content, $type = 'text/javascript')
	{
		Factory::getDocument()->addScriptDeclaration($content, $type);

		return $this;
	}

	//public function addStyleSheet($url, $type = 'text/css', $media = null, $attribs = array());
	public function addStyleSheet($url, $options = array(), $attribs = array())
	{
		Factory::getDocument()->addStyleSheet($url, $options, $attribs);

		return $this;
	}

	public function addStyleSheets($stylesheets)
	{
		if (!is_array($stylesheets))
		{
			return $this;
		}

		foreach ($stylesheets as $stylesheet)
		{
			$this->addStyleSheet(
				wbArrayGet($stylesheet, 'url', ''),
				wbArrayGet($stylesheet, 'options', array()),
				wbArrayGet($stylesheet, 'attr', array())
			);
		}
		return $this;
	}

	public function addStyleDeclaration($content, $type = 'text/css')
	{

		Factory::getDocument()->addStyleDeclaration($content, $type);

		return $this;
	}

	public function setTitle($title)
	{
		Factory::getDocument()->setTitle($title);

		return $this;
	}

	public function setAdminTitle($title)
	{
		ToolbarHelper::title($title);

		return $this;
	}

	public function setDescription($description)
	{
		Factory::getDocument()->setDescription($description);

		return $this;
	}

	public function addHeadLink($href, $relation, $relType = 'rel', $attribs = array())
	{
		Factory::getDocument()->addHeadLink($href, $relation, $relType, $attribs);

		return $this;
	}

	public function addCustomTag($html)
	{
		Factory::getDocument()->addCustomTag($html);

		return $this;
	}

	public function setHeader($name, $value, $override = false)
	{
		Factory::getApplication()->setHeader($name, $value, $override);

		return $this;
	}

	public function setResponseType($type = 'html', $filename = 'document')
	{
		switch ($type)
		{
			case 'json':
				Factory::getDocument()
				       ->setType('json')
				       ->setMimeEncoding('application/json');
				break;
			case 'js':
				Factory::getDocument()
				       ->setType('text/html')
				       ->setMimeEncoding('application/javascript');
				break;
			case 'css':
				Factory::getDocument()
				       ->setType('text/css')
				       ->setMimeEncoding('text/css');
				break;
			case 'raw':
				break;
			case 'html':
			default:
				break;
		}

		return $this;
	}

	// workflow operations
	public function triggerEvent($event)
	{
		return $this;
	}

	public function isFrontend()
	{
		return Factory::getApplication()->isClient('site');
	}

	public function isBackend()
	{
		return Factory::getApplication()->isClient('adminnistrator');
	}

	public function isDebugEnabled()
	{
		return (bool) Factory::getApplication()->get('debug');
	}

	// hooks
	public function getHooksPath()
	{
		return JPATH_ROOT . '/libraries/weeblr';
	}

	public function addHook($id, $callback, $priority = 100)
	{
		$added = false;

		if (!empty($id) && is_string($id) && is_callable($callback))
		{
			$priority                      = (int) $priority;
			self::$hooks[$id]              = empty(self::$hooks[$id]) ? array() : self::$hooks[$id];
			self::$hooks[$id][$priority]   = empty(self::$hooks[$id][$priority]) ? array() : self::$hooks[$id][$priority];
			self::$hooks[$id][$priority][] = array(
				'callback' => $callback,
				'hash'     => self::hash($callback)
			);

			// re-order by priority
			krsort(self::$hooks[$id]);

			$added = true;
		}

		return $added;
	}

	//
	public function removeHook($id, $callback, $priority = null)
	{
		$removed = false;

		// cannot remove it hook does not exist
		if (!array_key_exists($id, self::$hooks))
		{
			return $removed;
		}

		// do not remove a hook that is being executed
		if (in_array($id, self::$hooksStack))
		{
			return $removed;
		}

		$hash = $this->hashHook($callback);
		if (is_null($priority))
		{
			// if no priority was specified, we remove the hook
			// callback from all priority levels
			foreach (self::$hooks[$id] as $priority => $hookRecord)
			{
				$removed = $this->removeHookCallback($id, $priority, $hash);
				if ($removed)
				{
					break;
				}
			}
		}
		else
		{
			// a priority was specified, we only remove the callback
			// from that priority
			$removed = $this->removeHookCallback($id, $priority, $hash);
		}

		return $removed;
	}

	/**
	 * @param string $id Dot-joined unique identifier for the hook
	 * @param int    $priority Restrict removal to a given priority level
	 * @param string $hash
	 *
	 * @return bool true if callback was remo
	 */
	private function removeCallback($id, $priority, $hash)
	{
		$removed = false;
		foreach (self::$hooks[$id][$priority] as $index => $hookRecord)
		{
			if ($hash == $hookRecord['hash'])
			{
				$removed = true;
				unset(self::$hooks[$id][$priority][$index]);
			}
		}

		return $removed;
	}

	/**
	 * Builds a unique hash for a callable callback
	 *
	 * @param Callable $callback
	 *
	 * @return string
	 */
	private function hash($callback)
	{
		$hash = is_object($callback) ? spl_object_hash($callback) : md5(serialize($callback));

		return $hash;
	}

	public function executeHook($filter, $params)
	{
		// remove the filter id from params array
		$id = array_shift($params);

		// default returned value
		$currentValue = null;
		if (count($params) > 0)
		{
			$currentValue = $params[0];
		}

		// invalid hook id
		if (!is_string($id))
		{
			return $currentValue;
		}

		// no hook registered
		if (empty(self::$hooks[$id]))
		{
			return $currentValue;
		}

		// already running. We don't allow nesting
		if (in_array($id, self::$hooksStack))
		{
			return $currentValue;
		}
		self::$hooksStack[] = $id;

		// increase run counter
		self::$hooksRuns[$id] = isset(self::$hooksRuns[$id]) ? self::$hooksRuns[$id]++ : 1;

		// iterate over registered hook handlers
		foreach (self::$hooks[$id] as $priority => $callbackList)
		{
			foreach ($callbackList as $callbackRecord)
			{
				if ($filter)
				{
					$params[0] = call_user_func_array($callbackRecord['callback'], $params);
				}
				else
				{
					call_user_func_array($callbackRecord['callback'], $params);
				}
			}
		}

		$newValue = null;
		if ($filter)
		{
			$newValue = isset($params[0]) ? $params[0] : null;
		}

		array_pop(self::$hooksStack);

		return $newValue;
	}

	public function hasHook($id)
	{
		$hasHook = false;
		if (!empty($id) && is_string($id))
		{
			$hasHook = !empty(self::$hooks[$id]);
		}

		return $hasHook;
	}

	// display, or handle error
	public function handleError($request)
	{
		return $this;
	}

	public function handleMessage($msg, $type = 'info')
	{
		Factory::getApplication()->enqueueMessage($msg, $type);

		return $this;
	}

	// routing, redirect
	public function route($url, $xhtml = true, $ssl = null)
	{
		return Route::_($url, $xhtml, $ssl);
	}

	public function redirectTo($redirectTo, $redirectMethod = 301)
	{
		if (!empty($redirectTo) && WblRequest::REQUEST_ROOT == $this->requestType)
		{
			// redirect to target $redirectTo
			Factory::getApplication()->redirect($redirectTo, $redirectMethod == 301);
		}
	}

	// authorization
	public function authorize($action, $subject, $userId = null)
	{
		return Factory::getUser($userId)->authorise($action, $subject);
	}

	// filesystem
	public function createFolders($folders)
	{
		$folders = wbArrayEnsure($folders);
		foreach ($folders as $folder)
		{
			Folder::create($folder);
		}
	}
}
