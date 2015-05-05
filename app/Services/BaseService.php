<?php namespace App\Services;

use App\Drivers\Redis;
use Config;
use Log;

class BaseService {
  protected $response;
  protected $cache_namespace = "";
  protected $cached_objects = [];

  public function __construct() {
    $this->cache = new Redis();
  }

  protected function isCached($cache_key) {
    if(array_key_exists($cache_key, $this->cached_objects)) {
      return true;
    } else if ($this->cache->exists($this->cacheKey($cache_key))) {
      return true;
    } else {
      return false;
    }
  }

  protected function cachedObject($cache_key) {
    if(array_key_exists($cache_key, $this->cached_objects)) {
      return $this->cached_objects[$cache_key];
    } else {
      $cached_object = $this->cache->getObject($this->cacheKey($cache_key));
      if($cached_object) {
        $this->cached_objects[$cache_key] = $cached_object;
        return $cached_object;
      } else {
        return false;
      }
    }
  }

  protected function cacheObject($cache_key, $object, $ttl = $this->cache_ttl) {
    $this->cached_objects[$cache_key] = $object;
    $this->cache->storeObject($this->cacheKey($cache_key), $object, $ttl);
    return $object;
  }

  protected function fetchAndCache($endpoint, $cache_key, $transform_result = null, $cache_ttl = $this->cache_ttl) {
    //
  }

  /**
   * @param $endpoint String The URI for the desired endpoint
   * @param $response_key String If a nested response, return this key from the response array
   */
  public static function fetchJson($endpoint, $response_key = null, $transform_result = null) {
    $response = self::client()->get($endpoint);

    if($transform_result == null)
      $transform_result = function($val) { return $val; };

    if($response_key)
      $ret = $response->json()[$response_key];
    else
      $ret = $response->json();

    if(is_array($ret))
      return array_map($transform_result, $ret);
    else
      return $transform_result($ret);
  }

  protected function loadFromCacheIfPossible($cache_key) {
    return self::retrieveCachedObject(self::buildCacheKey($cache_key));
  }

  protected function transformResponse() {
    return $this->response;
  }

  private function cacheKey($cache_key) {
    return "{$this->cache_namespace}:$cache_key";
  }
}