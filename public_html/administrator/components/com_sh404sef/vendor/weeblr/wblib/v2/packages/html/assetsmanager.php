<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author           Yannick Gaultier
 * @copyright        (c) Yannick Gaultier - Weeblr llc - 2020
 * @package          sh404SEF
 * @license          http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version          4.21.0.4206
 * @date         2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\Html;

use Weeblr\Wblib\V_SH4_4206\Base;
use Weeblr\Wblib\V_SH4_4206\System;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Assets-related helper.
 *
 */
class Assetsmanager extends Base\Base
{
	const VERSION = '4.21.0.4206';

	const ASSETS_PATH = '/assets';

	const DEV = 0;
	const PRODUCTION = 1;
	public $assetsMode = self::DEV;

	private $absoluteRootUrl   = null;
	private $rootUrl           = null;
	private $absoluteFilesRoot = null;
	private $filesRoot         = null;

	public function __construct($options)
	{
		parent::__construct();

		$debug            = $this->platform->isDebugEnabled();
		$this->assetsMode = $debug ? self::DEV : self::PRODUCTION;

		$this->absoluteRootUrl = wbArrayGet($options, 'absoluteRootUrl', $this->platform->getRootUrl(false));
		$this->absoluteRootUrl = rtrim($this->absoluteRootUrl, '/');

		$this->rootUrl = wbArrayGet($options, 'rootUrl', $this->platform->getRootUrl());
		$this->rootUrl = rtrim($this->rootUrl, '/');
		$this->rootUrl = empty($this->rootUrl) ? '/' : $this->rootUrl;

		$this->filesRoot = wbArrayGet($options, 'filesRoot', $this->platform->getRootPath());
		$this->filesRoot = rtrim($this->filesRoot, '/');

		$this->absoluteFilesRoot = wbArrayGet($options, 'absoluteFilesRoot', $this->platform->getRootPath(false));
		$this->absoluteFilesRoot = rtrim($this->absoluteFilesRoot, '/');

		$this->filesPath = wbArrayGet($options, 'filesPath', '');
		$this->filesPath = rtrim($this->filesPath, '/');
	}

	/**
	 * Simply join a relative URL to the root URL set in
	 * this manager constructor.
	 *
	 * @param string $relativePath
	 *
	 * @return mixed
	 */
	public function getImageUrl($relativePath)
	{
		return wbSlashJoin($this->rootUrl, $relativePath);
	}

	/**
	 * Build ups the full URL to a CSS or JS production file, using the content-hash filename.
	 *
	 * @param string $name JS file name, no extension
	 * @param array  $options
	 *                     pathFromRoot string Path from the root location set in assets manager instance constructor
	 *                     absolute bool If trueish, absolute URL will be used.
	 *
	 * @return string
	 */
	public function getHashedMediaLink($name, $options = array())
	{
		return $this->getMediaLinkMaybeHashed($name, true, $options);
	}

	/**
	 * Build ups the full URL to a CSS or JS file, using its regular name (ie not content-based hashed)
	 *
	 * @param string $name JS file name, no extension
	 * @param array  $options
	 *                     pathFromRoot string Path from the root location set in assets manager instance constructor
	 *                     absolute bool If trueish, absolute URL will be used.
	 *
	 * @return string
	 */
	public function getMediaLink($name, $options = array())
	{
		return $this->getMediaLinkMaybeHashed($name, false, $options);
	}

	/**
	 * Build ups the full URL to a CSS or JS file, possibly minified/versioned/gzipped
	 *
	 * @param string $name JS file name, no extension
	 * @param bool   $hashed Whether to use the content-hashed file name or the regular file name.
	 * @param array  $options
	 *                     pathFromRoot string Path from the root location set in assets manager instance constructor
	 *                     absolute bool If trueish, absolute URL will be used.
	 *
	 * @return string
	 */
	private function getMediaLinkMaybeHashed($name, $hashed, $options = array())
	{
		$pathFromRoot = wbArrayGet($options, 'pathFromRoot', '');
		$pathFromRoot = trim($pathFromRoot, '/');
		$absolute     = wbArrayGet($options, 'absolute', false);

		return $this->getMedia('url', $name, $pathFromRoot, $hashed, $absolute);
	}

	/**
	 * Build ups the full PATH (including filename) to a CSS or JS file, possibly minified/versioned/gzipped
	 *
	 * @param string $name JS file name, no extension
	 * @param array  $options
	 *                      pathFromRoot string Path from the root location set in assets manager instance constructor
	 *                      hashed bool Locate the hashed version of the file
	 *
	 * @return string
	 */
	public function getMediaFullPath($name, $options = array())
	{
		$pathFromRoot = wbArrayGet($options, 'pathFromRoot', '');
		$pathFromRoot = trim($pathFromRoot, '/');

		$hashed = wbArrayGet($options, 'hashed', false);

		// getting a path: files_root is considered URL root
		return $this->getMedia('file', $name, $pathFromRoot, $hashed, $absolute = true);
	}

	private function getMedia($resultType, $name, $pathFromRoot, $hashed, $absolute)
	{
		return $this->buildFullPath($resultType, $name, $pathFromRoot, $hashed, $absolute);
	}

	private function buildFullPath($resultType, $name, $pathFromRoot, $hashed, $absolute)
	{
		if ('file' == $resultType)
		{
			$root = $absolute ? $this->absoluteFilesRoot : $this->filesRoot;
		}
		else
		{
			$root = $absolute ? $this->absoluteRootUrl : $this->rootUrl;
		}

		$filesRoot = System\Route::normalizePath(
			wbSlashJoin(
				$root,
				$this->filesPath
			)
		);

		if ($this->assetsMode == self::PRODUCTION)
		{
			$link = wbSlashJoin(
				$filesRoot,
				$pathFromRoot,
				'dist',
				// hashed file name is loaded from "$name.php"
				$hashed ? $this->loadHashedName($name, $pathFromRoot, 'dist') : $name
			);
		}
		else
		{
			// for dev mode, we may or may not have hashed file names.
			$maybeHashedFileName = $hashed ? $this->loadHashedName($name, $pathFromRoot, 'dev') : $name;
			$maybeHashedFileName = empty($maybeHashedFileName) ? $name : $maybeHashedFileName;
			$link                = wbSlashJoin(
				$filesRoot,
				$pathFromRoot,
				'dev',
				$maybeHashedFileName
			);
		}

		// make sure there are no uneeded leading slashes
		$link = wbStartsWith($link, '/') ? '/' . ltrim($link, '/') : $link;

		if ('file' == $resultType && !file_exists($link))
		{
			$link = '';
		}

		return str_replace(
			'\\',
			'/',
			$link
		);
	}

	/**
	 * Load the filename of the hashed version of an assets from a PHP file of the same name
	 * created when the assets was hashed.
	 *
	 * ie: /xxxx/example.js ==> /xxxx/example.js.php
	 *
	 * @param string $name
	 * @param string $pathFromRoot
	 * @param string $folder
	 *
	 * @return mixed|string
	 */
	private function loadHashedName($name, $pathFromRoot, $folder = 'dist')
	{
		$hashedFilename = '';
		$filesRoot      = System\Route::normalizePath(
			wbSlashJoin(
				$this->absoluteFilesRoot,
				$this->filesPath
			)
		);
		$file           = wbSlashJoin(
			$filesRoot,
			$pathFromRoot,
			$folder,
			$name . '.php'
		);
		if (file_exists($file))
		{
			$hashedFilename = include $file;
		}

		return $hashedFilename;
	}
}
