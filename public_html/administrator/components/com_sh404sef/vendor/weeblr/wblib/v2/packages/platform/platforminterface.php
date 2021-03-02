<?php
/**
 * ant_title_ant
 *
 * @author       ant_author_ant
 * @copyright    ant_copyright_ant
 * @package      ant_package_ant
 * @license      ant_license_ant
 * @version      ant_version_ant
 *
 * ant_current_date_ant
 */

namespace Weeblr\Wblib\V_SH4_4206\Platform;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * A thin interface class to the host system (CMS)
 * Performs page rendering essentially.
 *
 */
interface Platforminterface
{
	public function boot();

	public function detect();

	public function majorVersion();

	public function version();

	public function getName();

	public function getUniqueId();

	public function getUser($id = null);

	public function sanitizeInput($type, $input);

	public function getCSRFToken();

	public function checkCSRFToken($token);

	public function getCurrentUrl();

	public function getSitename();

	public function getBaseUrl($pathOnly = true);

	public function getRootUrl($pathOnly = true);

	public function getHttpInput();

	public function getHttpClient($options = array());

	public function getCache($type, $options = array());

	public function getMethod();

	public function getRootPath();

	public function getLogsPath();

	public function getLayoutOverridesPath();

	public function getCurrentLanguageTag($full = true);

	public function getCurrentLanguageDirection();

    public function getLanguageOverrides($extension);

	public function loadLanguageFile($name, $location = '');

	public function t($key, $options = array('js_safe' => false, 'lang' => ''));

	public function tprintf($key);

	// html operations
	public function setHttpStatus($code, $message);

	public function addScript($url, $options = array(), $attribs = array());

	public function addScripts($scripts);

	public function addScriptDeclaration($content, $type = 'text/javascript');

	public function addStyleSheet($url, $options = array(), $attribs = array());

	public function addStyleSheets($stylesheets);

	public function addStyleDeclaration($content, $type = 'text/css');

	public function setTitle($title);

	public function setAdminTitle($title);

	public function setDescription($description);

	public function addHeadLink($href, $relation, $relType = 'rel', $attribs = array());

	public function addCustomTag($html);

	public function setHeader($name, $value);

	public function setResponseType($type = 'html', $filename = 'document');

	// workflow operations
	public function triggerEvent($event);

	public function isFrontend();

	public function isBackend();

	public function isDebugEnabled();

	// hooks
	public function getHooksPath();

	public function addHook($id, $callback, $priority = 100);

	public function removeHook($id, $callback, $priority = null);

	public function executeHook($filter, $params);

	public function hasHook($id);

	// display, or handle error
	public function handleError($request);

	public function handleMessage($msg, $type = 'info');

	// routing, redirect
	public function route($url, $xhtml = true, $ssl = null);

	public function redirectTo($redirectTo, $redirectMethod = 301);

	// users & authorization
	public function authorize($action, $subject, $userId = null);

	// filesystem
	public function createFolders($folders);

}
