<?php namespace App\Drivers;

interface DriverInterface {
  public function get($key) {}
  public function set($key, $value) {}
}