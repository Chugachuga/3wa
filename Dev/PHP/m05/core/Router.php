<?php

class Router{

  private static $routes;
  private static $config;

  function __construct($config, $request){
    self::$routes = $config->get("*", "routes");
    $this->request = $request;
    self::$config = $config;
  }

  function dispatch()
  {
    $path = $this->request->getPath();

    foreach(self::$routes as $route)
    {
        if($route['path'] == $path)
        {
            $run = explode('@', $route['run']); // ["TestController","index"]
            break;
        }
    }

    if(isset($run))
    {
      $controllerName = $run[0];
      $actionName = $run[1];

      $controllerPath = "../src/Controller/" . $controllerName . ".php";

      if(!file_exists($controllerPath))
        throw new Exception("Le fichier ".$controllerPath." n'existe pas.");

      require_once $controllerPath;

      if(!class_exists($controllerName))
      {
        throw new Exception("La class ".$controllerName." n'existe pas dans le fichier ". $controllerPath);
      }

      $controller = new $controllerName();

      if(!method_exists($controllerName, $actionName))
      {
        throw new Exception("La méthode ".$actionName." n'existe pas dans le controller ".$controllerName);
      }
      $controller->$actionName();
    }
    else
    {
      throw new Exception("La route n'a pas été trouvée");
    }
  }
  static function route($name)
  {
    $r = self::$routes[$name];
    return self::$config->get('base', 'app').$r['path'];
  }
}
