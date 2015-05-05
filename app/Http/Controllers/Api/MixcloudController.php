<?php namespace App\Http\Controllers\Api;

use App\Services\Mixcloud;

class MixcloudController extends ApiController {
  public $route_namespace = "\Api\Mixcloud";

  public function __construct() {
    $this->mixcloud = new Mixcloud();
  }

  public function index() {
    return $this->endpointRoot();
  }

  public function users() {
    //
  }

  public function user($username) {
    return $this->respond( $this->mixcloud->user($username) );
  }

  public function cloudcasts($username) {
    return $this->respond( $this->mixcloud->cloudcasts($username) );
  }

  public function cloudcast($username, $cloudcast_slug) {
    return $this->respond( $this->mixcloud->cloudcast($username, $cloudcast_slug) );
  }
}