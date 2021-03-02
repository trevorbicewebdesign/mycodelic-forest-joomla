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

use Weeblr\Wblib\V_SH4_4206\Factory,
	Weeblr\Wblib\V_SH4_4206\Joomla\Uri;

// no direct access
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

class Http
{

	// return code
	const RETURN_OK = 200;
	const RETURN_CREATED = 201;
	const RETURN_NO_CONTENT = 204;
	const RETURN_BAD_REQUEST = 400;
	const RETURN_UNAUTHORIZED = 401;
	const RETURN_FORBIDDEN = 403;
	const RETURN_NOT_FOUND = 404;
	const RETURN_PROXY_AUTHENTICATION_REQUIRED = 407;
	const RETURN_INTERNAL_ERROR = 500;
	const RETURN_SERVICE_UNAVAILABLE = 503;

	/**
	 * Creates an HTTP client from the platform used
	 */
	public static function getClient()
	{
	}

	/**
	 * Abort the current HTTP response
	 *
	 * @param int    $code
	 * @param string $cause
	 */
	public static function abort($code = self::RETURN_NOT_FOUND, $cause = '')
	{

		$header = self::getHeader($code, $cause);

		// clean all buffers
		ob_end_clean();

		$msg = empty($cause) ? $header->msg : $cause;
		if (!headers_sent())
		{
			header($header->raw);
		}
		die($msg);
	}

	/**
	 * Get HTTP header for response based on status
	 *
	 * @param $code
	 * @param $cause
	 *
	 * @return stdClass
	 */
	public static function getHeader($code, $cause)
	{

		$code   = intval($code);
		$header = new \stdClass();

		switch ($code)
		{

			case self::RETURN_OK:
				$header->raw = 'HTTP/1.0 200 OK';
				$header->msg = 'OK';
				break;
			case self::RETURN_CREATED:
				$header->raw = 'HTTP/1.0 201 CREATED';
				$header->msg = 'Created';
				break;
			case self::RETURN_NO_CONTENT:
				$header->raw = 'HTTP/1.0 204 OK';
				$header->msg = 'No content';
				break;

			case self::RETURN_BAD_REQUEST:
				$header->raw = 'HTTP/1.0 400 BAD REQUEST';
				$header->msg = '<h1>Unauthorized</h1>';
				break;
			case self::RETURN_UNAUTHORIZED:
				$header->raw = 'HTTP/1.0 401 UNAUTHORIZED';
				$header->msg = '<h1>Unauthorized</h1>';
				break;
			case self::RETURN_FORBIDDEN:
				$header->raw = 'HTTP/1.0 403 FORBIDDEN';
				$header->msg = '<h1>Forbidden access</h1>';
				break;
			case self::RETURN_NOT_FOUND:
				$header->raw = 'HTTP/1.0 404 NOT FOUND';
				$header->msg = '<h1>Page not found</h1>';
				break;
			case self::RETURN_PROXY_AUTHENTICATION_REQUIRED:
				$header->raw = 'HTTP/1.0 407 PROXY AUTHENTICATION REQUIRED';
				$header->msg = '<h1>Proxy authentication required</h1>';
				break;
			case self::RETURN_INTERNAL_ERROR:
				$header->raw = 'HTTP/1.0 500 INTERNAL ERROR';
				$header->msg = 'Internal error';
				break;
			case self::RETURN_SERVICE_UNAVAILABLE:
				$header->raw = 'HTTP/1.0 503 SERVICE UNAVAILABLE';
				$header->msg = '<h1>Service unavailable</h1>';
				break;

			default:
				$header->raw = 'HTTP/1.0 ' . $code;
				$header->msg = $cause;
				break;
		}

		return $header;
	}

	public static function getAllHeaders($prefix = '')
	{
		static $headers = array();

		$normalizedPrefix = empty($prefix) ? '__default__' : $prefix;

		if (empty($headers[$normalizedPrefix]))
		{
			if (strpos(php_sapi_name(), 'cgi') !== false)
			{
				$rawHeaders = $_SERVER;
				$cgiPrefix  = 'http_';
			}
			else
			{
				$rawHeaders = getallheaders();
				$cgiPrefix  = '';
			}

			// loop, keep only relevant headers
			if (empty($prefix))
			{
				$headers[$normalizedPrefix] = $rawHeaders;
			}
			else
			{
				$headers[$normalizedPrefix] = array();
				foreach ($rawHeaders as $headerKey => $headerValue)
				{
					$headerKey = strtoupper($headerKey);
					if (strpos($headerKey, strtoupper($cgiPrefix . $prefix)) === 0)
					{
						// removed HTTP_, only for cgi-types, just in case a header would start with HTTP_
						$headerKey = empty($cgiPrefix) ? $headerKey : preg_replace('/^HTTP_/', '', $headerKey);
						// replace _ with -. We only use dashes (-) but when under *-CGI, dashes in headers are turned
						// (by nginx for instance) into underscores when mapped to CGI variables, HTTP_.....
						// so we just revert that
						$headers[$normalizedPrefix][str_replace('_', '-', $headerKey)] = $headerValue;
					}
				}
			}
		}

		return $headers[$normalizedPrefix];
	}

	public static function getIpAddress()
	{

		static $address;

		if (is_null($address))
		{
			// Check for proxies as well.
			if (isset($_SERVER['REMOTE_ADDR']))
			{
				$address = $_SERVER['REMOTE_ADDR'];
			}
			elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			{
				$address = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}
			elseif (isset($_SERVER['HTTP_CLIENT_IP']))
			{
				$$address = $_SERVER['HTTP_CLIENT_IP'];
			}
			else
			{
				$address = false;
			}
		}

		return $address;
	}

	public static function buildUri($url = '')
	{
		if (empty($url))
		{
			$url = Factory::get()->getThe('platform')->getCurrentUrl();
		}

		return new Uri\Uri($url);
	}

	public static function isError($status)
	{
		$status = (int) $status;

		return $status > 399;
	}

	public static function isRedirect($status)
	{
		$status = (int) $status;

		return $status > 299 and $status < 400;
	}

	public static function isSuccess($status)
	{
		$status = (int) $status;

		return $status > 199 and $status < 300;
	}

	/**
	 * Renders an http response and end processing of request
	 *
	 * @param int    $code http status to use for response
	 * @param string $cause Optional text to use as response body
	 * @param string $type
	 * @param array  $otherHeaders
	 */
	public static function render($code = self::RETURN_NOT_FOUND, $cause = '', $type = 'text/html', $otherHeaders = array())
	{
		$header = self::getHeader($code, $cause);

		// clean all buffers
		ob_end_clean();

		$msg = empty($cause) ? $header->msg : $cause;
		if (!headers_sent())
		{
			header($header->raw);
		}

		$otherHeaders['Content-type'] = $type;
		self::outputHeaders($otherHeaders);

		if (!is_null($msg))
		{
			echo $msg;
		}

		die();
	}

	/**
	 * Output an array of headers.
	 *
	 * @param array $headers Key/value array of headers
	 */
	public static function outputHeaders($headers)
	{
		@ob_end_clean();
		if (!headers_sent())
		{
			foreach ($headers as $key => $value)
			{
				header($key . ': ' . $value);
			}
		}
	}

	/**
	 * Perform a server-side 301 redirect to the target URL.
	 *
	 * @param string $target
	 */
	public static function redirectPermanent($target)
	{
		@ob_end_clean();
		if (headers_sent())
		{
			echo '<html><head><meta http-equiv="content-type" content="text/html; charset="UTF-8"'
				. '" /><script>document.location.href=\'' . $target . '\';</script></head><body></body></html>';
		}
		else
		{
			header('Cache-Control: no-cache'); // prevent Firefox5+ and IE9+ to consider this a cacheable redirect
			header('HTTP/1.1 301 Moved Permanently');
			header('Location: ' . $target);
		}
		exit();
	}
}
