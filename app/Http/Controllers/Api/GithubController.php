<?php namespace App\Http\Controllers\Api;

use App\Services\Github;

class GithubController extends ApiController {
  public $route_namespace = "\Api\Github";

  public function index() {
    return $this->endpointRoot();
  }
}