<?php namespace App\Http\Controllers\Api;

use App\Services\Npm;

class NpmController extends ApiController {
  public $route_namespace = "\Api\Npm";

  public function index() {
    return $this->endpointRoot();
  }

  public function modules() {
    return $this->respond( Npm::modules() );
  }

  public function module($module_name) {
    return $this->respond( Npm::module($module_name) );
  }
}