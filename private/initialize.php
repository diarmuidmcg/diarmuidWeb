<?php

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

  $public_stylesheets = strpos($_SERVER['SCRIPT_NAME'], '/public/stylesheets') + 7;
  $doc_style = substr($_SERVER['SCRIPT_NAME'], 0, $public_stylesheets);
  define("WWW_STYLESHEETS", $doc_style);

  $public_images = strpos($_SERVER['SCRIPT_NAME'], '/public/images') + 7;
  $doc_images = substr($_SERVER['SCRIPT_NAME'], 0, $public_images);
  define("WWW_IMAGES", $doc_images);

  require_once('functions.php');

?>
