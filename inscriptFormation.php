<?php
include 'header.php';
include 'functions.php';

$con = con();

$id = $_GET["id_formation"];
	$pseudo = $_SESSION["pseudo"];
	$query=$con->prepare("insert into participant (id_formation, pseudo) values('$id', '$pseudo')");

    $query->execute();
    echo '<script type="text/javascript"> alert("Votre inscription a bien été prise en compte"); window.location.href = "formations.php"; </script>';
?>