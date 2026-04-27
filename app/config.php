<?php
define('PATH', realpath('.'));
define('SUBFOLDER', false);
define('URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] );
define('STYLESHEETS_URL', '//' . $_SERVER['HTTP_HOST'] );
date_default_timezone_set('Asia/Karachi');

/* 
 ini_set("display_errors","1");
error_reporting(E_ERROR);  */  

error_reporting(0);
return [
  'db' => [
    'name'    =>  getenv('DB_NAME') ?: 'database_name' ,
    'host'    =>  getenv('DB_HOST') ?: 'localhost',
    'user'    =>  getenv('DB_USER') ?: 'database_user' ,
    'pass'    =>  getenv('DB_PASS') ?: 'database_pass' ,
    'charset' =>  'utf8mb4'
  ]
];

?>
