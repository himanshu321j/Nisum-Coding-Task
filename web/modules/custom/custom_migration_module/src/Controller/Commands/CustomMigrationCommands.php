<?php

namespace Drupal\custom_migration_module\Commands;

use Drush\Commands\DrushCommands;

class CustomMigrationCommands extends DrushCommands {

  /**
   * Run the migrations for users and companies.
   *
   * @command custom_migration:run
   * @aliases cmr
   */
  public function runMigrations() {
    $this->output()->writeln('Running Company Migration');
    \Drupal::service('migrate_tools.migration_rebuild')->importMigration('company_migration');

    $this->output()->writeln('Running User Migration');
    \Drupal::service('migrate_tools.migration_rebuild')->importMigration('user_migration');

    $this->output()->writeln('Migration completed.');
  }
}
