<?php

// @codingStandardsIgnoreFile

/**
 * @file
 * Local configuration file.
 */

$lando_info = json_decode(getenv('LANDO_INFO'), TRUE);
$databases['default']['default'] = [
  'driver' => 'mysql',
  'database' => $lando_info['database']['creds']['database'],
  'username' => $lando_info['database']['creds']['user'],
  'password' => $lando_info['database']['creds']['password'],
  'host' => $lando_info['database']['internal_connection']['host'],
  'port' => $lando_info['database']['internal_connection']['port'],
];

// Disable css/js aggregation.
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// On some occasions local setup can die because of memory issues.
ini_set('memory_limit', '2G');

// Don't harden the files folder locally.
$settings['skip_permissions_hardening'] = TRUE;

// Set trusted domain to be localhost.
$settings['trusted_host_patterns'] = [
  'd8-high-contrast.lndo.site',
];
