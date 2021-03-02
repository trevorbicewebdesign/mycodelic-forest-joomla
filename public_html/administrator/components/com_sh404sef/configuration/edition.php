<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 * @date		2020-06-26
 */
class Sh404sefConfigurationEdition
{
	public static $id = 'full';
	public static $name = '';

	public static function is($edition)
	{
		return $edition == self::id;
	}
}
