<?php 
include 'header.php';
include 'access2.php';

$con = new PDO('mysql:host=localhost;dbname=gestion_formations;charset=utf8', 'root', '');

$query=$con->prepare('SELECT * FROM formation'); 
        $query->execute();
?>
<title>Formations</title>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-bordered table-striped">
             <caption class="membresTable">
              <h4 class="nomTable">Les formations disponibles</h4>
            </caption>
            <thead>
              <tr class="info">
              	<th class="cachee">Id</th>
                <th> Description </th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Coût (en euros)</th>
                <th>S'inscrire</th>
              </tr>
            </thead>
            <tbody>
             <?php
        		while ($donnees = $query->fetch())
        		{
        		?><tr>
        			<td class="cachee"><?=$donnees["id_formation"] ?></td>
					<td><?=$donnees["description"]?></td>
					<td><?=$donnees["debut_cours"]?></td>
					<td><?=$donnees["fin_cours"]?></td>
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