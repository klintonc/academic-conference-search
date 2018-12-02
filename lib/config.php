<?php
// Load API keys from config.php (git-ignored).
// Falls back to config.example.php so the page still loads without keys.
function app_config() {
  static $config = null;
  if ($config === null) {
    $local = __DIR__ . '/../config.php';
    $config = require (file_exists($local) ? $local : __DIR__ . '/../config.example.php');
  }
  return $config;
}
