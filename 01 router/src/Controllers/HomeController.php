<?php
namespace Controllers;

class HomeController
{
  public static function index()
  {
    echo 'Hello World';
  }

  public static function contact()
  {
    echo '<form action="#" method="POST">
  <input type="hidden" name="_method" value="DELETE">
  <input type="checkbox" id="suppr">
  <label for="suppr">Suppimer l\'utilisateur</label>

  <input type="submit" value="Supprimer">
</form>';
  }

  public static function notFound()
  {
    echo '404';
  }
}
?>

