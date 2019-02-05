<?php 
include("header2.php");

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$mdp = $_POST["mdp"];
$telephone = $_POST["telephone"];
$sexe = $_POST["sexe"]; 
$age = $_POST["age"]; 
$ville = $_POST["ville"]; 
$niveau = $_POST["niveau"]; 
$sport = $_POST["sport"]; 
$jour = $_POST["jour"]; 
$heure = $_POST["heure"]; 
$descrip = $_POST["descrip"]; 
$avatar = $_POST["avatar"]; 
      $query=$bdd->prepare("insert into membres (nom, prenom, email, mdp, telephone, sexe, age, ville, niveau, sport, jour, heure, descrip, avatar) values('$nom','$prenom','$email','$mdp', '$telephone', '$sexe', '$age', '$ville', '$niveau', '$sport', '$jour', '$heure', '$descrip', '$avatar')");

        $query->execute();

        echo "ok";


//header('location:index.php');


?>