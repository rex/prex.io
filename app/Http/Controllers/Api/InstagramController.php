<?php namespace App\Http\Controllers\Api;

use App\Services\Instagram;

class InstagramController extends ApiController {
  public $route_namespace = "\Api\Instagram";

  public function index() {
    return $this->endpointRoot();
  }

  public function users() {
    //
  }

  public function user($user_id) {
    return $this->respond( Instagram::user($user_id) );
  }

  public function posts($user_id) {
    return $this->respond( Instagram::posts($user_id) );
  }

  public function post($post_id) {
    return $this->respond( Instagram::post($post_id) );
  }
}