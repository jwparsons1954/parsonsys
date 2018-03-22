<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','/var/www/yii');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Arc-Dads Database',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
		'application.modules.user.components.*',	'application.modules.user.models.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
'user' => array(
'debug' => false,
'userTable' => 'user',
'translationTable' => 'translation',
),
'usergroup' => array(
'usergroupTable' => 'usergroup',
'usergroupMessageTable' => 'user_group_message',
),
'membership' => array(
'membershipTable' => 'membership',
'paymentTable' => 'payment',
),
'friendship' => array(
'friendshipTable' => 'friendship',
),
'profile' => array(
'privacySettingTable' => 'privacysetting',
'profileTable' => 'profile',
'profileCommentTable' => 'profile_comment',
'profileVisitTable' => 'profile_visit',
),
'role' => array(
'roleTable' => 'role',
'userRoleTable' => 'user_role',
'actionTable' => 'action',
'permissionTable' => 'permission',
),
'message' => array(
'messageTable' => 'message',
),		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'password',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1','66.87.97.231'),
		),
		'registration' => array(),
			'avatar' => array(),
			'role' => array(),
			'messages' => array(),
			'usergroup' => array(),
			'membership' => array(),
			'profile' => array(),
			'friendship' => array(),
			'user' => array(
//				'debug' => true,
			)		
	),

	// application components
	'components'=>array(
		'user'=>array(
		'class' => 'application.modules.user.components.YumWebUser',
		'allowAutoLogin'=>true,
		'loginUrl' => array('//user/user/login'),
		),
			'cache'=>array(
		'class'=>'system.caching.CFileCache',
       ),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				'gii'=>'gii',
				'gii/<controller:\w+>'=>'gii/<controller>',
				'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
			),
		),
/*		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=dads',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'dl07988509tx',
			'charset' => 'utf8',
			'tablePrefix' => '', // <-- important!
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'systemsales55@gmail.com',
	),
);