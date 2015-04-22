<?php namespace App\Http\Controllers\Api;

use App\Services\Instagram;

class InstagramController extends ApiController {
  public $route_namespace = "\Api\Instagram";

  public function index() {
    return $this->endpointRoot();
  }

  public function posts() {
    return Instagram::likes();
  }
}