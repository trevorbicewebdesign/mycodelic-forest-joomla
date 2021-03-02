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

// Security check to ensure this file is being included by a parent file.
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * A few specific helpers
 */
class WblWordpress_Compat
{
	/**
	 * @since 4.5.0
	 *
	 * @param $args
	 *
	 * @return mixed
	 */
	public static function get_terms($args)
	{
		if (self::isGTE('4.5.0'))
		{
			return get_terms($args);
		}
		else
		{
			$taxonomies = wbArrayGet($args, 'taxonomy', array());
			unset($args['taxonomy']);

			return get_terms($taxonomies, $args);
		}
	}

	/**
	 *
	 * @param string $fallback
	 *
	 * @return string
	 */
	public static function wp_get_document_title()
	{
		if (self::isGTE('4.4.0'))
		{
			return wp_get_document_title();
		}

		return wp_title($sep = '»', $display = false, $seplocation = 'right');
	}

	/**
	 * Returns true if runnin WP version is
	 *    Greater Than or Equal
	 * the passed version
	 *
	 * @param string $version
	 *
	 * @return bool
	 */
	public static function isGTE($version)
	{
		global $wp_version;

		return version_compare($wp_version, $version, '>=');
	}
}
