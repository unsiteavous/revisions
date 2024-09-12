<?php
namespace Controllers;

class HomeController
{
  public static function index()
  {
    echo 'Hello World';
  }

  public static function notFound()
  {
    echo '404';
  }
}