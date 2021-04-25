<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'JOBPORTAL');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once("include/config.php");
require_once("include/function.php");
require_once("include/session.php");
require_once("include/accounts.php");
require_once("include/autonumbers.php");  
require_once("include/companies.php");  
require_once("include/job.php");  
require_once("include/employees.php");  
require_once("include/categories.php");  
require_once("include/applicant.php");  
require_once("include/jobregistration.php");  
  

require_once("include/database.php");
?>
