<?php
/**
 * 前台配置文件
 * 所有除开系统级别的前台配置
 */
return array(

	/* 模板相关配置 */
	'TMPL_PARSE_STRING' => array(
		'__STATIC__' => __ROOT__ . '/Public',
		'__ADDONS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/Addons',
		'__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images',
		'__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css',
		'__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js',
	),

	/* SESSION 和 COOKIE 配置 */
	'SESSION_PREFIX' => 'onethink_home', //session前缀
	'COOKIE_PREFIX'  => 'onethink_home_', // Cookie前缀 避免冲突
);
