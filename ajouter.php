<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <script src="https://kit.fontawesome.com/8663c26ca7.js" crossorigin="anonymous"></script>
  </head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Yannis Candy's</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mise à jour
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ajouter.php">Ajouter</a>
          <a class="dropdown-item" href="modifier.php">Modifier</a>
          <a class="dropdown-item" href="supprimer.php">Supprimer</a>
        </div>
      </li>
    </ul>
    <form method="POST" action ="recherche.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search" name="recherche">
      <button type="submit" class="btn btn-light">Recherche</button>
    </form>
    </div>
    </nav>
    <br>
    <div class="container">
    <div class="row center">
    <div class="col-md-6">
    <form method="POST" action ="ajout_securise.php" enctype='multipart/form-data'>
        <div class="form-group">
            <label for="formGroupExampleInput">Nom du produit : </label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nom du bonbon" name="nom">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Prix du produit : </label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="prix du bonbon" name="prix">
            <label for="formGroupExampleInput2">Image du produit : </label>
            <br>
            <input type="file" name="image" accept="image/png, image/jpg">
            <br><br>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>