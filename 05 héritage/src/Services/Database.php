<?php
namespace Services;

use PDO;

class Database
{
  public static function connect()
  {
    $database = __DIR__ . '/../database.sqlite';
    $db = new PDO('sqlite:'.$database);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  }
}