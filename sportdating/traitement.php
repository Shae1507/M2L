<?php 
include("header2.php");

if (isset($_GET['new'])){


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
$catdata = $_POST["catdata"];

     $query=$bdd->prepare("INSERT into membres (nom, prenom, email, mdp, telephone, sexe, age, ville, niveau, sport, jour, heure, descrip, avatar, catdata) VALUES('$nom','$prenom','$email','$mdp', '$telephone', '$sexe', '$age', '$ville', '$niveau', '$sport', '$jour', '$heure', '$descrip', '$avatar', '$catdata')");
        $query->execute();

echo '<script type="text/javascript"> alert("Votre compte a bien été crée, pensez à activer votre compte"); window.location.href = "connexion.php"; </script>';


}

else {

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
$catdata = $_POST["catdata"];

      $query=$bdd->prepare("UPDATE membres SET 
      	nom = '$nom',
      	prenom = '$prenom',
      	email = '$email',
      	mdp = '$mdp',
      	telephone = '$telephone',
      	sexe = '$sexe',
      	age = '$age',
      	ville = '$ville',
      	niveau = '$niveau',
      	sport = '$sport',
      	jour = '$jour',
      	heure = '$heure',
        descrip = '$descrip',
        avatar = '$avatar',
        catdata = '$catdata'
        WHERE  id = '$data[id]'");
        $query->execute();

//mail($to,$from,$subjet);

echo '<script type="text/javascript"> alert("Modification prise en compte"); window.location.href = "profil.php"; </script>';

}

?>
