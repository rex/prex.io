<?php namespace App\Http\Controllers\Api;

use App\Services\Twitter;

class TwitterController extends ApiController {
  public $route_namespace = "\Api\Twitter";

  public function index() {
    return $this->endpointRoot();
  }

  public function tweets() {
    return $this->respond( Twitter::tweets() );
  }

  public function tweet($tweet_id) {
    return $this->respond( Twitter::tweet($tweet_id) );
  }

  public function latestTweet() {
    return $this->respond( Twitter::latestTweet() );
  }

  public function user($handle = "self") {
    return $this->respond( Twitter::user($handle) );
  }
}