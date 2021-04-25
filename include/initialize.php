<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'JOBPORTAL');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
include_once(LIB_PATH.DS."config.php");
include_once(LIB_PATH.DS."function.php");
include_once(LIB_PATH.DS."session.php");
include_once(LIB_PATH.DS."accounts.php");
include_once(LIB_PATH.DS."autonumbers.php");  
include_once(LIB_PATH.DS."companies.php");  
include_once(LIB_PATH.DS."job.php");  
include_once(LIB_PATH.DS."employees.php");  
include_once(LIB_PATH.DS."categories.php");  
include_once(LIB_PATH.DS."applicant.php");  
include_once(LIB_PATH.DS."jobregistration.php");  
  

include_once(LIB_PATH.DS."database.php");
?>
