<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Contact/ContactType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:dfe2f3758a8cf1ad9bd23dfb9e2de671)
 */

/**
 * Database access object for the ContactType entity.
 */
class CRM_Contact_DAO_ContactType extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '3.1';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_contact_type';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Contact Type ID
   *
   * @var int
   */
  public $id;

  /**
   * Internal name of Contact Type (or Subtype).
   *
   * @var string
   */
  public $name;

  /**
   * localized Name of Contact Type.
   *
   * @var string
   */
  public $label;

  /**
   * localized Optional verbose description of the type.
   *
   * @var text
   */
  public $description;

  /**
   * URL of image if any.
   *
   * @var string
   */
  public $image_URL;

  /**
   * Optional FK to parent contact type.
   *
   * @var int
   */
  public $parent_id;

  /**
   * Is this entry active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * Is this contact type a predefined system type
   *
   * @var bool
   */
  public $is_reserved;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_contact_type';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Contact Types') : ts('Contact Type');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'parent_id', 'civicrm_contact_type', 'id');
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
          'title' => ts('Contact Type ID'),
          'description' => ts('Contact Type ID'),
          'required' => TRUE,
          'where' => 'civicrm_contact_type.id',
          'table_name' => 'civicrm_contact_type',
          'entity' => 'ContactType',
          'bao' => 'CRM_Contact_BAO_ContactType',
          'localizable' => 0,
          'add' => '1.1',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name'),
          'description' => ts('Internal name of Contact Type (or Subtype).'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_contact_type.name',
          'table_name' => 'civicrm_contact_type',
          'entity' => 'ContactType',
          'bao' => 'CRM_Contact_BAO_ContactType',
          'localizable' => 0,
          'add' => '3.1',
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contact Type Label'),
          'description' => ts('localized Name of Contact Type.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_contact_type.label',
          'table_name' => 'civicrm_contact_type',
          'entity' => 'ContactType',
          'bao' => 'CRM_Contact_BAO_ContactType',
          'localizable' => 1,
          'add' => '3.1',
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Contact Type Description'),
          'description' => ts('localized Optional verbose description of the type.'),
          'rows' => 2,
          'cols' => 60,
          'where' => 'civicrm_contact_type.description',
          'table_name' => 'civicrm_contact_type',
          'entity' => 'ContactType',
          'bao' => 'CRM_Contact_BAO_ContactType',
          'localizable' => 1,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '3.1',
        ],
        'image_URL' => [
          'name' => 'image_URL',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contact Type Image URL'),
          'description' => ts('URL of image if any.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contact_type.image_URL',
          'table_name' => 'civicrm_contact_type',
          'entity' => 'ContactType',
          'bao' => 'CRM_Contact_BAO_ContactType',
          'localizable' => 0,
          'add' => '3.1',
        ],
        'parent_id' => [
          'name' => 'parent_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact Type Parent'),
          'description' => ts('Optional FK to parent contact type.'),
          'where' => 'civicrm_contact_type.parent_id',
          'table_name' => 'civicrm_contact_type',
          'entity' => 'ContactType',
          'bao' => 'CRM_Contact_BAO_ContactType',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_ContactType',
          'pseudoconstant' => [
            'table' => 'civicrm_contact_type',
            'keyColumn' => 'id',
            'labelColumn' => 'label',
            'condition' => 'parent_id IS NULL',
          ],
          'add' => '3.1',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Contact Type Is Active?'),
          'description' => ts('Is this entry active?'),
          'where' => 'civicrm_contact_type.is_active',
          'default' => '1',
          'table_name' => 'civicrm_contact_type',
          'entity' => 'ContactType',
          'bao' => 'CRM_Contact_BAO_ContactType',
          'localizable' => 0,
          'add' => '3.1',
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Contact Type is Reserved?'),
          'description' => ts('Is this contact type a predefined system type'),
          'where' => 'civicrm_contact_type.is_reserved',
          'default' => '0',
          'table_name' => 'civicrm_contact_type',
          'entity' => 'ContactType',
          'bao' => 'CRM_Contact_BAO_ContactType',
          'localizable' => 0,
          'add' => '3.1',
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
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'contact_type', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'contact_type', $prefix, []);
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
      'contact_type' => [
        'name' => 'contact_type',
        'field' => [
          0 => 'name',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_contact_type::1::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
