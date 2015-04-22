<?php namespace App\Http\Controllers\Api;

use App\Services\Soundcloud;

class SoundcloudController extends ApiController {
  public $route_namespace = "\Api\Soundcloud";

  public function index() {
    return $this->endpointRoot();
  }
}