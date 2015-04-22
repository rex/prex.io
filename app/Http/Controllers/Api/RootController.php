<?php namespace App\Http\Controllers\Api;

class RootController extends ApiController {
  public $route_namespace = "\Api";

  public function index() {
    return $this->endpointRoot();
  }
}