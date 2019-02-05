<?php include 'header.php'; 
 include 'acces.php'; 
$id = $_GET["id"];
	    $query=$bdd->prepare("SELECT *
        FROM membres WHERE id = $id"); 
        $query->execute();
        $donnees = $query->fetch(); 




if (isset($_POST['pseudo']))	{

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


		echo "
					<title>Modif </title>

		<div id='popup1' class='overlay'>
	<div class='popup'>
		<h2>Modification</h2>
		<a class='close' href='admin.php'>&times;</a>
		<div class='content'>
		Vous avez bien modifié l'utilisateur ". $pseudo ."
		</div>
	</div>
</div>

 <div class='main'>
      <div class='shop_top'>
	     <div class='container'>

						<form action='#popup1' method='POST'> 
								<div class='register-top-grid'>
										<h3>Informations personnelles</h3>
										<div>
											<span>Nom<label>*</label></span>
											<input type='text' name='nom' value=' ". $donnees['nom'] ." '> 
										</div>
										<div>
											<span>Prénom<label>*</label></span>
											<input type='text' name='prenom' value='". $donnees['prenom'] ." '> 
										</div>
										<div>
											<span>Adresse mail<label>*</label></span>
											<input type='text' name='email' value='". $donnees['email'] ." '> 
										</div>
										<div>
											<span>Téléphone<label>*</label></span>
											<input type='text' name='telephone' value='". $donnees['telephone'] ." '> 
										</div>
										<div class='clear'> </div>
											
										<div class='clear'> </div>
								</div>
								<div class='clear'> </div>
								<div class='register-bottom-grid'>
										<h3>Vous enregistrer</h3>
										<div>
											<span>Mot de passe<label>*</label></span>
											<input type='text' name='mdp' value='". $donnees['mdp'] ." '> 
										</div>
										<div>
											<span>Confirmer votre mot de passe<label>*</label></span>
											<input type='text' name='mdp' value='". $donnees['mdp'] ." '> 
										</div>
										<div>
											<span>Pseudo<label>*</label></span>
											<input type='text' name='pseudo'value='". $donnees['pseudo'] ." '> 
										</div>
										<div class='clear'> </div>
								</div>
								<div class='clear'> </div>
								<input type='submit' value='Envoyer'>
						</form>
					</div>
		   </div>
	  </div>

";
 }  

 elseif (isset($_GET['del'])){

//&amp; 

echo "
					<title>Modif </title>

		<div id='popup1' class='overlay'>
	<div class='popup'>
		<h2>Modification</h2>
		<a class='close' href='admin.php'>&times;</a>
		<div class='content'>
		Vous avez bien supprimé l'utilisateur ". $donnees['pseudo'] ."
		</div>
	</div>
</div>

 <div class='main'>
      <div class='shop_top'>
	     <div class='container'>

						<form action='#popup1' method='POST'> 
								<div class='register-top-grid'>
										<h3>Informations personnelles</h3>
										<div>
											<span>Nom<label>*</label></span>
											<input type='text' name='nom' value=' ". $donnees['nom'] ." '> 
										</div>
										<div>
											<span>Prénom<label>*</label></span>
											<input type='text' name='prenom' value='". $donnees['prenom'] ." '> 
										</div>
										<div>
											<span>Adresse mail<label>*</label></span>
											<input type='text' name='email' value='". $donnees['email'] ." '> 
										</div>
										<div>
											<span>Téléphone<label>*</label></span>
											<input type='text' name='telephone' value='". $donnees['telephone'] ." '> 
										</div>
										<div class='clear'> </div>
											<a class='news-letter' href='#'>
												<label class='checkbox'><input type='checkbox' name='checkbox' checked=''><i> </i>Reçevoir notre Newsletter</label>
											</a>
										<div class='clear'> </div>
								</div>
								<div class='clear'> </div>
								<div class='register-bottom-grid'>
										<h3>Vous enregistrer</h3>
										<div>
											<span>Mot de passe<label>*</label></span>
											<input type='text' name='mdp' value='". $donnees['mdp'] ." '> 
										</div>
										<div>
											<span>Confirmer votre mot de passe<label>*</label></span>
											<input type='text' name='mdp' value='". $donnees['mdp'] ." '> 
										</div>
										<div>
											<span>Pseudo<label>*</label></span>
											<input type='text' name='pseudo'value='". $donnees['pseudo'] ." '> 
										</div>
										<div class='clear'> </div>
								</div>
								<div class='clear'> </div>
								<input type='submit' value='Envoyer'>
						</form>
					</div>
		   </div>
	  </div>

";

 		$query=$bdd->prepare("DELETE
        FROM membres WHERE id = $id"); 
        $query->execute();
}	

 else{
 	echo "

			<title>Modif </title>

 <div class='main'>
      <div class='shop_top'>
	     <div class='container'>

												<form action='#popup1' method='POST'> 
								<div class='register-top-grid'>
										<h3>Informations personnelles</h3>
										<div>
											<span>Nom<label>*</label></span>
											<input type='text' name='nom' value=' ". $donnees['nom'] ." '> 
										</div>
										<div>
											<span>Prénom<label>*</label></span>
											<input type='text' name='prenom' value='". $donnees['prenom'] ." '> 
										</div>
										<div>
											<span>Adresse mail<label>*</label></span>
											<input type='text' name='email' value='". $donnees['email'] ." '> 
										</div>
										<div>
											<span>Téléphone<label>*</label></span>
											<input type='text' name='telephone' value='". $donnees['telephone'] ." '> 
										</div>
										<div class='clear'> </div>
											<a class='news-letter' href='#'>
												<label class='checkbox'><input type='checkbox' name='checkbox' checked=''><i> </i>Reçevoir notre Newsletter</label>
											</a>
										<div class='clear'> </div>
								</div>
								<div class='clear'> </div>
								<div class='register-bottom-grid'>
										<h3>Vous enregistrer</h3>
										<div>
											<span>Mot de passe<label>*</label></span>
											<input type='text' name='mdp' value='". $donnees['mdp'] ." '> 
										</div>
										<div>
											<span>Confirmer votre mot de passe<label>*</label></span>
											<input type='text' name='mdp' value='". $donnees['mdp'] ." '> 
										</div>
										<div>
											<span>Pseudo<label>*</label></span>
											<input type='text' name='pseudo'value='". $donnees['pseudo'] ." '> 
										</div>
										<div class='clear'> </div>
								</div>
								<div class='clear'> </div>
								<input type='submit' value='Envoyer'>
						</form>
					</div>
		   </div>
	  </div>";}
   

 include 'footer.php'; 
    $query->CloseCursor();?> 