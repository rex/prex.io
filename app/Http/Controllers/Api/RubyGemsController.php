<?php namespace App\Http\Controllers\Api;

use App\Services\RubyGems;

class RubyGemsController extends ApiController {
  public $route_namespace = "\Api\RubyGems";

  public function index() {
    return $this->endpointRoot();
  }

  public function gems() {
    return $this->respond( RubyGems::gems() );
  }

  public function gem($gem_name) {
    return $this->respond( RubyGems::gem($gem_name) );
  }
}