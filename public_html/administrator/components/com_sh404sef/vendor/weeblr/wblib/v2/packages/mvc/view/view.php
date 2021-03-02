<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 *
 * 2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\Mvc;

use Weeblr\Wblib\V_SH4_4206\Base,
	Weeblr\Wblib\V_SH4_4206\System;

/** ensure this file is being included by a parent file */
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

include_once 'wblViewHelper.php';

/**
 * Updates to a standard HTML page, which has an AMP version
 */
abstract class ViewView extends Base\Base
{
	protected $data           = null;
	protected $theme          = null;
	protected $layout         = null;
	protected $baseLayoutPath = null;
	protected $echoOutput     = true;
	protected $headers        = array();
	protected $outputHeaders  = false;
	protected $output         = '';

	/**
	 * Constructor
	 *
	 * @param array $options An array of options.
	 */
	public function __construct($options = array())
	{
		parent::__construct();

		// get some default values
		$this->theme          = wbArrayGet($options, 'theme', 'default');
		$this->layout         = wbArrayGet($options, 'layout', 'default');
		$this->baseLayoutPath = wbArrayGet($options, 'base_layout_path', WBLIB_V_SH4_4206_LAYOUTS_PATH);
		$this->echoOutput     = wbArrayGet($options, 'echo_output', $this->echoOutput);
		$this->outputHeaders  = wbArrayGet($options, 'output_headers', $this->outputHeaders);
	}

	/**
	 * Renders the view content, returning it in a string and
	 * optionally echoing it
	 */
	public function render()
	{
		try
		{
			$output = $this->doRender();
			if ($this->echoOutput)
			{
				echo $output;
			}

			return $output;
		}
		catch (\Exception $e)
		{
			System\Log::error('wblib', '%s::%d %s', __METHOD__, __LINE__, $e->getMessage());
		}
	}

	/**
	 * Actually render the output of the view.
	 *
	 * @return mixed
	 */
	abstract protected function doRender();

	/**
	 * Stores data required for display, sent by dispatcher/controller
	 *
	 * @param mixed $data
	 *
	 * @return $this
	 */
	public function setDisplayData($data)
	{
		$this->data = $data;

		return $this;
	}

	/**
	 * Store a header value, as a key/value array
	 *
	 * @param array $header key => value list of headers to output
	 *
	 * @return $this
	 */
	public function setHeader($header)
	{
		$this->headers = array_merge($this->headers, $header);

		return $this;
	}

	/**
	 * Output headers stored up until now, unless headers
	 * have already been sent
	 *
	 * @return $this
	 */
	public function outputHeaders()
	{
		if (!$this->outputHeaders)
		{
			return $this;
		}

		if (!headers_sent())
		{
			// run filter to collect headers
			/**
			 * Filter the list of HTTP headers included in a page response
			 *
			 * @api
			 *
			 * @param array $headers Name => Value indexed array of headers ready to be sent
			 *
			 * @return array
			 * @since   1.0.0
			 *
			 * @package wbLib\filter\output
			 * @var wblib_response_headers
			 */
			$headers = $this->factory->getThe('hook')->filter('wblib_response_headers', $this->headers);

			// output headers
			foreach ($headers as $name => $content)
			{
				if ('status' == strtolower($name))
				{
					status_header($content);
				}
				else
				{
					header($name . ': ' . $content);
				}
			}
		}
		else
		{
			System\Log::error('wblib', '%s::%d %s', __METHOD__, __LINE__, 'Headers already sent!');
		}

		return $this;
	}
}
