<?php
function con() {
	$con = new PDO('mysql:host=localhost;dbname=gestion_formations;charset=utf8', 'root', '');
	return $con;
}

function connectQuestions()
{
	$con = new PDO('mysql:host=localhost;dbname=questionnaire;charset=utf8', 'root', '');
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

function getTable($table)
{
	$con = con();
	$query = $con->prepare('SELECT * FROM '.$table);
	$query->execute();
	return $query;
}

function information($table)
{
	$con = con();
	$query = $con->prepare('EXPLAIN '.$table);
	$query->execute();
	return $query;
}

function questionnaire()
{
	$con = connectQuestions();
	$query = $con->prepare('SELECT * FROM questions order by RAND() LIMIT 5');
	$query->execute();
	return $query;
}

function getReponses()
{
	$con = connectQuestions();
	$query = $con->prepare('');
	$query-> execute();
	return $query;
}

function modifFormation($table, $id)
{
	$con = con();
	$query=$con->prepare("SELECT *
    FROM $table WHERE id_formation = $id"); 
    $query->execute();
    return $query;
}

function listeParticipants($id_formation)
{
	$con = con();
	$query = $con->prepare("SELECT * from participant WHERE id_formation = $id_formation");
	$query->execute();
	return $query;
}

function nomFormation($id_formation)
{
	$con = con();
	$query = $con->prepare("SELECT description FROM formation WHERE id_formation = $id_formation");
	$query->execute();
	return $query;
}

function sqlDynTable($table)
{
	$con = con();
	$query = $con->prepare("call sqlDynTable('$table')");
	$query->execute();
	return $query;
}
?>