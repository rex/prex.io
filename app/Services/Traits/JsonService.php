<?php namespace App\Services\Traits;

trait JsonService {

  /**
   * @param $endpoint String The URI for the desired endpoint
   * @param $response_key String If a nested response, return this key from the response array
   */
  public static function fetchJson($endpoint, $response_key = null) {
    $response = self::client()->get($endpoint);

    if($response_key)
      return $response->json()[$response_key];
    else
      return $response->json();
  }
}