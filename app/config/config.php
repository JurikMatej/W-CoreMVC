<?php
  // DB params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'YOUR_DB_USERNAME');
  define('DB_PASS', 'YOUR_DB_PASSWORD');
  define('DB_NAME', 'YOUR_DB_NAME');



  // App Root
  define('APPROOT', dirname(dirname(__FILE__)) );

  // URL root [CHANGE TO YOUR PROJECT NAME]
  define('URLROOT', "http://$_SERVER[HTTP_HOST]/YOUR_PROJECT_NAME/public");

  // Site name [CHANGE TO YOUR PROJECT NAME]
  define('SITENAME', 'YOUR_PROJECT_NAME');