<?php

        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $image = $_POST['image'];
        $image = basename($_FILES["image"]["name"]);
        $chemin = "Images/".$image;
        move_uploaded_file($_FILES["image"]["tmp_name"],$chemin);

        include "connexion.php";
        $bdd = connect();

        $sql = "INSERT into PRODUIT(nom,prix,photo) Values ( '$nom','$prix','$image')";

        $resultat=$bdd->exec($sql);

        header("location:index.php");
?>      