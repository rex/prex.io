<?php namespace App\Helpers;

class LoadedRoutes {
  public static function global_routes() {
    dd( \Route::getRoutes() );
  }

  public static function namespaceRoutes($namespace) {
    $global_routes = \Route::getRoutes()->getRoutes();

    // dd( $global_routes );
    return self::toArray( self::getNamespace($global_routes, $namespace) );
  }

  public static final function listing($params = []) {
    if(!isset($params['routes']))
      throw new Exception("No routes provided to LoadedRoutes::listing()");

    $namespace = isset($params['namespace']) ? $params['namespace'] : null;
    $as_array = isset($params['as_array']);
    $routes = ($namespace) ? self::getNamespace($params['routes'], $namespace) : $params['routes'];

    if($as_array)
      return self::toArray($routes);
    else
      return $routes;
  }

  public static final function getNamespace($routes, $namespace) {
    $routes_in_namespace = [];

    foreach($routes as $route) {
      if(strpos($route->getActionName(), $namespace)) {
        $routes_in_namespace[] = $route;
      }
    }

    return $routes_in_namespace;
  }

  public static final function toArray($routes) {
    $parsed_routes = [];

    foreach($routes as $route) {
      $parsed_routes[] = [
        'method' => $route->getMethods()[0],
        'path' => $route->getPath(),
        'action' => $route->getActionName()
      ];
    }

    return $parsed_routes;
  }

  public static final function display($routes) {
    echo "<table><tr><td>Method</td><td>Route</td><td>Route Action</td></tr>";

    foreach($routes as $route) {
      echo "<tr><td>{$route->getMethods()[0]}</td><td>{$route->getPath()}</td><td>{$route->getActionName()}</td></tr>";
    }
    echo "</table>";
  }
}