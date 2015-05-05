<?php namespace App\Http\Controllers\Api;

use App\Services\Npm;

class NpmController extends ApiController {
  public $route_namespace = "\Api\Npm";

  public function __construct() {
    $this->npm = new Npm();
  }

  public function index() {
    return $this->endpointRoot();
  }

  public function modules() {
    return $this->respond( $this->npm->modules() );
  }

  public function module($module_name) {
    return $this->respond( $this->npm->module($module_name) );
  }
}