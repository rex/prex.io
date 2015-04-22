<?php namespace App\Http\Controllers\Api;

use App\Services\Lastfm;

class LastfmController extends ApiController {
  public $route_namespace = "\Api\Lastfm";

  public function index() {
    return $this->endpointRoot();
  }
}