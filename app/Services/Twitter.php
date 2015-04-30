<?php namespace App\Services;

use Thujohn\Twitter\Facades\Twitter as TwitterFacade;

class Twitter {
  public static function latestTweet() {
    $tweet = self::tweets(1);

    if(count($tweet))
      return $tweet[0];
    else
      return $tweet;
  }

  public static function tweets($count = 20, $handle = null) {
    if($handle == null || $handle == "self")
      $handle = env('TWITTER_HANDLE');

    return TwitterFacade::getUserTimeline([
      'screen_name' => $handle,
      'count' => $count
    ]);
  }

  public static function tweet($tweet_id) {
    return TwitterFacade::getTweet($tweet_id);
  }

  public static function users() {
    //
  }

  public static function user($handle = null) {
    if($handle == null || $handle == "self")
      $handle = env('TWITTER_HANDLE');

    $user = TwitterFacade::getUsers([
      'screen_name' => $handle
    ]);

    $user->banner = TwitterFacade::getUserBanner([
      'screen_name' => $handle
    ]);

    return $user;
  }
}