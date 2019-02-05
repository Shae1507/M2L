<?php

if (isset($_SESSION['pseudo']) && empty($_POST['pseudo']) || empty($_POST['password']) && empty($_GET['deco']) ) //On est dans la page de formulaire
{	

	include 'header.php';


		echo " 
			<title>Connexion</title>
 <div class='main'>
			      	  <div class='shop_top' style='padding: 8% 0;'>
			      			<div class='container'>
		                        <div class='main'>
		      <div class='shop_top'>
				<div class='container'>
					<div class='col-md-6'>
						 <div class='login-page'>
							<h4 class='title'>Pas encore de compte?</h4>
							<div class='button1'>
							   <a href='inscription.php'><input type='submit' name='Submit' value='Créer un compte'></a>
							 </div>
							 <div class='clear'></div>
						  </div>
						</div>
						<div class='col-md-6'>
						 <div class='login-title'>
			           		<h4 class='title'>Connexion</h4>
							<div id='loginbox' class='loginbox'>
								<form action='#popup1' method='post' name='login' id='login-form'>
								  <fieldset class='input'>
								    <p id='login-form-username'>
								      <label for='modlgn_username'>Pseudo</label>
								      <input id='modlgn_username' type='text' name='pseudo' class='inputbox' size='18' autocomplete='off'>
								    </p>
								    <p id='login-form-password'>
								      <label for='modlgn_passwd'>Mot de passe</label>
								      <input id='modlgn_passwd' type='password' name='password' class='inputbox' size='18' autocomplete='off'>
								    </p>
								    <div class='remember'>
									    <p id='login-form-remember'>
									      <label for='modlgn_remember'><a href='#'>Mot de passe oublié ? </a></label>
									   </p>
									    <input type='submit' name='Submit' class='button' value='Connexion'><div class='clear'></div>
									 </div>
								  </fieldset>
								 </form>
							</div>
					      </div>
						 <div class='clear'></div>
					  </div>
					</div>
				  </div>
			  </div>
		      				

						</div>
					</div>
				</div>  "; 

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
