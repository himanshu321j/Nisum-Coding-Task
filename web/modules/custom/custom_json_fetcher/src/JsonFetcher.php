<?php

namespace Drupal\custom_json_fetcher;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class JsonFetcher {

  protected $httpClient;

  // Change the type hinting for $http_client to GuzzleHttp\Client
  public function __construct(Client $http_client) {
    $this->httpClient = $http_client;
  }

  public function fetchData($url) {
    try {
      $response = $this->httpClient->get($url);
      $data = json_decode($response->getBody(), TRUE);
      return $data;
    } catch (RequestException $e) {
      \Drupal::logger('custom_json_fetcher')->error($e->getMessage());
      return NULL;
    }
  }
}
