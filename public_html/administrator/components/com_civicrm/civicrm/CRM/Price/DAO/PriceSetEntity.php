<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Price/PriceSetEntity.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:b85629f3ae24a3f503327a5d60f4f17f)
 */

/**
 * Database access object for the PriceSetEntity entity.
 */
class CRM_Price_DAO_PriceSetEntity extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.8';
  const COMPONENT = 'CiviContribute';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_price_set_entity';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Price Set Entity
   *
   * @var int
   */
  public $id;

  /**
   * Table which uses this price set
   *
   * @var string
   */
  public $entity_table;

  /**
   * Item in table
   *
   * @var int
   */
  public $entity_id;

  /**
   * price set being used
   *
   * @var int
   */
  public $price_set_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_price_set_entity';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Price Set Entities') : ts('Price Set Entity');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'price_set_id', 'civicrm_price_set', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Price Set Entity ID'),
          'description' => ts('Price Set Entity'),
          'required' => TRUE,
          'where' => 'civicrm_price_set_entity.id',
          'table_name' => 'civicrm_price_set_entity',
          'entity' => 'PriceSetEntity',
          'bao' => 'CRM_Price_DAO_PriceSetEntity',
          'localizable' => 0,
          'add' => '1.8',
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Table'),
          'description' => ts('Table which uses this price set'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_price_set_entity.entity_table',
          'table_name' => 'civicrm_price_set_entity',
          'entity' => 'PriceSetEntity',
          'bao' => 'CRM_Price_DAO_PriceSetEntity',
          'localizable' => 0,
          'add' => '1.8',
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity IF'),
          'description' => ts('Item in table'),
          'required' => TRUE,
          'where' => 'civicrm_price_set_entity.entity_id',
          'table_name' => 'civicrm_price_set_entity',
          'entity' => 'PriceSetEntity',
          'bao' => 'CRM_Price_DAO_PriceSetEntity',
          'localizable' => 0,
          'add' => '1.8',
        ],
        'price_set_id' => [
          'name' => 'price_set_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Price Set'),
          'description' => ts('price set being used'),
          'required' => TRUE,
          'where' => 'civicrm_price_set_entity.price_set_id',
          'table_name' => 'civicrm_price_set_entity',
          'entity' => 'PriceSetEntity',
          'bao' => 'CRM_Price_DAO_PriceSetEntity',
          'localizable' => 0,
          'FKClassName' => 'CRM_Price_DAO_PriceSet',
          'pseudoconstant' => [
            'table' => 'civicrm_price_set',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ],
          'add' => '1.8',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'price_set_entity', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'price_set_entity', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_entity' => [
        'name' => 'UI_entity',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_price_set_entity::1::entity_table::entity_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
