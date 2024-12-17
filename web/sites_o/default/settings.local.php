<?php

$databases['default']['default'] = array (
  'database' => 'db',
  'username' => 'root',
  'password' => 'mysqlrootkey',
  'prefix' => 'repo',
  'host' => 'mysql',
  'port' => '3306',
  'isolation_level' => '',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'driver' => 'mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);

$settings['trusted_host_patterns'] = array(
  '^repoiser\.local$',
);

