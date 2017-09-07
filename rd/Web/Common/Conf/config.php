<?php
return array(
	//'配置项'=>'配置值'
	//前后应用配置
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'rd',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'rd_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

	//是否开启调试模式
	'SHOW_PAGE_TRACE' =>true,				// 显示页面Trace信息
	
	'LOAD_EXT_FILE'			=>'Common',				//默认加载自己的函数库
	
	//邮件服务
	 'MAIL_HOST' =>'smtp.163.com',
	 'MAIL_SMTPAUTH' =>TRUE, 						//启用smtp认证
	 'MAIL_CHARSET' =>'utf-8',						//设置字符集
	 'MAIL_ISHTML' =>TRUE,   		 				//是否HTML格式邮件
	
	'DEFAULT_FILTER'        => '', // 默认参数过滤方法 用于I函数...

	//模块绑定
	'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
	'DEFAULT_MODULE'       =>    'Home',
	
	'SESSION_ADMIN'=>'useradmin',	//设置当前网站后台登录信息的SESSION下标
	'SESSION_USER'=>'username',	//设置当前网站前台登录信息的SESSION下标
);