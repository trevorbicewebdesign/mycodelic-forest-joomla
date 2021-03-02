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

namespace Weeblr\Wblib\V_SH4_4206\Db;

defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Generic simple key/value storage
 *
 */
interface KeystoreInterface
{
	/**
	 * Store data in keystore without any serialization
	 *
	 * @param string $key   unique id for the data
	 * @param mixed  $value data to store
	 *
	 * @return $this
	 * @throws \InvalidArgumentException
	 */
	public function putRaw($key, $value);

	/**
	 * Delete a record in the keystore
	 *
	 * @param string $key
	 *
	 * @return $this
	 *
	 * @throws \InvalidArgumentException
	 * @throws \Exception
	 */
	public function delete($key);

	/**
	 * Retrieves a value from the keystore, identified by its key.
	 * If not found, returns default value passed in.
	 *
	 * @param string $key
	 * @param mixed  $default
	 *
	 * @return mixed|null
	 * @throws \InvalidArgumentException
	 * @throws \Exception
	 */
	public function get($key, $default = null);

	/**
	 * Store a value into the keystore, identified by a key. Overwrite any pre-existing value with same key.
	 * Value is serialized prior to being stored, using PHP serialization by default
	 * Alternative is json
	 *
	 * @param string $key
	 * @param mixed  $value
	 * @param int    $format use of the class constants
	 *
	 * @return $this
	 * @throws \InvalidArgumentException
	 * @throws \Exception
	 */
	public function put($key, $value, $format = self::FORMAT_JSON);
}
