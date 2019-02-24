<?php include 'header.php'; 
 include 'acces.php'; 
 include 'functions.php';

$id = $_GET["ValuePrimaryKey"];
$table = $_GET["table"];

$query = modifFormation($table, $id);
$donnees = $query->fetch();

if (isset($_POST['envoyer']))	{

  $id = $_GET["ValuePrimaryKey"];
  $table = $_GET["table"];
	$description = $_POST["description"];
	$debut_cours = $_POST["debut_cours"];
	$fin_cours = $_POST["fin_cours"];
	$cout = $_POST["cout"];
  $id_organisateur = $_POST["id_organisateur"];

        $con = con();
	      $query=$con->prepare("UPDATE $table 
	      						SET description ='$description',
	      						debut_cours='$debut_cours', 
	      						fin_cours='$fin_cours', 
	      						cout='$cout',
	      						id_organisateur='$id_organisateur'
	      						where id_formation = $id ");
	      $query->execute();
	header('location:tables.php?table=formation');
 }  

 elseif (isset($_GET['del'])){
  $id = $_GET["ValuePrimaryKey"];
  $table = $_GET["table"];

    $con = con();
 		$query=$con->prepare("DELETE
        FROM $table WHERE id_formation = $id"); 
        $query->execute();
        header('location:tables.php?table=formation');
}
?>
<title>Modif </title>
<div class="main">
		<div class="container">
		 	<div class="row">
		 		<div class="col-lg-12 formulaire">
					<form action="modifFormation.php?table=<?= $_GET["table"] ?>&ValuePrimaryKey=<?= $id ?>" method="POST" class="well">
						<legend>Modifier la formation</legend>
						<fieldset>
							<div class="row partForm">
                				<div class="form-group">
                  					<label for="textarea" class="col-lg-2 control-label lab">Description :</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="description" class="form-control" id="textarea" value="<?= $donnees['description'] ?>">
               							</div>
               						<label for="textarea" class="col-lg-2 control-label">Début cours :</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="debut_cours" class="form-control" id="textarea" value="<?= $donnees['debut_cours'] ?>">
               							</div>
               					</div>
           					</div>
           					<div class="row partForm">
                				<div class="form-group">
                  					<label for="textarea" class="col-lg-2 control-label lab">Fin cours :</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="fin_cours" class="form-control" id="textarea" value="<?=$donnees['fin_cours'] ?>">
               							</div>
               						<label for="textarea" class="col-lg-2 control-label">Coût :</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="cout" class="form-control" id="textarea" value="<?= $donnees['cout']?>">
               							</div>
               					</div>
           					</div>
                    <div class="cachee">
                        <input type="textarea" name="id_organisateur" class="form-control" id="textarea" value="<?= $donnees['id_organisateur'] ?>">
                    </div>
               			<button class="btn btn-dark" type="submit" name="envoyer">Envoyer</button>
                    <a href="tables.php?table=<?= $table ?>" class="btn btn-primary retour" role="button">Retour</a>
						</fieldset>
					</form>
				</div>
		   	</div>
	  	</div>
   	</div>

<?php
 include 'footer.php'; 
 ?> 