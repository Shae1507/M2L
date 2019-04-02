<?php include 'header.php'; 
 include 'acces.php'; 
$id = $_GET["id"];
	    $query=$bdd->prepare("SELECT *
        FROM membres WHERE id = $id"); 
        $query->execute();
        $donnees = $query->fetch();



if (isset($_POST['envoyer']))	{

	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$telephone = $_POST["telephone"];
	$mdp = $_POST["mdp"];
	$pseudo = $_POST["pseudo"]; 

	      $query=$bdd->prepare("UPDATE membres 
	      						SET pseudo = '$pseudo',  
	      						nom ='$nom',
	      						prenom='$prenom', 
	      						email='$email', 
	      						telephone='$telephone',
	      						mdp='$mdp'
	      						where id = $id ");
	      $query->execute();
	header('location:admin.php');
 }  

 elseif (isset($_GET['del'])){

 		$query=$bdd->prepare("DELETE
        FROM membres WHERE id = $id"); 
        $query->execute();
        header('location:admin.php');
}
?>
<title>Modif </title>
<div class="main">
		<div class="container">
		 	<div class="row">
		 		<div class="col-lg-12 formulaire">
					<form action="modif.php?id=<?=$donnees["id"]?>" method="POST" class="well">
						<legend>Modifier le profil</legend>
						<fieldset>
							<div class="row partForm">
                				<div class="form-group">
                  					<label for="textarea" class="col-lg-2 control-label lab">Nom :</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="nom" class="form-control" id="textarea" value="<?= $donnees['nom'] ?>">
               							</div>
               						<label for="textarea" class="col-lg-2 control-label">Prenom :</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="prenom" class="form-control" id="textarea" value="<?= $donnees['prenom'] ?>">
               							</div>
               					</div>
           					</div>
           					<div class="row partForm">
                				<div class="form-group">
                  					<label for="textarea" class="col-lg-2 control-label lab">Adresse mail :</label>
                  						<div class="col-lg-3">
                   							<input type="email" name="email" class="form-control" id="textarea" value="<?=$donnees['email'] ?>">
               							</div>
               						<label for="textarea" class="col-lg-2 control-label">Téléphone :</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="telephone" class="form-control" id="textarea" value="<?= $donnees['telephone']?>">
               							</div>
               					</div>
           					</div>
							<div class="row partForm">
								<div class="form-group">
               						<label for="textarea" class="col-lg-2 control-label lab">Pseudo :</label>
                  							<div class="col-lg-3">
                   								<input type="textarea" name="pseudo" class="form-control" id="textarea" value="<?= $donnees['pseudo'] ?>">
               								</div>
               					</div>
               				</div>
               				<div class="cachee">
               					<input type="textarea" name="mdp" class="form-control" id="textarea" value="<?= $donnees['mdp'] ?>">
               				</div>
               				<button class="btn btn-dark" type="submit" name="envoyer">Envoyer</button>
                      <a href="admin.php" class="btn btn-primary retour" role="button">Retour</a>
						</fieldset>
					</form>
				</div>
		   	</div>
        <div class="space">
        </div>
	  	</div>
   	</div>

<?php
 include 'footer.php'; 
 ?> 