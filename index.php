<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	require_once("connection.php");

	if(isset($_GET['controller']) && isset($_GET['action']))
	{
		$controller = $_GET['controller'];
		$action		= $_GET['action'];
	}
	else
	{
		$controller = 'page';
		$action 	= 'home';
	}

	require_once("views/layout.php");

	echo $controller . $action;
?>