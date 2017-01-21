<?php

	/**
	 * Database configuration
	 * @TODO: Mover para variáveis do sistema operacional
	 */
	$app['db.options'] = array(
    	'driver'   => 'pdo_mysql',
    	'charset'  => 'utf8',
    	'host'     => '127.0.0.1',
    	'dbname'   => 'linkable',
    	'user'     => 'root',
    	'password' => 'master',
	);