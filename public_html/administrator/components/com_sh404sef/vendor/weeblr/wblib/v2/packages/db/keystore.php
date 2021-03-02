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

use Weeblr\Wblib\V_SH4_4206\Base,
    Weeblr\Wblib\V_SH4_4206\System;

defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 * Generic simple key/value storage
 *
 */
class Keystore extends Base\Base
{
    /**
     * Default db table name
     *
     * CREATE TABLE IF NOT EXISTS `#__wbl_keystore`
     * (
     * `id`          int(10) unsigned                                            NOT NULL AUTO_INCREMENT COMMENT
     * 'Primary Key',
     * `scope`       VARCHAR(40)                                                 NOT NULL DEFAULT 'default',
     * `key`         VARCHAR(150)                                                NOT NULL,
     * `value`       MEDIUMTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
     * `user_id`     INT(11)                                                     NOT NULL DEFAULT 0,
     * `version`     int(10) unsigned                                            NOT NULL DEFAULT 0 COMMENT 'Future
     * use',
     * `lock`        CHAR(40)                                                    NOT NULL DEFAULT '' COMMENT 'Future
     * use',
     * `format`      TINYINT                                                     NOT NULL DEFAULT 1,
     * `modified_at` datetime                                                    NOT NULL,
     *
     * PRIMARY KEY (`id`),
     * UNIQUE KEY `main` (`scope`, `key`)
     * ) ENGINE = InnoDB
     * DEFAULT CHARSET = utf8
     * DEFAULT COLLATE = utf8_unicode_ci;
     */

    const TABLE_NAME = '#__wbl_keystore';

    /**
     * Base format constant. Right now we de/serialize to and from php and json, and things are likely to stay like this
     */
    const FORMAT_PHP = 0;
    const FORMAT_JSON = 1;
    const FORMAT_JSON_ARRAY = 2;

    /**
     * Do not encode
     */
    const FORMAT_RAW = 128;

    /**
     * Not supported yet
     */
    const FORMAT_YAML = 2;

    /**
     * default scope, when missing from requests
     */
    const DEFAULT_SCOPE = 'default';

    /**
     * Cache for current user id
     *
     * @var int|null
     */
    protected $userId = null;

    /**
     * @var string name of db table to hold keystore values
     */
    protected $tableName = '';

    /**
     * @var Helper A helper for all database access.
     */
    protected $dbHelper = null;

    /**
     * @var int Default value for the storage format.
     */
    protected $defaultFormat = null;

    /**
     * Store commonly used upstream object
     * DB table to use for storage can be changed from the default wbl_keystore
     *
     * @param array $options
     */
    public function __construct($options)
    {
        parent::__construct();

        $this->dbHelper = $this->factory->getThe('db');
        $this->tableName = wbArrayGet($options, 'tableName', '#__wbl_keystore');
        $this->defaultFormat = wbArrayGet($options, 'format', self::FORMAT_JSON);
        $this->userId = $this->platform->getUser()->id;
    }

    /**
     * Store data in keystore without any serialization
     *
     * @param string $key unique id for the data
     * @param mixed $value data to store
     *
     * @param string $scope
     *
     * @return $this
     * @throws \Exception
     */
    public function putRaw($key, $value, $scope = self::DEFAULT_SCOPE)
    {
        if (!is_scalar($value) && !is_null($value)) {
            wbThrow(new InvalidArgumentException('wbLib: Raw value passed to keystore is invalid, not scalar'));
        }

        return $this->put($key, $value, $scope, self::FORMAT_RAW);
    }

    /**
     * Store a value into the keystore, identified by a key. Overwrite any pre-existing value with same key.
     * Value is serialized prior to being stored, using JSON serialization by default
     * Alternative is PHP
     *
     * @param string $key
     * @param mixed $value
     * @param string $scope
     * @param int $format use of the class constants
     *
     * @return $this
     * @throws \Exception
     */
    public function put($key, $value, $scope = self::DEFAULT_SCOPE, $format = null)
    {
        if (empty($key)) {
            wbThrow(new InvalidArgumentException('wbLib: Empty key while trying to put some data in key store'));
        }

        if (is_null($format)) {
            $format = $this->defaultFormat;
        }

        $data = array(
            'scope' => $scope,
            'key' => $key,
            'value' => $this->_encode($value, $format),
            'user_id' => $this->userId,
            'modified_at' => System\Date::getUTCNow(),
            'format' => $format
        );

        // insert or update the record in database
        $this->dbHelper->insertUpdate($this->tableName, $data, array('scope' => $scope, 'key' => $key));

        return $this;
    }

    /**
     * Retrieves a value from the keystore, identified by its key.
     * If not found, returns default value passed in.
     *
     * @param string $key
     * @param mixed $default
     *
     * @param string $scope
     *
     * @return mixed|null
     * @throws \InvalidArgumentException
     * @throws \Exception
     */
    public function get($key, $default = null, $scope = self::DEFAULT_SCOPE)
    {
        if (empty($key)) {
            wbThrow(new InvalidArgumentException('wbLib: Empty key while trying to put some data in key store'));
        }

        $record = $this->dbHelper->selectAssoc(
            $this->tableName, array('value', 'format'), array(
                'scope' => $scope,
                'key' => $key
            )
        );
        $value = empty($record) ? null : $this->_decode($record['value'], $record['format']);
        $value = is_null($value) ? $default : $value;

        return $value;
    }

    /**
     * Delete a record in the keystore
     *
     * @param string $key
     *
     * @param string $scope
     *
     * @return $this
     *
     * @throws \Exception
     */
    public function delete($key, $scope = self::DEFAULT_SCOPE)
    {

        if (empty($key)) {
            wbThrow(new InvalidArgumentException('wbLib: Empty key while trying to delete some data from key store'));
        }

        $this->dbHelper->delete($this->tableName, array('scope' => $scope, 'key' => $key));

        return $this;
    }

    /**
     * Encode a value to one of the supported format, PHP serialization or json
     *
     * @param mixed $value
     * @param int $format see class constant
     *
     * @return string
     */
    protected function _encode($value, $format)
    {
        switch ($format) {
            case self::FORMAT_PHP:
                $value = serialize($value);
                break;
            case self::FORMAT_JSON:
            case self::FORMAT_JSON_ARRAY:
                $value = json_encode($value);
                break;
            default:
                break;
        }

        return $value;
    }

    /**
     * Decode a raw value read from keystore, using the format also retrieved along the value.
     * See class constants for format code.
     *
     * @param string $value
     * @param int $format
     *
     * @return mixed
     */
    protected function _decode($value, $format)
    {
        switch ($format) {
            case self::FORMAT_PHP:
                $value = unserialize($value);
                break;
            case self::FORMAT_JSON:
                $value = json_decode($value);
                break;
            case self::FORMAT_JSON_ARRAY:
                $value = json_decode($value, true);
                break;
            default:
                break;
        }

        return $value;
    }
}
