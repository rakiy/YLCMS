<?php
/**
* index(入口文件)
* @package      YLCMS
*
* @author 		Rakiy[Xux851@Gmail.com]
*/
header("Content-type: text/html;charset=utf-8");
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(E_ALL);
define('APP_NAME','YLCMS');
define('YLCMS',true);
define('APP_PATH','./');
define('APP_LANG',false);
define('APP_DEBUG',false);
define('THINK_PATH','Core/');
define('UPLOAD_PATH','./Uploads/');
/*开启GZIP*/
//define('GZIP_ENABLE',function_exists('ob_gzhandler'));
//ob_start(GZIP_ENABLE?'ob_gzhandler':null);
/*加载THINKPHP*/
require(THINK_PATH.'Core.php');
?>
