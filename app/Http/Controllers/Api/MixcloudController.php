<?php namespace App\Http\Controllers\Api;

use App\Services\Mixcloud;

class MixcloudController extends ApiController {
  public $route_namespace = "\Api\Mixcloud";

  public function index() {
    return $this->endpointRoot();
  }

  public function users() {
    //
  }

  public function user($username) {
    if($username == "self")
      $username = env('MIXCLOUD_HANDLE');

    return $this->respond( Mixcloud::user($username) );
  }

  public function cloudcasts($username) {
    if($username == "self")
      $username = env('MIXCLOUD_HANDLE');

    return $this->respond( Mixcloud::cloudcasts($username) );
  }

  public function cloudcast($username, $cloudcast_slug) {
    if($username == "self")
      $username = env('MIXCLOUD_HANDLE');

    return $this->respond( Mixcloud::cloudcast($username, $cloudcast_slug) );
  }
}