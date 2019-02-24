<?php include 'header.php'; ?>
   
	<div class="main">
		<div class="container">
		 	<div class="row">
		 		<div class="col-lg-12 formulaire">
					<form action="traitement.php" method="POST" class="well">
						<legend>Inscription</legend>
						<h4>Informations personnelles</h4>
						<fieldset>
							<div class="row partForm">
                				<div class="form-group">
                  					<label for="textarea" class="col-lg-2 control-label lab">Nom :</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="nom" class="form-control" id="textarea">
               							</div>
               						<label for="textarea" class="col-lg-2 control-label">Prenom :</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="prenom" class="form-control" id="textarea">
               							</div>
               					</div>
           					</div>
           					<div class="row partForm endInfoPerso">
                				<div class="form-group">
                  					<label for="textarea" class="col-lg-2 control-label lab">Adresse mail :</label>
                  						<div class="col-lg-3">
                   							<input type="email" name="email" class="form-control" id="textarea">
               							</div>
               						<label for="textarea" class="col-lg-2 control-label">Téléphone :</label>
                  						<div class="col-lg-3">
                   							<input type="textarea" name="telephone" class="form-control" id="textarea">
               							</div>
               					</div>
           					</div>
							<h4>Vous enregistrer</h4>
							<div class="row partForm">
								<div class="form-group">
									<label for="textarea" class="col-lg-2 control-label lab">Mot de passe :</label>
                  							<div class="col-lg-3">
                   								<input type="password" name="mdp" class="form-control" id="textarea">
               								</div>
               						<label for="textarea" class="col-lg-2 control-label">Confirmer votre mot de passe :</label>
                  							<div class="col-lg-3">
                   								<input type="password" name="mdp" class="form-control" id="textarea">
               								</div>
               					</div>
               				</div>
               				<div class="row partForm">
								<div class="form-group">
									<label for="textarea" class="col-lg-2 control-label lab">Pseudo :</label>
                  							<div class="col-lg-3">
                   								<input type="textarea" name="pseudo" class="form-control" id="textarea">
               								</div>
               					</div>
               				</div>
               				<button class="btn btn-dark" type="submit">Envoyer</button>
                      <a href="connexion.php" class="btn btn-primary retour" role="button">Retour</a>
						</fieldset>
					</form>
				</div>
		   	</div>
	  	</div>
   	</div>
	</html><?php include 'footer.php'; ?> <html>
</body>	
</html>