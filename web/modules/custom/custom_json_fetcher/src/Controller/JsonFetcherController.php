<?php

namespace Drupal\custom_json_fetcher\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\custom_json_fetcher\JsonFetcher;

class JsonFetcherController extends ControllerBase {

  protected $dataFetcher;

  public function __construct(JsonFetcher $dataFetcher) {
    $this->dataFetcher = $dataFetcher;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('custom_json_fetcher.data_fetcher')
    );
  }

  public function fetchJsonData() {
    $url = 'https://jsonplaceholder.typicode.com/users';
    $data = $this->dataFetcher->fetchData($url);

    if ($data) {
      return [
        '#theme' => 'item_list',
        '#items' => array_map(function ($item) {
          return $item['name'];
        }, $data),
      ];
    }

    return [
      '#markup' => $this->t('Failed to fetch data.'),
    ];
  }
}
