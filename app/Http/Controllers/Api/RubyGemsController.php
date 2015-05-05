<?php namespace App\Http\Controllers\Api;

use App\Services\RubyGems;

class RubyGemsController extends ApiController {
  public $route_namespace = "\Api\RubyGems";

  public function __construct() {
    $this->rubygems = new RubyGems();
  }

  public function index() {
    return $this->endpointRoot();
  }

  public function gems() {
    return $this->respond( $this->rubygems->gems() );
  }

  public function gem($gem_name) {
    return $this->respond( $this->rubygems->gem($gem_name) );
  }
}