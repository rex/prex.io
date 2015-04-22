<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Helpers\LoadedRoutes;
use Request;
use App\Helpers\EndpointGenerator;

abstract class ApiController extends Controller {
  public final function respond($data = []) {
    return response()->json($data);
  }

  public final function metadata() {
    return [
      'base_url' => asset('/'),
      'your_ip_address' => Request::ip()
    ];
  }

  public final function subRoutes() {
    return LoadedRoutes::namespaceRoutes($this->route_namespace);
  }

  public final function endpointRoot() {
    return $this->respond([
      'message' => 'This a base endpoint for the prex.io data api. Try another endpoint to get the information you seek.',
      'endpoint_namespace' => $this->route_namespace,
      'namespace_endpoints' => $this->generateSubRouteUrls(),
      'endpoints' => EndpointGenerator::generate(),
      'metadata' => $this->metadata()
    ]);
  }

  private function generateSubRouteUrls() {
    return array_map(function($path) {
      return ($path == "/") ? asset("/") : asset("/$path");
    }, array_pluck( $this->subRoutes(), 'path' ) );
  }
}