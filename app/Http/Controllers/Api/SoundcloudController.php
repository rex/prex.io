<?php namespace App\Http\Controllers\Api;

use App\Services\Soundcloud;

class SoundcloudController extends ApiController {
  public $route_namespace = "\Api\Soundcloud";

  public function __construct() {
    $this->soundcloud = new Soundcloud();
  }

  public function index() {
    return $this->endpointRoot();
  }

  public function card() {
    return $this->respond( $this->soundcloud->card() );
  }

  public function user($user_id) {
    return $this->respond( $this->soundcloud->user($user_id) );
  }

  public function tracks($user_id) {
    return $this->respond( $this->soundcloud->tracks($user_id) );
  }

  public function track($track_id) {
    return $this->respond( $this->soundcloud->track($track_id) );
  }

  public function playlists($user_id) {
    return $this->respond( $this->soundcloud->playlists($user_id) );
  }

  public function playlist($playlist_id) {
    return $this->respond( $this->soundcloud->playlist($playlist_id) );
  }
}