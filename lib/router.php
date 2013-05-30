<?php

/**
 * Simple router class - handles up to 4 params: 
 * - module
 * - controller
 * - action
 * - parameter
 * 
 * @author Paweł W.
 */
class Router{
	
	public function run(){
		
		//default module, controller and action
		//to which we will fallback
		
		$route = array('module' => 'weather', 
							'controller' => 'default', 
							'action' => 'default');
		
		$params = explode('/', $_SERVER['REQUEST_URI']);
		
		$url1 = array('var1');
		$url2 = array('var1', 'var2', 'var3', 'var4', 'var5');
		
		foreach ($params as $param){
			
			
		}
		
		print_r($route1);
		print_r($route2);
		
		exit;
		
		if(count($url) > 0)
			$module = array_shift($url);

		if(count($url) > 0)
			$controller = array_shift($url);

		if(count($url) > 0)
			$action = array_shift($url);
			
		if(count($url) > 0)
			$params = $url;
			
		//url has to be at least two params long
		if(count($url) > 1){
			$module 	= array_shift($route);
			$controller	= array_shift($route);
			$action 	= array_shift($route);
		}
		
		
		
		
	}
	
}

?>