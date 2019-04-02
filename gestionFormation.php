<?php
include 'header.php';
include 'acces.php';
include 'functions.php';


?>

<title>Formations</title>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="row">
          <div class="col-lg-12 spaceClass">
            <table class="table table-bordered table-striped tabNomsTables">
             <caption class="membresTable">
              <h4 class="nomTable">Gestion des formations</h4>
            </caption>
            <thead>
              <tr class="info">
                <th class="tabNomsTables">Nom de la table</th>
              </tr>
            </thead>
            <tbody>
             <?php
             	$req = show();
        		while ($donnees = $req->fetch())
        		{
        		?><tr>
					<td><a class="aNomTable" href="tables.php?table=<?= $donnees["Tables_in_gestion_formations"] ?>"><?=$donnees["Tables_in_gestion_formations"]?></a></td>
				</tr>
				<?php
        		}
        	?>
            </tbody>
          </table>
        <div class="row">
          <a href="index.php" class="btn btn-primary retourTable" role="button">Retour</a>
        </div>
        </div>
      </div>
      <div class="space">
      </div>
  	</div>
  </div>
  <br />
</div>
</body>
<?php 
include 'footer.php'; 
?>