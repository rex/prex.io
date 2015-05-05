<?php namespace App\Http\Controllers\Api;

use App\Services\Twitter;

class TwitterController extends ApiController {
  public $route_namespace = "\Api\Twitter";

  public function __construct() {
    $this->twitter = new Twitter();
  }

  public function index() {
    return $this->endpointRoot();
  }

  public function tweets() {
    return $this->respond( $this->twitter->tweets() );
  }

  public function tweet($tweet_id) {
    return $this->respond( $this->twitter->tweet($tweet_id) );
  }

  public function latestTweet() {
    return $this->respond( $this->twitter->latestTweet() );
  }

  public function user($handle = null) {
    return $this->respond( $this->twitter->user($handle) );
  }
}