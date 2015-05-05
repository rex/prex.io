<?php namespace App\Drivers;

use Illuminate\Support\Facades\Redis as RedisDriver;

class Redis {
  public function __construct() {
    $this->client = RedisDriver::connection();
  }

  public function exists($cache_key) {
    return $this->client->exists($cache_key);
  }

  public function getObject($cache_key) {
    $object = $this->client->get($cache_key);
    return json_decode($object);
  }

  public function storeObject($cache_key, $object) {
    return $this->client->set($cache_key, json_encode($object));
  }
}