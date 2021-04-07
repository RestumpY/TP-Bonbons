<?php
        session_start();

        include "connexion.php";
        $bdd = connect();

        $id = $_SESSION["choix"];
        $nom = $_POST['nom'];
        $prix = $_POST['prix'];
        $image = basename($_FILES["image"]["name"]);
        $chemin = "Images/".$image;
        move_uploaded_file($_FILES["image"]["tmp_name"],$chemin);

        

        $sql = "UPDATE produit SET nom ='$nom', prix ='$prix', photo='$image' WHERE id='$id'" ;

        $resultat=$bdd->query($sql);
        
        echo $sql;

        header("location:modfier_form.php");
?>      