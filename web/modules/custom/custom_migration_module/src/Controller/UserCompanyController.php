<?php
namespace Drupal\custom_migration_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\Entity\User;
use Drupal\node\Entity\Node;

class UserCompanyController extends ControllerBase {
  public function listUsers() {
    $users = \Drupal::entityTypeManager()->getStorage('user')->loadMultiple();
    $output = [];

    foreach ($users as $user) {
      $company = $user->get('field_company')->entity; // Assume a reference field
      // Create a string to represent the user and their company
      $output[] = $user->getDisplayName() . ' (' . ($company ? $company->getTitle() : 'No company') . ')';
    }

    return [
      '#theme' => 'item_list',
      '#items' => $output,
    ];
  }
}
