<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 * @date                2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\System;

// no direct access
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/*
 * Based on: http://wordpress.org/plugins/email-address-encoder/
 *
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

/**
 * Copyright 2014 Till Krüss  (http://till.kruss.me/)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package Email Address Encoder
 * @copyright 2014 Till Krüss
 */
class Email
{
	public static function eae_encode_str($string)
	{
		$chars = str_split($string);
		$seed  = mt_rand(0, (int) abs(crc32($string) / strlen($string)));

		foreach ($chars as $key => $char)
		{

			$ord = ord($char);

			if ($ord < 128)
			{ // ignore non-ascii chars

				$r = ($seed * (1 + $key)) % 100; // pseudo "random function"

				if ($r > 60 && $char != '@')
				{
					;
				} // plain character (not encoded), if not @-sign
				else if ($r < 45)
				{
					$chars[$key] = '&#x' . dechex($ord) . ';';
				} // hexadecimal
				else
				{
					$chars[$key] = '&#' . $ord . ';';
				} // decimal (ascii)

			}
		}

		return implode('', $chars);
	}
}

