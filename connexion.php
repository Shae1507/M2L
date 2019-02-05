<?php

if (isset($_SESSION['pseudo']) && empty($_POST['pseudo']) || empty($_POST['password']) && empty($_GET['deco']) ) //On est dans la page de formulaire
{	
include 'header.php';
?>
<title>Connexion</title>
	<div class="main">
		<div class="container">
		 	<div class="row">
		 		<div class="col-lg-12 formulaire">
					<form action="connexion.php" method="POST" class="well">
						<legend>Connexion</legend>
						<fieldset>
							<div class="row partForm">
                				<div class="form-group">
                  					<label for="textarea" class="col-lg-1 control-label lab">Pseudo:</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="pseudo" class="form-control" id="textarea">
               							</div>
               						<label for="textarea" class="col-lg-2 control-label">Mot de passe:</label>
                  						<div class="col-lg-3">
                   							<input type="password" name="password" class="form-control" id="textarea">
               							</div>

               					<button class="btn btn-dark btnInscript" type="submit">Envoyer</button>
               					</div>
           					</div>
               				<div class="inscrire">
               				<h5>Pas encore de compte ?</h5>
               				<button class="btn btn-dark" ><a href="inscription.php">Inscrivez vous</a></button>
						</fieldset>
					</form>
				</div>
		   	</div>
	  	</div>
   	</div>

<?php
include 'footer.php';
}
else
{

	include 'header.php';

    if (empty($_POST['pseudo']) || empty($_POST['password']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
		Vous devez remplir tous les champs</p>';
    }

    else //On check le mot de passe
    {
	        $query=$bdd->prepare('SELECT mdp, id, rang, pseudo, actif, email
	        FROM membres WHERE pseudo = :pseudo');
	        $query->bindValue(':pseudo',$_POST['pseudo'], PDO::PARAM_STR);
	        $query->execute();
	        $data=$query->fetch();
		if ($data['mdp'] == $_POST['password']) // Acces OK !
		{

			//if($data['actif'] == 1){ // on vérifie si il a bien validé son email

		    $_SESSION['pseudo'] = $data['pseudo'];
		    $_SESSION['rang'] = $data['rang'];
		    $_SESSION['id'] = $data['id'];
		    $message = '<p>Bienvenue '.$data['pseudo'].', 
				vous êtes maintenant connecté!</p>';

			header("location: index.php");

			//}

			//else{ $message = '<p>Activez votre compte via l\'email envoyé à cette adresse '.$data['email'].'!</p>'; }

		}
		else // Acces pas OK !
		{
		    $message = '<p>Une erreur s\'est produite 
		    pendant votre identification.<br /> Le mot de passe ou le pseudo 
	            entré n\'est pas correcte.';
		}
	    $query->CloseCursor();

    }

    if (isset($_GET['deco'])){
	    	
	session_destroy(); 
	header("location: index.php");
	$message = '<p>Vous avez bien été déconnecté.</p>';
	

	}

	include 'footer.php';

}
?>
