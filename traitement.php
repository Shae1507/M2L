<?php 
include("header.php");

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$mdp = $_POST["mdp"];
$pseudo = $_POST["pseudo"]; 

      $query=$bdd->prepare("insert into membres (pseudo, nom, prenom, email, telephone, mdp) values('$pseudo', '$nom','$prenom','$email','$telephone', '$mdp')");

        $query->execute();


header('location:index.php');


?>