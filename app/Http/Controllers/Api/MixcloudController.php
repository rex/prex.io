<?php namespace App\Http\Controllers\Api;

use App\Services\Mixcloud;

class MixcloudController extends ApiController {
  public $route_namespace = "\Api\Mixcloud";

  public function index() {
    return $this->endpointRoot();
  }
}