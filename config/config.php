<?php

/**
 * Created by PhpStorm.
 * User: ChungPD
 * Date: 8/15/18
 * Time: 14:09
 */

return [
	'API' => [
		'salt_key' => 'ec-2018',
		'jwt_key' => 'ec-2018-jwt',
		'template_response' => [
			'status' => false,
			'error_code' => 0,
			'error_message' => '',
			'data' => null
		],
		'error_code' => [
			100 => 'Bad request',
			101 => 'Invalid params',
			102 => 'System error',
			103 => 'Invalid',
			104 => 'Checksum failure',
			201 => 'Authentication failed',
			202 => 'Authentication expired',
			203 => 'Token failed',
			204 => 'Login failed',
			205 => 'User was blocked',
			206 => 'Bạn không có quyền truy cập chi nhánh',
			207 => 'DB Not Found',
			208 => 'Limit Schedule Support'
		]
	],

	'CONTACT_TYPE' => [
		'CONST' => [
			'WEB' => 1,
			'SYSTEM' => 2,
			'MOBILE_APP' => 3,
			'AI' => 4,
		],
		'LIST' => [
			1 => 'sys_web',
			2 => 'sys_business',
			3 => 'sys_app',
			4 => 'sys_ai'
		]
	],
];
