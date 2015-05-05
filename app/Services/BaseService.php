<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use GuzzleHttp\Event\BeforeEvent;
use GuzzleHttp\Event\CompleteEvent;
use GuzzleHttp\Message\Response;
use App\Drivers\Redis;
use Config;
use Log;

class BaseService {
  protected $response;
  protected $cache_namespace = "";
  protected $http_client_options = [];

  public function __construct() {
    $this->cache = new Redis();
  }

  protected function http() {
    $http = new Http($this->http_client_options);

    // If the application is in HTTP_DEBUG mode, load event listeners
    if(env('HTTP_DEBUG'))
      $this->loadHttpEventListeners($http);

    return $http;
  }

  protected function isCached($cache_key) {
    if ($this->cache->exists($this->cacheKey($cache_key))) {
      return true;
    } else {
      return false;
    }
  }

  protected function cachedObject($cache_key) {
    $cached_object = $this->cache->getObject($this->cacheKey($cache_key));
    if($cached_object) {
      $this->cached_objects[$cache_key] = $cached_object;
      return $cached_object;
    } else {
      return false;
    }
  }

  protected function cacheObject($cache_key, $object, $ttl = $this->cache_ttl) {
    $this->cache->storeObject($this->cacheKey($cache_key), $object, $ttl);
    return $object;
  }

  protected function fetchAndCache($endpoint, $params = []) {
    $response_key = $this->getParamValue($params, "response_key", null);
    $http_options = $this->getParamValue($params, "http_options", []);
    $transform_result = $this->getParamValue($params, "transform_result", function($val) { return $val; });
    $cache_ttl = $this->getParamValue($params, "cache_ttl", $this->cache_ttl);
    $cache_key = $this->getParamValue($params, "cache_key", $this->endpointToCacheKey($endpoint));
    $single_item_array = $this->getParamValue($params, "single_item_array", false);

    // dd($endpoint, $response_key, $http_options, $cache_ttl, $cache_key, $single_item_array);

    // If the application has HTTP_CACHE disabled, bypass cache lookup.
    // Otherwise, check the cache for the endpoint
    if(env('HTTP_CACHE')) {
      if($this->isCached($cache_key)) {
        // If the application has HTTP_CACHE_BUST enabled, bust the cache instead
        if(env('HTTP_CACHE_BUST')) {
          Log::debug("CACHE BUST: $cache_key");
          $this->cache->bust($cache_key);
        } else {
          Log::debug("CACHE HIT: $cache_key");
          return $this->cachedObject($cache_key);
        }
      } else {
        Log::debug("CACHE MISS: $cache_key");
      }
    }

    $external_response = $this->http()->get($endpoint, $http_options);

    if($response_key != null)
      $response = $external_response->json()[$response_key];
    else
      $response = $external_response->json();

    if(is_array($response))
      $result = array_map($transform_result, $response);
    else
      $result = $transform_result($response);

    if(is_array($result) && count($result) == 1 && $single_item_array)
      $result = $result[0];

    // If HTTP_CACHE is disabled, bypass response caching
    if(env('HTTP_CACHE'))
      return $this->cacheObject($cache_key, $result, $cache_ttl);
    else
      return $result;
  }

  protected function fetchJsonEndpoint($endpoint) {
    return $this->http()->get($endpoint)->json();
  }

  protected function endpointToCacheKey($endpoint) {
    return str_replace("/", ":", $endpoint);
  }

  private function cacheKey($cache_key) {
    return "{$this->cache_namespace}:$cache_key";
  }

  private function getParamValue($params, $key, $default) {
    if(array_key_exists($key, $params))
      return $params[$key];
    else
      return $default;
  }

  private function loadHttpEventListeners(\GuzzleHttp\Client $http_client) {
    $emitter = $http_client->getEmitter();

    $emitter->on('before', function(BeforeEvent $event) {
      Log::debug($event->getRequest());
    });
    $emitter->on('complete', function(CompleteEvent $event) {
      Log::debug($event->getResponse()->json());
    });
  }
}