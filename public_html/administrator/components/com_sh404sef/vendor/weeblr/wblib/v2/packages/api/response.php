<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      ${str.version}
 *
 * 2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\Api;

use Weeblr\Wblib\V_SH4_4206\Base,
	Weeblr\Wblib\V_SH4_4206\System;

defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * HTTP response as enveloped json.
 *
 **/
class Response extends Base\Base
{
	/**
	 * @var array Version of this API.
	 */
	private $apiVersion = 'v2';

	/**
	 * @var string The version of the handling route.
	 */
	private $version;

	/**
	 * @var string Holds the request id.
	 */
	private $requestId;

	/**
	 * @var string Holds the response HTTP status code.
	 */
	private $status;

	/**
	 * @var array Data to be sent in the "data" field of the response.
	 */
	private $data;

	/**
	 * @var array Meta data to be sent in the response.
	 */
	private $meta;

	/**
	 * @var array Stores error descriptors.
	 */
	private $errors;

	/**
	 * @var array Stores links.
	 */
	private $links;

	/**
	 * @var array Associative array of headers to be sent with the response.
	 */
	private $headers = array();

	/**
	 * @var int A unix timestamp of last modification of the resource.
	 */
	private $lastModified;

	/**
	 * @var array The raw assembled response, before being output.
	 */
	private $response = array();

	/**
	 * @var string The response body, as enveloped json.
	 */
	private $responseBody = '';

	/**
	 * \ShlApi_Response constructor.
	 *
	 * @param string Id of the request we are responding to.
	 * @param string Handler api version;
	 */
	public function __construct($requestId, $version)
	{
		$this->requestId = $requestId;
		$this->version   = $version;
	}

	/**
	 * Setter for the response HTTP status code.
	 *
	 * @param int $status The status code to use.
	 * @param int $status The status code to use.
	 *
	 * @return Response
	 */
	public function withStatus($status)
	{
		$this->status = $status;

		return $this;
	}

	/**
	 * @param array $data Data to use in response
	 *
	 * @return Response
	 */
	public function withData($data)
	{
		$this->data = $data;

		return $this;
	}

	/**
	 * Set arbitrary meta data about the response.
	 *
	 * @param array $meta Associative array of arbitrary meta data.
	 *
	 * @return $this
	 */
	public function withMeta($meta)
	{
		$this->meta = wbArrayMerge(
			$this->meta,
			$meta
		);

		return $this;
	}

	/**
	 * Set links related to the response.
	 *
	 * @param array $links Array of links.
	 *
	 * @return $this
	 */
	public function withLinks($links)
	{
		$this->links = wbArrayMerge(
			$this->links,
			$links
		);

		return $this;
	}

	/**
	 * Set the list of headers to output.
	 *
	 * @param array $headers Associate array of headers name => headers value
	 *
	 * @return $this
	 */
	public function withHeaders($headers)
	{
		$this->headers = wbArrayMerge(
			$this->headers,
			$headers
		);

		return $this;
	}

	/**
	 * Set the date/time at which the resource was last modified
	 *
	 * @param int $lastModified A unix timestamp.
	 *
	 * @return Response
	 */
	public function withLastModified($lastModified)
	{
		$this->lastModified = $lastModified;

		return $this;
	}

	/**
	 * Set the list of errors to output.
	 *
	 * @param array $errors Array of errors descriptors.
	 *   array(
	 *   'code' => 123,
	 *   'message' => 'Some error message'
	 * )
	 *
	 * @return $this
	 */
	public function withErrors($errors)
	{
		$this->errors = wbArrayMerge(
			$this->errors,
			$errors
		);

		return $this;
	}

	/**
	 * Output the response and exit.
	 */
	public function render()
	{
		$this->build();

		// and prepare output
		$this->responseBody = $this->envelope(
			$this->response
		);

		$this->responseBody = $this->encode(
			$this->responseBody
		);

		System\Http::render(
			$this->status,
			$this->responseBody,
			'application/json',
			$this->headers
		);
	}

	/**
	 * Return response data only, without exiting.
	 */
	public function renderData()
	{
		$this->build();

		$responseData = array(
			'status'  => $this->status,
			'data'    => $this->response,
			'headers' => $this->headers
		);

		return $responseData;
	}

	/**
	 * Merge default response values with provided values to build a full response.
	 *
	 * @return array
	 */
	public function build()
	{
		if (empty($this->status))
		{
			$this->status = System\Http::RETURN_OK;
		}

		// errors or data, but not both
		if (!empty($this->errors))
		{
			$this->data = null;
		}
		else
		{
			$this->errors = null;
		}

		$this->response =
			array(
				'data'   => $this->data,
				'links'  => $this->links,
				'errors' => $this->errors,
				'meta'   => $this->meta,
			);

		// finally insert version info and nosniff
		$this->withHeaders(
			array(
				'x-wbl-api-version'      => $this->apiVersion,
				'x-wbl-api-id'           => $this->requestId,
				'X-Content-Type-Options' => 'nosniff'
			)
		);

		// Return the response data, can be used directly
		// from php, without an HTTP response.
		foreach ($this->response as $key => $value)
		{
			if ('data' != $key && empty($value))
			{
				unset($this->response[$key]);
			}
		}

		// Etag the response
		if (System\Http::isSuccess($this->status))
		{
			$this->withHeaders(
				array('ETag' => '"' . $this->hash($this->response) . '"')
			);
			$lastModified = $this->getLastModified();
			if (!empty($lastModified))
			{
				$this->withHeaders(
					array('Last-Modified' => $lastModified)
				);
			}
		}

		return $this->response;
	}

	/**
	 * Wraps content in an envelope for json security purpose.
	 *
	 * @param array $content
	 *
	 * @return string
	 */
	protected function envelope($content)
	{
		$envelopedContent = new \stdClass;
		foreach ($content as $key => $value)
		{
			$envelopedContent->{$key} = $value;
		}

		return $envelopedContent;
	}

	/**
	 * Json encode an input string, without escaping slashed, if PHP version allows.
	 *
	 * @param string $content
	 *
	 * @return string| null
	 */
	private function encode($content)
	{
		if (is_null($content))
		{
			return $content;
		}

		$options = defined('JSON_PRETTY_PRINT') ? JSON_PRETTY_PRINT : null;
		$options = defined('JSON_UNESCAPED_SLASHES') ? JSON_UNESCAPED_SLASHES | $options : $options;

		return json_encode(
			$content,
			$options
		);
	}

	/**
	 * Builds a date time string suitable for use in Last-modified header.
	 *
	 * @return string
	 * @throws \Exception
	 */
	private function getLastModified()
	{
		$date = new \DateTime(
			'now',
			new \DateTimeZone('UTC')
		);

		if (!empty($this->lastModified))
		{
			$date->setTimestamp(
				$this->lastModified
			);
		}

		return $date->format(' D, d M Y H:i:s e');
	}

	/**
	 * Produces a unique hash of a piece of data.
	 *
	 * @param mixed $content
	 *
	 * @return string
	 */
	private function hash($content)
	{
		return sha1(
			serialize($content)
		);
	}
}
