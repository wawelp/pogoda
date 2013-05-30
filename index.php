<?php

spl_autoload_register(function ($class) {
	
	//try to find the class in the app structure
	try{
		if(strpos($class, '_') === true){
			$class = str_replace('_', '/', $class);
			
			
			include_once 'app/modules/' . strtolower($class) . '.php';	
		}
			
		//fallback to the default library folder
		else{ 
			include_once 'lib/' . strtolower($class) . '.php';
		}
	}
	catch (Exception $e){
		die('Serwis jest aktualnie niedostęny.');
	}
});

$router = new Router();
$router->run();

exit;

?>