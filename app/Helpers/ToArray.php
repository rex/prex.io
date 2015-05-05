<?php namespace App\Helpers;

class ToArray {
  public static function parseRecursive($object) {
    return json_decode(json_encode($object), true);
  }
}