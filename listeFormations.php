<?php 
include 'header.php';
include 'access2.php';

$con = new PDO('mysql:host=localhost;dbname=gestion_formations;charset=utf8', 'root', '');
$pseudo = $_SESSION["pseudo"];
$query=$con->prepare("SELECT * FROM formation, participant where participant.pseudo = '$pseudo' AND participant.id_formation = formation.id_formation"); 
        $query->execute();
?>
<title>Liste formations</title>
<body>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="row">
          <div class="col-lg-12 spaceClass">
            <table class="table table-bordered table-striped">
             <caption class="membresTable">
              <h4 class="nomTable">Les formations auxquelles vous êtes inscrit</h4>
            </caption>
            <thead>
              <tr class="info">
              	<th class="cachee">Id</th>
                <th class="modif"> Description </th>
                <th class="modif">Date de début</th>
                <th class="modif">Date de fin</th>
                <th class="modif">Coût (en euros)</th>
              </tr>
            </thead>
            <tbody>
             <?php
        		while ($donnees = $query->fetch())
        		{
        		?><tr class="modif">
        			<td class="cachee"><?=$donnees["id_formation"] ?></td>
					<td><?=$donnees["description"]?></td>
					<td><?=$donnees["debut_cours"]?></td>
					<td><?=$donnees["fin_cours"]?></td>
					<td><?=$donnees["cout"]?></td>
				</tr>
				<?php
        		}
        	?>
            </tbody>
          </table>
        <div class="row">
          <a href="formations.php" class="btn btn-primary retourTable" role="button">Retour</a>
        </div>
        </div>
      </div>
  	</div>
  </div>
</div>
<br/><br/><br/>
</body>
<?php 
include 'footer.php'; 
?>