<?php namespace App\Services;

use GuzzleHttp\Client as Http;

class ExternalService {
  public $base_url;

  private static function getClient() {
    return new Http();
  }

  private function buildUrl($endpoint = "", $query_string = "") {
    return "$base_url/$endpoint$query_string";
  }

  protected function parseJson($json) {
    //
  }

  protected function get($endpoint) {
    $client = self::getClient();
    $url = self::buildUrl($endpoint);
    return $client->get($url);
  }
}