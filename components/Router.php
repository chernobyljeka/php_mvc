<?php 

class Router
{
	private $routes;

	public function __construct()
	{
            $routesPath = ROOT . '/config/routes.php';
            $this->routes = include($routesPath);
	}

	// Get request string
	private function GetURI()
	{
		if (!empty($_SERVER['REQUEST_URI']))
		{
                    return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
            // Get request string
            $uri = $this->GetURI();
            // Find request string in file routes.php
            foreach ($this->routes as $uriPattern => $path) 
            {
                if (preg_match("~$uriPattern~", $uri))
		{                      
                    $segments = explode('/', $path);
                    $controllerName = array_shift($segments) . 'Controller';
                    $controllerName = ucfirst($controllerName);
                    $actionName = 'action' . ucfirst(array_shift($segments));                    
                    $parameters = $segments;
                    // Include controller file
                    $controllerFile = ROOT . '/controllers/' . 
                    $controllerName . '.php';
                    if (file_exists($controllerFile))
                    {
			include_once($controllerFile);
                    }
                    // Create object and call metod
                    $controllerObject = new $controllerName;
                    $result = call_user_func_array(array($controllerObject,
                        $actionName), $parameters);
                    
                    if ($result != null)
                    {
                        break;
                    }
		}
            }
	}
}