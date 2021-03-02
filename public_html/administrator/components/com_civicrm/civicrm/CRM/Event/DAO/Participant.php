<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Event/Participant.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:25a479f6858f45acff4110a2de47bbae)
 */

/**
 * Database access object for the Participant entity.
 */
class CRM_Event_DAO_Participant extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.7';
  const COMPONENT = 'CiviEvent';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_participant';

  /**
   * Icon associated with this entity.
   *
   * @var string
   */
  public static $_icon = 'fa-ticket';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Participant Id
   *
   * @var int
   */
  public $id;

  /**
   * FK to Contact ID
   *
   * @var int
   */
  public $contact_id;

  /**
   * FK to Event ID
   *
   * @var int
   */
  public $event_id;

  /**
   * Participant status ID. FK to civicrm_participant_status_type. Default of 1 should map to status = Registered.
   *
   * @var int
   */
  public $status_id;

  /**
   * Participant role ID. Implicit FK to civicrm_option_value where option_group = participant_role.
   *
   * @var string
   */
  public $role_id;

  /**
   * When did contact register for event?
   *
   * @var datetime
   */
  public $register_date;

  /**
   * Source of this event registration.
   *
   * @var string
   */
  public $source;

  /**
   * Populate with the label (text) associated with a fee level for paid events with multiple levels. Note that
   * we store the label value and not the key
   *
   * @var text
   */
  public $fee_level;

  /**
   * @var bool
   */
  public $is_test;

  /**
   * @var bool
   */
  public $is_pay_later;

  /**
   * actual processor fee if known - may be 0.
   *
   * @var float
   */
  public $fee_amount;

  /**
   * FK to Participant ID
   *
   * @var int
   */
  public $registered_by_id;

  /**
   * FK to Discount ID
   *
   * @var int
   */
  public $discount_id;

  /**
   * 3 character string, value derived from config setting.
   *
   * @var string
   */
  public $fee_currency;

  /**
   * The campaign for which this participant has been registered.
   *
   * @var int
   */
  public $campaign_id;

  /**
   * Discount Amount
   *
   * @var int
   */
  public $discount_amount;

  /**
   * FK to civicrm_event_carts
   *
   * @var int
   */
  public $cart_id;

  /**
   * On Waiting List
   *
   * @var int
   */
  public $must_wait;

  /**
   * FK to Contact ID
   *
   * @var int
   */
  public $transferred_to_contact_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_participant';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Participants') : ts('Participant');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'event_id', 'civicrm_event', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'status_id', 'civicrm_participant_status_type', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'registered_by_id', 'civicrm_participant', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'discount_id', 'civicrm_discount', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'campaign_id', 'civicrm_campaign', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'cart_id', 'civicrm_event_carts', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'transferred_to_contact_id', 'civicrm_contact', 'id');
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
        'participant_id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Participant ID'),
          'description' => ts('Participant Id'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_participant.id',
          'headerPattern' => '/(^(participant(.)?)?id$)/i',
          'export' => TRUE,
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'add' => '1.7',
        ],
        'participant_contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID'),
          'description' => ts('FK to Contact ID'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_participant.contact_id',
          'headerPattern' => '/contact(.?id)?/i',
          'export' => TRUE,
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '1.7',
        ],
        'event_id' => [
          'name' => 'event_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Event'),
          'description' => ts('FK to Event ID'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_participant.event_id',
          'headerPattern' => '/event id$/i',
          'export' => TRUE,
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Event_DAO_Event',
          'add' => '1.7',
        ],
        'participant_status_id' => [
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Participant Status'),
          'description' => ts('Participant status ID. FK to civicrm_participant_status_type. Default of 1 should map to status = Registered.'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_participant.status_id',
          'headerPattern' => '/(participant.)?(status)$/i',
          'export' => TRUE,
          'default' => '1',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Event_DAO_ParticipantStatusType',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_participant_status_type',
            'keyColumn' => 'id',
            'labelColumn' => 'label',
          ],
          'add' => '1.7',
        ],
        'participant_role_id' => [
          'name' => 'role_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Participant Role'),
          'description' => ts('Participant role ID. Implicit FK to civicrm_option_value where option_group = participant_role.'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_participant.role_id',
          'headerPattern' => '/(participant.)?(role)$/i',
          'export' => TRUE,
          'default' => 'NULL',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_SEPARATOR_TRIMMED,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'participant_role',
            'optionEditPath' => 'civicrm/admin/options/participant_role',
          ],
          'add' => '1.7',
        ],
        'participant_register_date' => [
          'name' => 'register_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Register date'),
          'description' => ts('When did contact register for event?'),
          'import' => TRUE,
          'where' => 'civicrm_participant.register_date',
          'headerPattern' => '/^(r(egister\s)?date)$/i',
          'export' => TRUE,
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ],
          'add' => '1.7',
        ],
        'participant_source' => [
          'name' => 'source',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Participant Source'),
          'description' => ts('Source of this event registration.'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_participant.source',
          'headerPattern' => '/(participant.)?(source)$/i',
          'export' => TRUE,
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.7',
        ],
        'participant_fee_level' => [
          'name' => 'fee_level',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Fee level'),
          'description' => ts('Populate with the label (text) associated with a fee level for paid events with multiple levels. Note that
      we store the label value and not the key'),
          'import' => TRUE,
          'where' => 'civicrm_participant.fee_level',
          'headerPattern' => '/^(f(ee\s)?level)$/i',
          'export' => TRUE,
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_SEPARATOR_BOOKEND,
          'add' => '1.7',
        ],
        'participant_is_test' => [
          'name' => 'is_test',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Test'),
          'import' => TRUE,
          'where' => 'civicrm_participant.is_test',
          'export' => TRUE,
          'default' => '0',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'add' => '1.7',
        ],
        'participant_is_pay_later' => [
          'name' => 'is_pay_later',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Pay Later'),
          'import' => TRUE,
          'where' => 'civicrm_participant.is_pay_later',
          'headerPattern' => '/(is.)?(pay(.)?later)$/i',
          'export' => TRUE,
          'default' => '0',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'participant_fee_amount' => [
          'name' => 'fee_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Fee Amount'),
          'description' => ts('actual processor fee if known - may be 0.'),
          'precision' => [
            20,
            2,
          ],
          'import' => TRUE,
          'where' => 'civicrm_participant.fee_amount',
          'headerPattern' => '/fee(.?am(ou)?nt)?/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'add' => '2.1',
        ],
        'participant_registered_by_id' => [
          'name' => 'registered_by_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Registered By ID'),
          'description' => ts('FK to Participant ID'),
          'import' => TRUE,
          'where' => 'civicrm_participant.registered_by_id',
          'export' => TRUE,
          'default' => 'NULL',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Event_DAO_Participant',
          'add' => '2.1',
        ],
        'participant_discount_id' => [
          'name' => 'discount_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Discount ID'),
          'description' => ts('FK to Discount ID'),
          'where' => 'civicrm_participant.discount_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Discount',
          'add' => '2.1',
        ],
        'participant_fee_currency' => [
          'name' => 'fee_currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Fee Currency'),
          'description' => ts('3 character string, value derived from config setting.'),
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'import' => TRUE,
          'where' => 'civicrm_participant.fee_currency',
          'headerPattern' => '/(fee)?.?cur(rency)?/i',
          'dataPattern' => '/^[A-Z]{3}$/i',
          'export' => TRUE,
          'default' => 'NULL',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'name',
            'abbrColumn' => 'symbol',
          ],
          'add' => '3.0',
        ],
        'participant_campaign_id' => [
          'name' => 'campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Campaign'),
          'description' => ts('The campaign for which this participant has been registered.'),
          'import' => TRUE,
          'where' => 'civicrm_participant.campaign_id',
          'export' => TRUE,
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'pseudoconstant' => [
            'table' => 'civicrm_campaign',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ],
          'add' => '3.4',
        ],
        'discount_amount' => [
          'name' => 'discount_amount',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Discount Amount'),
          'description' => ts('Discount Amount'),
          'where' => 'civicrm_participant.discount_amount',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'add' => '4.1',
        ],
        'cart_id' => [
          'name' => 'cart_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Event Cart ID'),
          'description' => ts('FK to civicrm_event_carts'),
          'where' => 'civicrm_participant.cart_id',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Event_Cart_DAO_Cart',
          'add' => '4.1',
        ],
        'must_wait' => [
          'name' => 'must_wait',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Must Wait on List'),
          'description' => ts('On Waiting List'),
          'where' => 'civicrm_participant.must_wait',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'add' => '4.1',
        ],
        'transferred_to_contact_id' => [
          'name' => 'transferred_to_contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Transferred to Contact ID'),
          'description' => ts('FK to Contact ID'),
          'import' => TRUE,
          'where' => 'civicrm_participant.transferred_to_contact_id',
          'headerPattern' => '/transfer(.?id)?/i',
          'export' => TRUE,
          'default' => 'NULL',
          'table_name' => 'civicrm_participant',
          'entity' => 'Participant',
          'bao' => 'CRM_Event_BAO_Participant',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '4.7',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'participant', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'participant', $prefix, []);
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
      'index_status_id' => [
        'name' => 'index_status_id',
        'field' => [
          0 => 'status_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_participant::0::status_id',
      ],
      'index_role_id' => [
        'name' => 'index_role_id',
        'field' => [
          0 => 'role_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_participant::0::role_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
