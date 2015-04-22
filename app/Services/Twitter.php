<?php namespace App\Services;

use Thujohn\Twitter\Facades\Twitter as TwitterFacade;

class Twitter {
  public static function tweets($count = 20) {
    return TwitterFacade::getUserTimeline([
      'screen_name' => env('TWITTER_HANDLE'),
      'count' => $count
    ]);
  }

  public static function tweet($tweet_id) {
    return TwitterFacade::getTweet($tweet_id);
  }
}