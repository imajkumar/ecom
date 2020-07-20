<?php 
//$base = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
//$base .= '://'.$_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

$base="http://localhost/ecom/";
define('BASE_PATH', $base.'/');
define('BASE_URL', $base);
define('URL_HOME', BASE_URL.'home');
define('UPLOADS', BASE_URL.'uploads/');

//Front Assest Path
define('FRONT', BASE_URL.'local/public/themes/default/assets/');

define('BACKEND', BASE_URL.'assets/');

define('WEB_TITLE', 'Bartanwaale.com');

