<?php
function con() {
	$con = new PDO('mysql:host=localhost;dbname=gestion_formations;charset=utf8', 'root', '');
	return $con;
}

function formations()
{
	$con = con();
	$query=$con->prepare('SELECT * FROM formation'); 
    $query->execute();
    return $query;
}

function show()
{
	$con = con();
	$req = $con->prepare('SHOW tables');
	$req->execute();
	return $req;
}
?>