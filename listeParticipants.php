<?php 
include 'header.php';
include 'access2.php';
include 'functions.php';

$id_formation = $_GET["ValuePrimaryKey"];
$table = $_GET["table"];

$nomFormation = nomFormation($id_formation);
$nomFormation = $nomFormation->fetch();

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
              <h4 class="nomTable">Les inscrits de la formation <?= $nomFormation["description"]?></h4>
            </caption>
            <thead>
              <tr class="info">
                <th class="modif"> Id participant </th>
                <th class="modif">Formation effectuée ?</th>
                <th class="modif">Pseudo</th>
              </tr>
            </thead>
            <tbody>
             <?php
            $query = listeParticipants($id_formation);
        		while ($donnees = $query->fetch())
        		{
        		?><tr class="modif">
					<td><?=$donnees["id_participant"]?></td>
					<td><?=$donnees["effectuee"]?></td>
					<td><?=$donnees["pseudo"]?></td>
				</tr>
				<?php
        		}
        	?>
            </tbody>
          </table>
        <div class="row">
          <a href="tables.php?table=formation" class="btn btn-primary retourTable" role="button">Retour</a>
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