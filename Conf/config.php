<?php
$database  = require(APP_PATH.'Conf/data.php');
$sysconfig = require(DATA_PATH.'sys.config.php');
$config = array(
	//系统配置
	'DEFAULT_THEME'		=> 'Default',			//默认模板
	'DEFAULT_CHARSET' => 'utf-8',				//默认编码
	'APP_GROUP_LIST' => 'Home,Admin',			//模块分类
	'DEFAULT_GROUP' =>'Home',					//默认模块
	'TMPL_FILE_DEPR' => '_',					//模板分隔
	'URL_MODEL'          => '0', 				//URL模式
	'DEFAULT_LANG'   => 'zh-cn',				//语言包
	'LANG_SWITCH_ON' => true,
	'TAGLIB_LOAD' => true,						//标签开启
	'TAGLIB_PRE_LOAD' => 'Y',					//标签前缀
	'DB_FIELDS_CACHE' => false,					
	'DB_FIELDTYPE_CHECK' => true,
	'URL_ROUTER_ON' => true,
	'COOKIE_PREFIX'=>'YY_',						//COOKIE前缀
	'COOKIE_EXPIRE'=>'',
	'VAR_PAGE' => 'p',						
	'LAYOUT_HOME_ON'=>1,						//开启 layout
	'Pro_ver'=>'YLCMS V1.0',
	'Pro_update'=>'1369898877',
	//'TMPL_ACTION_ERROR' => APP_PATH.'Tpl/Public/success.html',
	//'TMPL_ACTION_SUCCESS' =>  APP_PATH.'Tpl/Public/success.html',
	//'TMPL_EXCEPTION_FILE' => APP_PATH.'Tpl/Public/exception.html'
);
return array_merge($database, $config ,$sysconfig);
?>