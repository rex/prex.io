<?php namespace App\Http\Controllers\Api;

use App\Services\Instagram;

class InstagramController extends ApiController {
  public $route_namespace = "\Api\Instagram";

  public function __construct() {
    $this->instagram = new Instagram();
  }

  public function index() {
    return $this->endpointRoot();
  }

  public function users() {
    //
  }

  public function user($user_id) {
    return $this->respond( $this->instagram->user($user_id) );
  }

  public function posts($user_id) {
    return $this->respond( $this->instagram->posts($user_id) );
  }

  public function post($post_id) {
    return $this->respond( $this->instagram->post($post_id) );
  }

  public function latestPost($user_id) {
    return $this->respond( $this->instagram->latestPost($user_id) );
  }
}