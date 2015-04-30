<?php namespace App\Services\Traits;

trait JsonService {

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
}