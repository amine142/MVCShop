<?php
ob_start();
	
//set timezone
date_default_timezone_set('Europe/Paris');

//site address
define('DIR','');
define('DOCROOT', dirname(__FILE__));


//set prefix for sessions
define('SESSION_PREFIX','smvc_');

require_once("core/password_compatibility_library.php");
require_once("config/db.php");

function autoloadsystem($class) {

   $filename = DOCROOT . "/core/" . strtolower($class) . ".php";
   if(file_exists($filename)){
      require $filename;
   }

  $filename = DOCROOT . "/helpers/" . strtolower($class) . ".php";
   if(file_exists($filename)){
      require $filename;
   } 
 
}
spl_autoload_register("autoloadsystem");

set_exception_handler('logger::exception_handler');
set_error_handler('logger::error_handler');

$app = new Application();
$app->setController('welcome');
$app->setTemplate('default');
$app->init();

