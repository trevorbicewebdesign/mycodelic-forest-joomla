<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Core/UFField.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:3acfd1d2bd5f1e54f8aee7f96328cb58)
 */

/**
 * Database access object for the UFField entity.
 */
class CRM_Core_DAO_UFField extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_uf_field';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique table ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Which form does this field belong to.
   *
   * @var int unsigned
   */
  public $uf_group_id;

  /**
   * Name for CiviCRM field which is being exposed for sharing.
   *
   * @var string
   */
  public $field_name;

  /**
   * Is this field currently shareable? If false, hide the field for all sharing contexts.
   *
   * @var boolean
   */
  public $is_active;

  /**
   * the field is view only and not editable in user forms.
   *
   * @var boolean
   */
  public $is_view;

  /**
   * Is this field required when included in a user or registration form?
   *
   * @var boolean
   */
  public $is_required;

  /**
   * Controls field display order when user framework fields are displayed in registration and account editing forms.
   *
   * @var int
   */
  public $weight;

  /**
   * Description and/or help text to display after this field.
   *
   * @var text
   */
  public $help_post;

  /**
   * Description and/or help text to display before this field.
   *
   * @var text
   */
  public $help_pre;

  /**
   * In what context(s) is this field visible.
   *
   * @var string
   */
  public $visibility;

  /**
   * Is this field included as a column in the selector table?
   *
   * @var boolean
   */
  public $in_selector;

  /**
   * Is this field included search form of profile?
   *
   * @var boolean
   */
  public $is_searchable;

  /**
   * Location type of this mapping, if required
   *
   * @var int unsigned
   */
  public $location_type_id;

  /**
   * Phone Type Id, if required
   *
   * @var int unsigned
   */
  public $phone_type_id;

  /**
   * Website Type Id, if required
   *
   * @var int unsigned
   */
  public $website_type_id;

  /**
   * To save label for fields.
   *
   * @var string
   */
  public $label;

  /**
   * This field saves field type (ie individual,household.. field etc).
   *
   * @var string
   */
  public $field_type;

  /**
   * Is this field reserved for use by some other CiviCRM functionality?
   *
   * @var boolean
   */
  public $is_reserved;

  /**
   * Include in multi-record listing?
   *
   * @var boolean
   */
  public $is_multi_summary;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_uf_field';
    parent::__construct();
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'uf_group_id', 'civicrm_uf_group', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'location_type_id', 'civicrm_location_type', 'id');
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
          'title' => ts('Profile Field ID'),
          'description' => ts('Unique table ID'),
          'required' => TRUE,
          'where' => 'civicrm_uf_field.id',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
        ],
        'uf_group_id' => [
          'name' => 'uf_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Profile ID'),
          'description' => ts('Which form does this field belong to.'),
          'required' => TRUE,
          'where' => 'civicrm_uf_field.uf_group_id',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_UFGroup',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_uf_group',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ]
        ],
        'field_name' => [
          'name' => 'field_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Field Name'),
          'description' => ts('Name for CiviCRM field which is being exposed for sharing.'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_uf_field.field_name',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
          'pseudoconstant' => [
            'callback' => 'CRM_Core_BAO_UFField::getAvailableFieldTitles',
          ]
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Field Is Active'),
          'description' => ts('Is this field currently shareable? If false, hide the field for all sharing contexts.'),
          'where' => 'civicrm_uf_field.is_active',
          'default' => '1',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
        ],
        'is_view' => [
          'name' => 'is_view',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Is View Only'),
          'description' => ts('the field is view only and not editable in user forms.'),
          'where' => 'civicrm_uf_field.is_view',
          'default' => '0',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
        ],
        'is_required' => [
          'name' => 'is_required',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Field Is Required'),
          'description' => ts('Is this field required when included in a user or registration form?'),
          'where' => 'civicrm_uf_field.is_required',
          'default' => '0',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order'),
          'description' => ts('Controls field display order when user framework fields are displayed in registration and account editing forms.'),
          'required' => TRUE,
          'where' => 'civicrm_uf_field.weight',
          'default' => '1',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
        ],
        'help_post' => [
          'name' => 'help_post',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Profile Field Post Help'),
          'description' => ts('Description and/or help text to display after this field.'),
          'where' => 'civicrm_uf_field.help_post',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 1,
        ],
        'help_pre' => [
          'name' => 'help_pre',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Profile Field Pre Help'),
          'description' => ts('Description and/or help text to display before this field.'),
          'where' => 'civicrm_uf_field.help_pre',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 1,
        ],
        'visibility' => [
          'name' => 'visibility',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Field Visibility'),
          'description' => ts('In what context(s) is this field visible.'),
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_uf_field.visibility',
          'default' => 'User and User Admin Only',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::ufVisibility',
          ]
        ],
        'in_selector' => [
          'name' => 'in_selector',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Field Is a Filter'),
          'description' => ts('Is this field included as a column in the selector table?'),
          'where' => 'civicrm_uf_field.in_selector',
          'default' => '0',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
        ],
        'is_searchable' => [
          'name' => 'is_searchable',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Field Is Searchable'),
          'description' => ts('Is this field included search form of profile?'),
          'where' => 'civicrm_uf_field.is_searchable',
          'default' => '0',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
        ],
        'location_type_id' => [
          'name' => 'location_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Profile Field Location Type'),
          'description' => ts('Location type of this mapping, if required'),
          'where' => 'civicrm_uf_field.location_type_id',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_LocationType',
        ],
        'phone_type_id' => [
          'name' => 'phone_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Profile Field Phone Type'),
          'description' => ts('Phone Type Id, if required'),
          'where' => 'civicrm_uf_field.phone_type_id',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
          'pseudoconstant' => [
            'optionGroupName' => 'phone_type',
            'optionEditPath' => 'civicrm/admin/options/phone_type',
          ]
        ],
        'website_type_id' => [
          'name' => 'website_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Profile Field Website Type'),
          'description' => ts('Website Type Id, if required'),
          'where' => 'civicrm_uf_field.website_type_id',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
          'pseudoconstant' => [
            'optionGroupName' => 'website_type',
            'optionEditPath' => 'civicrm/admin/options/website_type',
          ]
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Field Label'),
          'description' => ts('To save label for fields.'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_uf_field.label',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 1,
        ],
        'field_type' => [
          'name' => 'field_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Field Type'),
          'description' => ts('This field saves field type (ie individual,household.. field etc).'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_uf_field.field_type',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Field Is Reserved'),
          'description' => ts('Is this field reserved for use by some other CiviCRM functionality?'),
          'where' => 'civicrm_uf_field.is_reserved',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
        ],
        'is_multi_summary' => [
          'name' => 'is_multi_summary',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Field Supports Multiple'),
          'description' => ts('Include in multi-record listing?'),
          'where' => 'civicrm_uf_field.is_multi_summary',
          'default' => '0',
          'table_name' => 'civicrm_uf_field',
          'entity' => 'UFField',
          'bao' => 'CRM_Core_BAO_UFField',
          'localizable' => 0,
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'uf_field', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'uf_field', $prefix, []);
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
      'IX_website_type_id' => [
        'name' => 'IX_website_type_id',
        'field' => [
          0 => 'website_type_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_uf_field::0::website_type_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
