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
    <h1 style="color:red;"><u><center>Découvre nos délicieux bonbons !</u></center></h1>
    <br>

    <?php

        include "connexion.php";
        $bdd = connect();

        $sql = "select* from produit order by nom";

        $resultat = $bdd->query($sql);

        

        while($produit = $resultat->fetch(PDO::FETCH_OBJ))
        {
            
            echo "<div class='card' style='width: 18rem;'>
            <img src='Images/$produit->photo' class='card-img-top'>
            <div class='card-body'>
              <h4 class='card-title'><b>$produit->nom</b></h4>
              <p class='card-text'>Coûte actuellement $produit->prix € </p>
              <a class='btn btn-danger' href='supprime1.php?choix=$produit->id'>Supprimer <i class='fas fa-trash-alt'></i></a>
            </div>
          </div>"; 
          
        }
    ?>
    
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>