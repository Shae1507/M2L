<?php 
include 'header.php';
include 'access2.php';
include 'functions.php';

$query= formations();
?>
<title>Formations</title>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-bordered table-striped modif">
             <caption class="membresTable">
              <h4 class="nomTable">Les formations disponibles</h4>
            </caption>
            <thead>
              <tr class="info">
              	<th class="cachee">Id</th>
                <th class="modif"> Description </th>
                <th class="modif">Date de début</th>
                <th class="modif">Date de fin</th>
                <th class="modif">Coût (en euros)</th>
                <th class="modif">S'inscrire</th>
              </tr>
            </thead>
            <tbody>
             <?php
        		while ($donnees = $query->fetch())
        		{
        		?><tr>
        			<td class="cachee"><?=$donnees["id_formation"] ?></td>
					<td><?=$donnees["description"]?></td>
					<td><?=$donnees["date_debut"]?></td>
					<td><?=$donnees["date_fin"]?></td>
					<td><?=$donnees["cout"]?></td>
					<td class="btnInscription"><form action="inscriptFormation.php?id_formation=<?= $donnees["id_formation"] ?>" method="post"><button class="btn" name="envoyer"><i class="glyphicon glyphicon-check"></i></button></form></td>
				</tr>
				<?php
        		}
        	?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
      	<div class="col-lg-offset-1 col-lg-10">
      		<p class="inscrire"><a href="listeFormations.php">Consultez les formations auxquelles vous êtes inscrit</a></p> 
      	</div>
      </div>
  	</div>
  </div>
</div>
</body>
<?php 
include 'footer.php'; 
?>