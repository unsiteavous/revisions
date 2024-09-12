<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>téléverser une image</title>
</head>

<body>
  <form action="traitement.php" method="post" enctype="multipart/form-data">
    <input id="image" type="file" name="image"><br>
    <input type="submit" value="Téléverser"><br>
    <img src="" alt="preview" id="preview">
  </form>

  <script>
    let image = document.getElementById('image');
    image.addEventListener('change', function(event) {
      const files = event.target.files;
      if (files.length > 0) {
        let file = files[0];
        if (file.type == "image/png" || file.type == "image/jpeg") {
          document.getElementById('preview').src = URL.createObjectURL(file);
        } else {
          console.log("Erreur de typage");
        }
      }
    })
    
  </script>
</body>

</html>