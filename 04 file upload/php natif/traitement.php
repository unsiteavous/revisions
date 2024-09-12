<?php

if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
  if (!in_array($_FILES['image']['type'], ['image/jpeg', 'image/png', 'image/jpg', 'image/svg'])) {
    echo "erreur de typage";
    die;
  }

  $max_upload = rtrim("2M", 'M');
  $max_upload = $max_upload * 1024 * 1024;
  if (!($_FILES['image']['size'] <= $max_upload)) {
    echo "image trop lourde";
    die;
  }

  $nom = basename($_FILES['image']['name']);
  $i = 0;
  while (file_exists(__DIR__ . '/images/' . $nom)) {
    $i++;
    $nom = basename($i .'_' . $_FILES['image']['name']);
  }


  move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . "/images/" . $nom);


  var_dump($_FILES);

  // $user->setProfileImage($nom);
  // $userRepo->update($user);
} else {
  echo "erreur, l'image doit faire ".ini_get('upload_max_filesize')."o";
}
