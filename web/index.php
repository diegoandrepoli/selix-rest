<?php

	/**
	 * Vendor resources
	 */
	require_once __DIR__ . '/../vendor/autoload.php';
	
	/**
	 * New application
	 */
	$app = new Silex\Application();
	
	/**
	 * Set database configuration
	 */
	require_once __DIR__ . '/../config/database.php';	

	/**
	 * Application resources
	 */
	require __DIR__ . '/../src/App.php';
	