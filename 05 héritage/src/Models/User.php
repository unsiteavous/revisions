<?php
namespace Models;

class User
{
  public
  $id,
  $prenom,
  $nom,
  $email,
  $password;

  public function __construct($id, $prenom, $nom, $email, $password)
  {
    $this->id = $id;
    $this->prenom = $prenom;
    $this->nom = $nom;
    $this->email = $email;
    $this->password = $password;
  }
}