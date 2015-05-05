<?php namespace App\Services\Traits;

use Config;
use Cache;
use Illuminate\Support\Facades\Redis;
use Log;

trait CachedService {
  protected static function retrieveCachedObject($cache_key, $object_type = Config::get('cache.default_type')) {
    Log::info("retrieveCachedObject - $cache_key [$object_type]");

    if($cache_key == null || $object_type == null)
      throw new Exception('Error in retrieveCachedObject: $cache_key and $object_type required to retrieve objects from cache!');

    switch($object_type) {
      case "hash":
        return self::getHash($cache_key);
        break;
      case "set":
        return self::getSet($cache_key);
        break;
      case "list":
        return self::getList($cache_key);
        break;
      case "single":
        return self::getSingle($cache_key);
        break;
      default:
        throw new Exception("Error in retrieveCachedObject: Invalid cached object type specified: $object_type");
    }
  }

  protected static function storeCachedObject($cache_key, $object, $object_type = Config::get('cache.default_type')) {
    Log::info("storeCachedObject - $cache_key [$object_type]");
    Log::debug($object);

    if($cache_key == null || $object == null || $object_type == null)
      throw new Exception('Error in storeCachedObject: $cache_key, $object, and $object_type required to store objects in cache!');

    switch($object_type) {
      case "hash":
        return self::storeHash($cache_key, $object);
        break;
      case "set":
        return self::storeSet($cache_key, $object);
        break;
      case "list":
        return self::storeList($cache_key, $object);
        break;
      case "single":
        return self::storeSingle($cache_key, $object);
        break;
      default:
        throw new Exception("Error in storeCachedObject: Invalid cached object type specified: $object_type");
    }
  }

  protected static function getHash($cache_key) {
    $client = self::client();
    if($client->exists($cache_key)) {
      $item = $client->get($cache_key);
      if($item)
        return json_decode($item);
      else
        return false;
    } else {
      return false;
    }
  }

  protected static function getList($cache_key) {
    return false;
  }

  protected static function getSet($cache_key) {
    return false;
  }

  protected static function getSingle($cache_key) {
    $client = self::client();
    if($client->exists($cache_key))
      return $client->get($cache_key);
    else
      return false;
  }

  protected static function storeHash($cache_key, $object) {
    Log::info("storeHash - $cache_key");

    return self::client()->set($cache_key, json_encode($object));
  }

  protected static function storeList($cache_key, $object) {
    return false;
  }

  protected static function storeSet($cache_key, $object) {
    return false;
  }

  protected static function storeSingle($cache_key, $object) {
    return false;
  }

  private static function client() {
    return Redis::connection();
  }
}