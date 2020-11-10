<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'ec2-54-237-155-151.compute-1.amazonaws.com';
$CFG->dbname    = 'dbtm6a5097tfmi';
$CFG->dbuser    = 'wtduqtinulffcq';
$CFG->dbpass    = '0d3e7206789659b8a5e03f4ee0be8a0cf5e721846b4d08742d1075c561ed6145';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '5432',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://moodle-igen.herokuapp.com/';
$CFG->dataroot  = '/tmp';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
