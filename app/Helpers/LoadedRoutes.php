<?php namespace App\Helpers;

class LoadedRoutes {
  public static function namespaceRoutes($namespace) {
    $global_routes = \Route::getRoutes()->getRoutes();

    return self::toArray( self::getNamespace($global_routes, $namespace) );
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
}