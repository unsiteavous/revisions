<?php
namespace Repositories;

use Models\User;
use PDO;
use Services\Database;

class UserRepository
{

  public static function getAll()
  {
    $db = Database::connect();
    $query = $db->prepare('SELECT * FROM users');
    $query->execute();
    $users = $query->fetchAll(PDO::FETCH_CLASS, User::class);
    return $users;
  }

  public static function getById($id)
  {
    $db = Database::connect();
    $query = $db->prepare('SELECT * FROM users WHERE id = :id');
    $query->execute(['id' => $id]);
    $user = $query->fetchObject(User::class);
    return $user;
  }

  public static function getByEmail($email)
  {
    $db = Database::connect();
    $query = $db->prepare('SELECT * FROM users WHERE email = :email');
    $query->execute(['email' => $email]);
    $query->setFetchMode(PDO::FETCH_CLASS, User::class);
    $user = $query->fetch();
    return $user;
  }
}
    