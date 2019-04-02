<?php
include 'functions.php';
?>
<div class="container">
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
            			<div class="jumbotron">
                			<p class="display-4"> <?= $donnees["type"] ?></p>
                			<p class="lead"> <?= $donnees["couleur"]?></p>
                			<p> <?= $donnees["marque"] ?></p>
                		</div>
           		 	</div>
           		 	<?php
					$i = $i +1;
				}
			?>
		</section>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<p>Pour voir toutes les annonces, cliquer <a href="rechercheAnnonce.php">ici</a></p>
		</div>
	</div>
</div>