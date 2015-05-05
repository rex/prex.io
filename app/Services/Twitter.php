<?php namespace App\Services;

use Thujohn\Twitter\Facades\Twitter as TwitterFacade;
use Config;
use Log;
use Carbon;

class Twitter extends BaseService {
  public function __construct() {
    parent::__construct();
    $this->cache_namespace = Config::get('services.twitter.cache_namespace');
    $this->cache_ttl = Config::get('services.twitter.cache_ttl');
  }

  public function latestTweet($handle) {
    $handle = $this->getHandle($handle);
    $cache_key = "tweets:$handle:latest";

    if($this->isCached($cache_key))
      return $this->cachedObject($cache_key);

    $tweet = TwitterFacade::getUserTimeline([
      'screen_name' => $handle,
      'count' => 1
    ]);

    if(count($tweet))
      $tweet = $tweet[0];

    return $this->cacheObject($cache_key, $tweet, Carbon::now()->addDays(7));
  }

  public function tweets($count = 20, $handle) {
    $handle = $this->getHandle($handle);
    $cache_key = "tweets:$handle";

    if($this->isCached($cache_key))
      return $this->cachedObject($cache_key);

    $tweets = TwitterFacade::getUserTimeline([
      'screen_name' => $handle,
      'count' => $count
    ]);

    return $this->cacheObject($cache_key, $tweets, Carbon::now()->addHours(6));
  }

  public function tweet($tweet_id) {
    $cache_key = "tweets:$tweet_id";

    if($this->isCached($cache_key))
      return $this->cachedObject($cache_key);

    $tweet = TwitterFacade::getTweet($tweet_id);

    return $this->cacheObject($cache_key, $tweet, Carbon::now()->addDays(7));
  }

  public function users() {
    //
  }

  public function user($handle) {
    $handle = $this->getHandle($handle);
    $cache_key = "users:$handle";

    if($this->isCached($cache_key))
      return $this->cachedObject($cache_key);

    $user = TwitterFacade::getUsers([
      'screen_name' => $handle
    ]);

    // Store multiple profile image sizes on the object by manipulating URL
    $avatar_small = $user->profile_image_url;
    $user->profile_image_url_original = str_replace("_normal", "", $avatar_small);
    $user->profile_image_url_bigger = str_replace("_normal", "_bigger", $avatar_small);
    $user->profile_image_url_mini = str_replace("_normal", "_mini", $avatar_small);

    $user->banner = TwitterFacade::getUserBanner([
      'screen_name' => $handle
    ]);

    return $this->cacheObject($cache_key, $user, Carbon::now()->addDays(7));
  }

  private function getHandle($handle) {
    if($handle == null || $handle == "self")
      return Config::get('services.twitter.screen_name');
    else
      return $handle;
  }
}