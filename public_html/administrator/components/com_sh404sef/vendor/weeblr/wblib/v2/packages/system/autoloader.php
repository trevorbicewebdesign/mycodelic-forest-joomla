<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.21.0.4206
 *
 * 2020-06-26
 *
 */

namespace Weeblr\Wblib\V_SH4_4206\System;

/* Security check to ensure this file is being included by a parent file. */
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

if (class_exists('\Weeblr\Wblib\V_SH4_4206\System\Autoloader', false))
{
	return true;
}

/**
 * A PSR-4 style autoloader.
 */
class Autoloader
{
	/**
	 * @var array List of registered namespaces
	 */
	protected $_ns = array();

	/**
	 * @var array List of root path for each namespace, indexed on namespaces
	 */
	protected $_pathes = array();

	/**
	 * @var array List of registered individual classes
	 */
	protected $_classes = array();

	/**
	 * @var array List of fully qualified file names, indexed on registered classes
	 */
	protected $_classesFilenames = array();

	protected static $instance = null;

	/**
	 * Singletonish getter.
	 *
	 * @return null|Autoloader
	 */
	public static function getThe()
	{
		if (empty(self::$instance))
		{
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Register our autoloader function with PHP
	 *
	 */
	public function register()
	{
		static $_registered = false;

		if (!$_registered)
		{
			// get other extensions/scripts autoloader out
			spl_autoload_unregister("__autoload");

			// add our own
			spl_autoload_register(array($this, 'autoload'), true);

			// stitch back any pre-existing autoload function at the end of the list
			if (function_exists("__autoload"))
			{
				spl_autoload_register("__autoload");
			}
		}

		return $this;
	}

	/**
	 * @param array $classesDef Array of classes autoloading information.
	 *                          This array is indexed on fully qualified class name (namespace included if any),
	 *                          and the value is the fully qualified filename to load.
	 *                          Any pre-existing record will be overwritten by new ones
	 */
	public function registerClasses($classesDef = array())
	{
		foreach ($classesDef as $name => $filename)
		{
			$this->_classes[ltrim($name, '\\')] = $filename;
		}
	}

	/**
	 *
	 * Register the root folder, or an array of root folders, for a namespace.
	 * If the overwrite param is true, new folder or folders will be merged with any existing folders for that namespace
	 *
	 * @param string        $ns The namespace
	 * @param string| array $rootFolders A fully qualified root path or an array of root path
	 * @param bool          $overwrite If true, new path will be merged with any existing. If false, they'll be dropped
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function registerNameSpace($ns, $rootFolders, $overwrite = false)
	{
		$ns = trim($ns);
		$ns = trim($ns, '\\') . '\\';
		// no namespace, no love
		if (empty($ns))
		{
			wbThrow(new \InvalidArgumentException(__METHOD__ . ': empty namespace sent to autoloader'));
		}

		$rootFolders = is_array($rootFolders) ? $rootFolders : array($rootFolders);
		foreach ($rootFolders as $key => $rootFolder)
		{
			$rootFolder        = trim($rootFolder);
			$rootFolder        = realpath($rootFolder);
			$rootFolder        = str_replace(DIRECTORY_SEPARATOR, '/', $rootFolder);
			$rootFolders[$key] = rtrim($rootFolder, '\\') . '/';
			if (empty($rootFolders[$key]))
			{
				wbThrow(new \InvalidArgumentException(__METHOD__ . ': empty root path sent to autoloader for namespace ' . $ns));
			}
		}

		// have we already some folders stored for that namespace?
		wbArrayKeyInit($this->_pathes, $ns, array());

		// store the namespace
		$this->_ns[$ns] = strlen($ns);
		// sort by decreasing namespace length, to speed up lookups
		arsort($this->_ns);

		// store associated folders
		$this->_pathes[$ns] = $overwrite ? $rootFolders : array_merge($this->_pathes[$ns], $rootFolders);

		return $this;
	}

	/**
	 * Performs autloading of a class based on its name and previously registered file names and base path
	 * For namespaced classes, the fully qualified filename to load is built after the root path and the namespace.
	 * There might be a specific filename to load for that class, in which case that file takes precedence
	 *
	 * @param string $class the fully qualified class name
	 *
	 * @return null | bool
	 */
	public function autoload($class)
	{
		// Remove the root backslash if present.
		$class = ltrim($class, '\\');

		// check overrides first. If that fails, we keep searcing with namespaces
		if (!empty($this->_classes[$class]))
		{
			if (file_exists($this->_classes[$class]))
			{
				return (bool) include_once $this->_classes[$class];
			}
		}

		$nameSpace = self::_searchNamespace($class);

		// Lookup registered namespaces to find a match.
		if (!empty($nameSpace))
		{
			$className = trim(str_replace($nameSpace, '', $class), '\\');
			$className = str_replace('\\', '/', $className);

			// explode on UpperCase
			preg_match_all('#([A-Z][a-z0-9_]+)#', $className, $matches);
			$pathBits = array();
			if (!empty($matches[0]))
			{
				foreach ($matches[0] as $part)
				{
					$pathBits[] = $this->_format($part);
				}
			}

			// append file suffix
			$className = strtolower(
					implode('/', $pathBits)
				)
				. '.php';

			// search for existing file
			foreach ($this->_pathes[$nameSpace] as $path)
			{
				$classFilePath = $path . $className;
				if (file_exists($classFilePath))
				{
					return (bool) include_once $classFilePath;
				}
			}
		}

		return false;
	}

	/**
	 * Iterate over registered namespace records and return
	 * longest namespace that matches beginning of class name
	 * That is first namespace, as they are sorted by decreasing length
	 *
	 * @param string $class full class name we're trying to autoload
	 *
	 * @return bool|string
	 */
	protected function _searchNamespace($class)
	{
		foreach ($this->_ns as $storedNamespace => $nsLength)
		{
			if (substr($class, 0, $nsLength) == $storedNamespace)
			{
				return $storedNamespace;
			}
		}

		return false;
	}

	/**
	 * Format an element of a path, optionnally applying simple pluralization.
	 *
	 * @param string $pathPart
	 * @param bool   $pluralize
	 *
	 * @return string
	 */
	protected function _format($pathPart, $pluralize = false)
	{
		$pathPart = trim($pathPart);
		if (empty($pathPart))
		{
			return '';
		}

		$formated = strtolower($pathPart);
		if ($pluralize)
		{
			$formated .= strtolower(substr($pathPart, -1)) == 's' ? 'es' : 's';
		}

		return $formated;
	}
}
