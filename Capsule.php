<?php
	require 'vendor/autoload.php';

	use Illuminate\Database\Capsule\Manager as Capsule;

	$capsule = new Capsule();
	$capsule->addConnection([
		'driver'	=> 'mysql',
		'host'		=> '127.0.0.1',
		'database'	=> 'key_identification',
		'username'	=> 'root',
		'password'	=> 'bi4nc426',
		'charset'	=> 'utf8',
		'collation'	=> 'utf8_general_ci'
	]);

	$capsule->setAsGlobal();
	$capsule->bootEloquent();

	date_default_timezone_set('UTC');
