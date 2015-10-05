<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => 'msjg7394nsdhkgk58wnalpfis',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		// 'admin' => '9c5581656935f524efc87177fefa5e0b4b61757e57f7fcb0573a8ab698bfdea0',
	),

);
