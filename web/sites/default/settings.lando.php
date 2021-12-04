<?php
/**
* @file
* Lando settings.
*/
// Configure the database on Lando
// FROM https://github.com/thinktandem/platformsh-example-drupal8/blob/master/web/sites/default/settings.lando.php


// Set the database creds
$databases['default']['default'] = [
  'database' => 'drupal9',
  'username' => 'drupal9',
  'password' => 'drupal9',
  'host' => 'database',
  'port' => '3306',
  'driver' => 'mysql',
  'prefix' => '',
];
// And a bogus hashsalt for now
$settings['hash_salt'] = json_encode($databases);
