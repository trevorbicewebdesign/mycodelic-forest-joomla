<?php
/**
 * Shlib - programming library
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier 2020
 * @package     shlib
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     0.4.0.711
 * @date        2020-06-26
 */

/** ensure this file is being included by a parent file */
defined('_JEXEC') or die;

/**
 * Base class for rendering a display layout
 *
 * @since       0.2.1
 */
class ShlMvcLayout_Base implements \ShlMvcLayout
{
	/**
	 * Storage for display data
	 *
	 * @var null
	 */
	protected $__data = null;

	/**
	 * Method to render the layout.
	 *
	 * @param object $displayData Object which properties are used inside the layout file to build displayed output
	 *
	 * @return  string  The necessary HTML to display the layout
	 *
	 * @since   0.2.1
	 */
	public function render($displayData)
	{
		$this->__data = $displayData;

		return '';
	}

	/**
	 * Method to escape output.
	 *
	 * @param string $output The output to escape.
	 *
	 * @return  string  The escaped output.
	 *
	 * @since   0.2.1
	 */
	protected function escape($output, $flags = ENT_COMPAT, $charset = 'UTF-8')
	{
		return \ShlSystem_Strings::escape($output, $flags, $charset);
	}

	/**
	 * Check if some display data has been set to render, either globally
	 * or for a specific display data key
	 *
	 * @param string $key
	 * @param string $subkey If $key item exists, and is an array, we can check for a subkey in that array
	 *
	 * @return bool
	 */
	protected function hasDisplayData($key = '', $subkey = null)
	{
		$hasDisplayData = empty($key) ? !empty($this->__data) : !empty($this->__data[$key]);
		if (!empty($subkey))
		{
			$hasDisplayData = !empty($this->__data[$key]) && is_array($this->__data[$key]) && !empty($this->__data[$key][$subkey]);
		}

		return $hasDisplayData;
	}

	/**
	 * Get a display data variable, identified by its key in the
	 * data set passed to the render() method. Assumes this data is
	 * an associative array. If not, or if key not set, returns $default value.
	 *
	 * @param string $key
	 * @param mixed  $default
	 *
	 * @return mixed
	 */
	protected function get($key, $default = null)
	{
		return isset($this->__data[$key]) ? $this->__data[$key] : $default;
	}

	/**
	 * Same as @see ShlMvcLayout_Base::get, but returned output is escaped
	 * through the @see ShlMvcLayout_Base::escape method.
	 *
	 * @param string $key
	 * @param mixed  $default
	 *
	 * @return string
	 */
	protected function getEscaped($key, $default = null)
	{
		return \ShlSystem_Strings::escape(
			$this->get(
				$key,
				$default
			)
		);
	}

	/**
	 * Same as @see \ShlMvcLayout_Base::get, but returned output cast to an integer.
	 *
	 * @param string $key
	 * @param int    $default
	 *
	 * @return int
	 */
	protected function getAsInt($key, $default = 0)
	{
		return (int) $this->get($key, $default);
	}

	/**
	 * Same as @see \ShlMvcLayout_Base::get, but returned output cast to an integer
	 * and then formatted as a string:
	 *
	 * Format into K and M for large number
	 * 0 -> 9999 : literal
	 * 10 000 -> 999999 : 10K -> 999,9K (max one decimal)
	 * > 1000 000 : 1M -> 1,9M (max 1 decimals)
	 *
	 * @param string $key
	 * @param int    $default
	 *
	 * @return string
	 */
	protected function getAsFormattedInt($key, $default = 0)
	{
		return \ShlSystem_Strings::formatIntForTitle($this->get($key, $default));
	}

	/**
	 * Same as @see \ShlMvcLayout_Base::get, but returned output cast to an array.
	 *
	 * @param string $key
	 * @param array  $default
	 *
	 * @return array
	 */
	protected function getAsArray($key, $default = array())
	{
		$value = $this->get($key, $default);

		return is_array($value) ? $value : (array) $value;
	}

	/**
	 * Get a specific entry in an associative array.
	 *
	 * @param string $key Key of the associative array to lookup
	 * @param string $keyInArray Key of the desired item in the associative array
	 * @param mixed  $default Returned if not an array, or item in array not found or empty
	 *
	 * @return mixed
	 */
	protected function getInArray($key, $keyInArray, $default = null)
	{
		$value = $default;
		if ($this->hasDisplayData($key))
		{
			$array = $this->getAsArray($key);
			$value = empty($array[$keyInArray]) ? $default : $array[$keyInArray];
		}

		return $value;
	}

	/**
	 * Get a specific property of an object.
	 *
	 * @param string $key
	 * @param string $keyInObject
	 * @param mixed  $default
	 *
	 * @return mixed
	 */
	protected function getInObject($key, $keyInObject, $default = null)
	{
		$value = $default;
		if ($this->hasDisplayData($key))
		{
			$object = $this->getAsArray($key);
			$value  = empty($object[$keyInObject]) ? $default : $object[$keyInObject];
		}

		return $value;
	}

	/**
	 * Same as @see WblMvcLayout_Base::get, but returned output makes sure no double-quote is used.
	 *
	 * @param string $key
	 * @param string $default
	 *
	 * @return string
	 */
	protected function getAsAttr($key, $default = '', $method = 'encode_double_quotes')
	{
		switch ($method)
		{
			case 'replace_with_single':
				$output = str_replace(
					'"',
					'\'',
					$this->get($key, $default)
				);
				break;
			case 'remove':
				$output = str_replace(
					'"',
					'',
					$this->get($key, $default)
				);
				break;
			default:
				$output = str_replace(
					'"',
					'&quot;',
					$this->get($key, $default)
				);
				break;
		}

		return $output;
	}

	/**
	 * Same as @see \ShlMvcLayout_Base::get, but returned output is json encoded.
	 *
	 * @param string $key
	 * @param string $default
	 *
	 * @return string
	 */
	protected function getAsJson($key, $default = '')
	{
		return json_encode($this->get($key, $default));
	}

	/**
	 * Same as @see \ShlMvcLayout_Base::get, but returned output is considered a URL
	 * and is output as XHTMl compatible.
	 *
	 * @param string $key
	 * @param string $default
	 *
	 * @return string
	 */
	protected function getAsUrl($key, $default = '', $xhtml = true)
	{
		$url = $this->get(
			$key,
			$default
		);

		if ($xhtml)
		{
			$url = htmlspecialchars($url, ENT_COMPAT, 'UTF-8');
		}

		return $url;
	}

	/**
	 * Same as @see \ShlMvcLayout_Base::getAsUrl, but returned url is made absolute.
	 *
	 * @param string $key
	 * @param string $default
	 * @param bool   $forceDomain
	 * @param bool   $xhtml
	 *
	 * @return string
	 */
	protected function getAsAbsoluteUrl($key, $default = '', $forceDomain = false, $xhtml = true)
	{
		$url = ShlSystem_Route::absolutify(
			$this->get(
				$key,
				$default
			),
			$forceDomain
		);

		if ($xhtml)
		{
			$url = htmlspecialchars($url, ENT_COMPAT, 'UTF-8');
		}

		return $url;
	}

}
