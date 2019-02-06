<?php
include 'header.php';
$con = new PDO('mysql:host=localhost;dbname=gestion_formations;charset=utf8', 'root', '');

$id = $_GET["id_formation"];
	$pseudo = $_SESSION["pseudo"];
	$query=$con->prepare("insert into participant (id_formation, pseudo) values('$id', '$pseudo')");

    $query->execute();
    echo '<script type="text/javascript"> alert("Votre inscription a bien été prise en compte"); window.location.href = "formations.php"; </script>';
?>