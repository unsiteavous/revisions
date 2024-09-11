<?php

function autoload($class) {
  $class = ltrim($class, '\\');
  $class = str_replace('\\', '/', $class);
  $file = __DIR__ . '/../src/' . $class . '.php';
  if (file_exists($file)) {
    require $file;
  }
}

spl_autoload_register('autoload');