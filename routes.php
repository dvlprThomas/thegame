<?php

	function call($controller, $action)
	{
		require_once('controllers/' . $controller . '_controller.php');

		// Create a new instance of the needed controller
		switch($controller)
		{
			case 'page':
				$controller = new PageController();
			break;
		}

		// Call the action
		$controller->{ $action }();
	}

	// Just a list over the controllers we have and their actions
	// we consider those "allowed" values
	$controllers = array(
		'page' => ['home', 'error']	
	);

	// Check that the requested controller and action are both allowed
	// if someone tries to access something else they will be restricted to the error action of the pages controller
	if(array_key_exists($controller, $controllers))
	{
		if(in_array($action, $controllers[$controller]))
		{
			call($controller, $action);
		}
		else
		{
			call('page', 'error');
		}
	}
	else
	{
		call('page', 'error');
	}
	
?>