<?php

$lando_info = json_decode(getenv('LANDO_INFO'), TRUE);

$databases = array(
  'default' =>
    array (
      'default' =>
        array (
          'database' => $lando_info['database']['creds']['database'],
          'username' => $lando_info['database']['creds']['user'],
          'password' => $lando_info['database']['creds']['password'],
          'host' => $lando_info['database']['internal_connection']['host'],
          'port' => $lando_info['database']['internal_connection']['port'],
          'driver'   => 'mysql',
          'prefix'   => '',
        ),
    ),
);

# Show all errors.
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
$conf['error_level'] = 2;

// Don't aggregate js and css files.
$conf['preprocess_css'] = 0;
$conf['preprocess_js'] = 0;
