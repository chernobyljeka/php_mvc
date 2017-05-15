<?php 

// Front controller

// 1. Commmon settings

	// Display errors
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);

// 2. System settings

	define('ROOT', dirname(__FILE__));
        require_once(ROOT . '/components/Autoload.php');
	require_once(ROOT . '/components/Router.php');
        session_start();

// 3. Database connection
        require_once(ROOT . '/components/Db.php');
// 4. Route config

	$router = new Router();
	$router->run();

?>