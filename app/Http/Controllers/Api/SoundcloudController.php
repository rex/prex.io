<?php namespace App\Http\Controllers\Api;

use App\Services\Soundcloud;

class SoundcloudController extends ApiController {
  public $route_namespace = "\Api\Soundcloud";

  public function index() {
    return $this->endpointRoot();
  }

  public function user($user_id) {
    if($user_id == "self")
      $user_id = env('SOUNDCLOUD_USER_ID');

    return $this->respond( Soundcloud::user($user_id) );
  }

  public function tracks($user_id) {
    if($user_id == "self")
      $user_id = env('SOUNDCLOUD_USER_ID');

    return $this->respond( Soundcloud::tracks($user_id) );
  }

  public function track($track_id) {
    return $this->respond( Soundcloud::track($track_id) );
  }

  public function playlists($user_id) {
    if($user_id == "self")
      $user_id = env('SOUNDCLOUD_USER_ID');

    return $this->respond( Soundcloud::playlists($user_id) );
  }

  public function playlist($playlist_id) {
    return $this->respond( Soundcloud::playlist($playlist_id) );
  }
}