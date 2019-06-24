<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Core/JobLog.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:68e8b90d050e64feef2b1868d83a7923)
 */

/**
 * Database access object for the JobLog entity.
 */
class CRM_Core_DAO_JobLog extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_job_log';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Job log entry Id
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Which Domain is this scheduled job for
   *
   * @var int unsigned
   */
  public $domain_id;

  /**
   * Log entry date
   *
   * @var timestamp
   */
  public $run_time;

  /**
   * Pointer to job id - not a FK though, just for logging purposes
   *
   * @var int unsigned
   */
  public $job_id;

  /**
   * Title of the job
   *
   * @var string
   */
  public $name;

  /**
   * Full path to file containing job script
   *
   * @var string
   */
  public $command;

  /**
   * Title line of log entry
   *
   * @var string
   */
  public $description;

  /**
   * Potential extended data for specific job run (e.g. tracebacks).
   *
   * @var text
   */
  public $data;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_job_log';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'domain_id', 'civicrm_domain', 'id');
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
          'title' => ts('Job Log ID'),
          'description' => ts('Job log entry Id'),
          'required' => TRUE,
          'where' => 'civicrm_job_log.id',
          'table_name' => 'civicrm_job_log',
          'entity' => 'JobLog',
          'bao' => 'CRM_Core_DAO_JobLog',
          'localizable' => 0,
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Domain ID'),
          'description' => ts('Which Domain is this scheduled job for'),
          'required' => TRUE,
          'where' => 'civicrm_job_log.domain_id',
          'table_name' => 'civicrm_job_log',
          'entity' => 'JobLog',
          'bao' => 'CRM_Core_DAO_JobLog',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
        'run_time' => [
          'name' => 'run_time',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Timestamp'),
          'description' => ts('Log entry date'),
          'where' => 'civicrm_job_log.run_time',
          'table_name' => 'civicrm_job_log',
          'entity' => 'JobLog',
          'bao' => 'CRM_Core_DAO_JobLog',
          'localizable' => 0,
        ],
        'job_id' => [
          'name' => 'job_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Job ID'),
          'description' => ts('Pointer to job id - not a FK though, just for logging purposes'),
          'where' => 'civicrm_job_log.job_id',
          'table_name' => 'civicrm_job_log',
          'entity' => 'JobLog',
          'bao' => 'CRM_Core_DAO_JobLog',
          'localizable' => 0,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Job Name'),
          'description' => ts('Title of the job'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_job_log.name',
          'table_name' => 'civicrm_job_log',
          'entity' => 'JobLog',
          'bao' => 'CRM_Core_DAO_JobLog',
          'localizable' => 0,
        ],
        'command' => [
          'name' => 'command',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Command'),
          'description' => ts('Full path to file containing job script'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_job_log.command',
          'table_name' => 'civicrm_job_log',
          'entity' => 'JobLog',
          'bao' => 'CRM_Core_DAO_JobLog',
          'localizable' => 0,
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Description'),
          'description' => ts('Title line of log entry'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_job_log.description',
          'table_name' => 'civicrm_job_log',
          'entity' => 'JobLog',
          'bao' => 'CRM_Core_DAO_JobLog',
          'localizable' => 0,
        ],
        'data' => [
          'name' => 'data',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Extended Data'),
          'description' => ts('Potential extended data for specific job run (e.g. tracebacks).'),
          'where' => 'civicrm_job_log.data',
          'table_name' => 'civicrm_job_log',
          'entity' => 'JobLog',
          'bao' => 'CRM_Core_DAO_JobLog',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'job_log', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'job_log', $prefix, []);
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
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
