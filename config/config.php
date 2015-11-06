<?php

define('APP_BASE_PATH', safe_dirname());
define('APP_FUNCTIONS_PATH', APP_BASE_PATH . '/functions');
define('BASE_URL', 'http://simpleqa.dev/');
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'simpleqa');

function safe_dirname()
{
   $dirname = dirname(dirname(__FILE__));
   return $dirname == '/' ? '' : $dirname;
}

 ?>