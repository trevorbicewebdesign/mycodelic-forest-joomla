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
 */

namespace Weeblr\Wblib\V_SH4_4206\System;

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

class Version
{
	const EDITION_FULL = 'full';
	const EDITION_COMMUNITY = 'community';

	/**
	 * Version related object
	 *
	 * 'package' => 'weeblrXXXX',
	 * 'platform' => 'joomla',
	 * 'version' => '${str.version}',
	 * 'version_full' => '4.21.0.4206',
	 * 'date' => '2020-06-26',
	 * 'license' => 'http://www.gnu.org/copyleft/gpl.html GNU/GPL',
	 * 'copyright' => '(c) Yannick Gaultier - Weeblr llc - 2020',
	 * 'author' => 'Yannick Gaultier',
	 * 'url' => 'https://weeblr.com',
	 * 'documentation_url' => 'https://weeblr.com/9k',
	 * 'edition' => 'full',
	 * 'php' => array(
	 *      'min' => '5.6.0',
	 *      'max' => ''
	 * ),
	 * 'platform' => array(
	 *      'min' => '3.9.0',
	 *      'max' => '4.0'
	 * )
	 *
	 * @var array
	 */
	static protected $versions = array();

	/**
	 * Package name for this object
	 *
	 * @var null
	 */
	protected $package = null;

	/**
	 * Store versions information for packages
	 *
	 * @param $versionInfo
	 *
	 * @throws \Exception
	 */
	public function __construct($versionInfo)
	{
		if (empty($versionInfo['package']))
		{
			wbThrow(new \InvalidArgumentException('wbLib: invalid version information sent, not package name'));
		}

		$this->package                           = $versionInfo['package'];
		self::$versions[$versionInfo['package']] = $versionInfo;
	}

	/**
	 * Get the version object for a given object, if already set.
	 *
	 * @param string $package
	 *
	 * @return mixed
	 */
	public static function get($package)
	{
		if (!wbArrayIsSet(self::$versions, $package))
		{
			throw new \RuntimeException('wbLib: Trying to load version information for package ' . $package . ' which was not previously set.');
		}
		return wbArrayGet(self::$versions, $package);
	}

	/**
	 * Detects whether we are on a local development version
	 *
	 * @return bool
	 */
	public static function isDevVersion()
	{
		return strpos('${str.version}', '_version_') !== false;
	}

	/**
	 * Getter for package
	 */
	public function getPackage()
	{
		return self::$versions[$this->package]['package'];
	}

	/**
	 * Getter for package title
	 */
	public function getPackageTitle()
	{
		return self::$versions[$this->package]['package_title'];
	}

	/**
	 * Getter for platform
	 */
	public function getPlatform()
	{
		return self::$versions[$this->package]['platform'];
	}

	/**
	 * Returns current version as full string
	 *
	 * @param bool $full If true, returns the version number with the build number
	 *
	 * @return string
	 */
	public function getVersion($full = false)
	{
		return $full ? self::$versions[$this->package]['version_full'] : self::$versions[$this->package]['version'];
	}

	/**
	 * Returns current value for a complex data type
	 *
	 * @param string $type php | wp
	 * @param string $subType min | max
	 *
	 * @return string
	 */
	public function getValue($type, $subType)
	{
		if (isset(self::$versions[$this->package][$type]) && isset(self::$versions[$this->package][$type][$subType]))
		{
			return self::$versions[$this->package][$type][$subType];
		}
		else
		{
			return 'n/a';
		}
	}

	/**
	 * Getter for release date
	 */
	public function getReleaseDate()
	{
		return self::$versions[$this->package]['date'];
	}

	/**
	 * Getter for license
	 */
	public function getLicense()
	{
		return self::$versions[$this->package]['license'];
	}

	/**
	 * Getter for copyright
	 */
	public function getCopyright()
	{
		return self::$versions[$this->package]['copyright'];
	}

	/**
	 * Getter for Author
	 */
	public function getAuthor()
	{
		return self::$versions[$this->package]['author'];
	}

	/**
	 * Getter for URL
	 */
	public function getUrl()
	{
		return self::$versions[$this->package]['url'];
	}

	/**
	 * Getter for Edition
	 */
	public function getEdition()
	{
		return self::$versions[$this->package]['edition'];
	}

	/**
	 * Getter for Documentation URL
	 */
	public function getDocumentationUrl()
	{
		return self::$versions[$this->package]['documentation_url'];
	}

	/**
	 * True if current version is higher or equal than param.
	 *
	 * @param string $minVersion major.minor.patch
	 *
	 * @return bool
	 */
	public function isHigherThan($minVersion, $version = null)
	{
		$version = is_null($version) ? $this->getVersion() : $version;

		return version_compare($version, $minVersion, 'ge');
	}

	/**
	 * True if current version is strictly lower than param.
	 *
	 * @param string $minVersion major.minor.patch
	 *
	 * @return bool
	 */
	public function isLowerThan($minVersion, $version = null)
	{
		$version = is_null($version) ? $this->getVersion() : $version;

		return version_compare($version, $minVersion, 'lt');
	}

	/**
	 * Whether this version is marked compatible with dependency (wp or php)
	 * as per the specification passed during creation.
	 *
	 * True if current version if higher or equal to minimal dependency version
	 * and strictly lower than maximal dependency version.
	 *
	 * @param string $type php | platform
	 * @param string $version x[.y[.z]] version of the software checked
	 *
	 * @return int | bool 0 if package unknown, true if compatible, false if not
	 */
	public function isCompatibleWith($type, $version)
	{
		if (!array_key_exists($type, self::$versions[$this->package]))
		{
			return 0;
		}

		if (!empty(self::$versions[$this->package][$type]['min'])
			&& !$this->isHigherThan(self::$versions[$this->package][$type]['min'], $version)
		)
		{
			return false;
		}

		if (!empty(self::$versions[$this->package][$type]['max'])
			&& !$this->isLowerThan(self::$versions[$this->package][$type]['max'], $version)
		)
		{
			return false;
		}

		return true;
	}

}
