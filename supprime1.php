
<?php

    
    session_start();

    $choix = $_GET["choix"];

    include "connexion.php";
    $bdd = connect();

    $sql = "delete from produit where id=$choix";

    $resultat = $bdd->query($sql);

    header("location:index.php");
            
?>