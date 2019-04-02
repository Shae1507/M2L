<?php
include'header.php';
include 'functions.php';

if(isset($_POST["sauvegarde"])) {
	$id = $_POST["id_annonce"];
	$_SESSION["save"][] = $id;
}
?>
<div class="container">
	<div class="row">
		  <h3 style="text-align: center; padding-top: 3em; padding-bottom: 15px;">Les petites annonces de voitures</h3>
	</div>
	<div class="row">
		<div class="col-lg-12" style="padding-top: 1em;">
			<form class="well" action="rechercheAnnonce.php" method="POST">
            <h4>Rechercher</h4>
            <fieldset>
              <div class="row partForm">
                <div class="form-group">
                  <label for="select" class="col-lg-2 control-label">Couleur: </label>
                  <div class="col-lg-2">
                    <select class="form-control" name="couleur">
                    	<option value=""></option>
                      <?php
						$con = new PDO('mysql:host=localhost;dbname=m2l_bd1;charset=utf8', 'root', '');
						$req = $con->prepare("SELECT distinct couleur from annonce");
						$req->execute();
						var_dump($req);
						while($ligne = $req->fetch())
						{
						?>
							<option value="<?= $ligne["couleur"]; ?>" > <?php echo $ligne["couleur"]; ?> </option>

						<?php
						}
						?>
                    </select>
                  </div>
                  <label for="select" class="col-lg-2 col-lg-offset-1 control-label">Marque: </label>
                  <div class="col-lg-2">
                    <select class="form-control" name="marque">
                    	<option value=""></option>
                      <?php
						$con = new PDO('mysql:host=localhost;dbname=m2l_bd1;charset=utf8', 'root', '');
						$req = $con->prepare("SELECT distinct marque from annonce");
						$req->execute();
						while($ligne = $req->fetch())
						{
						?>
							<option value="<?= $ligne["marque"]; ?>" > <?php echo $ligne["marque"]; ?> </option>

						<?php
						}
						?>
                    </select>
                  </div>
                </div>
              </div>
              <br>
              <button class="btn btn-primary" type="submit" name="envoyer">Envoyer</button>
            </fieldset>
          </form>
		</div>
	</div>
	<?php 
	if (isset($_POST['envoyer'])){

	$couleur = $_POST["couleur"];
	$marque = $_POST["marque"];

	$con = new PDO('mysql:host=localhost;dbname=m2l_bd1;charset=utf8', 'root', ''); 
	$query = $con->prepare("SELECT * from annonce WHERE couleur = '$couleur' AND marque = '$marque'");
	$query->execute();
	$count = $query->rowCount();
	
	?>
	<div class="row">
		<div class="col-lg-12">
		  <h3 style="text-align: center; padding-top: 1em; padding-bottom: 3em;">Resultats</h3>
          <section class="row">
			<?php
				if($count < 1)
				{
				?>
					<p>Il n'y a pas de résultats pour cette recherche.</p>
				<?php
				}
				while($ligne = $query->fetch())
				{
					?>
            		<div class="col-lg-4">
            			<form action="rechercheAnnonce.php" method="POST">
            			<div class="jumbotron">
                			<p class="display-4"> <?= $ligne["type"] ?></p>
                			<p class="lead"> <?= $ligne["couleur"]?></p>
                			<p> <?= $ligne["marque"] ?></p>
                			<input type="hidden" name="id_annonce" value="<?= $ligne["id_annonce"] ?>" />
                			<button class="btn btn-primary" type="submit" name="sauvegarde">Sauvegarder</button>
                		</div>
                		</form>
           		 	</div>
           		 	<?php
				}
			?>
		</section>
		</div>
	</div>
	<?php 
	}
	?>
	<hr class="my-4">
	<div class="row">
		<div class="col-lg-12">
		  <h3 style="text-align: center; padding-top: 1em; padding-bottom: 3em;">Dernières annonces pour voitures publiées</h3>
          <section class="row">
			<?php
				$req = annonces();
				$i = 0;
				while($donnees = $req->fetch() and $i < 3)
				{
					?>
            		<div class="col-lg-4">
            			<form action="rechercheAnnonce.php" method="POST">
            			<fieldset>
            			<div class="jumbotron">
                			<p class="display-4" name="type" value="<?= $donnees["type"] ?>"> <?= $donnees["type"] ?></p>
                			<p class="lead" name="couleur" value="<?= $donnees["couleur"]?>"> <?= $donnees["couleur"]?></p>
                			<p name="marque" value="<?= $donnees["marque"] ?>"> <?= $donnees["marque"] ?></p>
                			<input type="hidden" name="id_annonce" value="<?= $ligne["id_annonce"] ?>" />
                			<button class="btn btn-primary" type="submit" name="sauvegarde">Sauvegarder</button>
                		</div>
                		</fieldset>
                		</form>
           		 	</div>
           		 	<?php
					$i = $i +1;
				}
			?>
		</section>
		</div>
	</div>
	<?php
	if(isset($_SESSION["save"]))
	{
		?>
		<div class="row">
			<div class="col-lg-12">
				<h3 style="text-align: center; padding-top: 1em; padding-bottom: 3em;">Vos annonces sauvegardées</h3>
				<section class="row">
				<?php
				foreach ($_SESSION["save"] as $key)
				{
					?>
            		<div class="col-lg-4">
            			<fieldset>
            			<div class="jumbotron">
                			<input type="hidden" name="id_annonce" value="<?= $key ?>" /><?= $key ?>
                		</div>
                		</fieldset>
           		 	</div>
           		 	<?php
				
				}
				?>
				</section>
			</div>
		</div> 
		<?php
	}
	?>
</div>
<?php
include 'footer.php';
?>