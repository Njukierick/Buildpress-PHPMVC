<?php 

/*set your website title*/

define('WEBSITE_TITLE', "BuildPress");

/*set database variables*/

define('DB_TYPE','mysql');
define('DB_NAME','buildpress_db');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost:8080');

/*protocal type http or https*/
define('PROTOCAL','http');

/*root and asset paths*/

$path = str_replace("\\", "/",PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ASSETS','http://localhost/buildpress/public/assets' );
defined('BASE_URL_ASSETS') or define('BASE_URL_ASSETS', ASSETS. 'public/assets/');

/*set to true to allow error reporting
set to false when you upload online to stop error reporting*/

define('DEBUG',true);

if(DEBUG)
{
	ini_set("display_errors",1);
}else{
	ini_set("display_errors",0);
}