<?php
include 'header.php';
include 'acces.php';
include 'functions.php';

$table = $_GET['table'];

?>
<title>Table</title>
<body>
<div class="container-fluid spaceClass">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 spaceClass">
        <div class="row">
          <div class="col-lg-12 spaceClass">
            <table class="table table-bordered table-striped modif">
             <caption class="membresTable">
              <h4 class="nomTable">Table <?= $table ?></h4>
            </caption>
            <thead>
              <tr class="info">
              	<?php 
              	$information = information($table);
				while($donnees = $information->fetch())
				{
					if($donnees["Key"] == "PRI")
					{
						$PrimaryKey = $donnees["Field"];
					}
				?> 
				<th class="modif"><?php echo $donnees["Field"] ?></th>
				<?php }
				if($table == "formation")
				{
				?>
		 			<th class="modif">Modification</th><th class="modif">Suppression</th><th class="modif">Liste des participants</th>
		 		<?php
				}
				?>
              </tr>
            </thead>
            <tbody>
             <?php
             $res = sqlDynTable($table);
        	 while($donnees = $res->fetch())
        	 {
        	 	$donnees = array_unique($donnees);
        		?>
        		<tr>
					<?php
				foreach ($donnees as $key => $value) {
				if($key == $PrimaryKey)
				{
					$ValuePrimaryKey = $value;
				}
				?>
					<td>
					<?php
					echo $value;
					?>
					</td>
						<?php
					}
					if($table == "formation")
					{
					?>
						<td class="modif">
							<a href="modifFormation.php?table=<?= $_GET["table"] ?>&ValuePrimaryKey=<?= $ValuePrimaryKey ?>"><button class="btn" type="submit" /><i class="glyphicon glyphicon-pencil"></i></button></a>
						</td>
						<td class="modif">
							<a href="modifFormation.php?table=<?= $_GET["table"] ?>&ValuePrimaryKey=<?= $ValuePrimaryKey ?>&del=1"><button class="btn" type="submit" /><i class="glyphicon glyphicon-trash"></i></button></a>
						</td>
						<td class="modif">
							<a href="listeParticipants.php?table=<?= $_GET["table"] ?>&ValuePrimaryKey=<?= $ValuePrimaryKey ?>"><button class="btn" type="submit" /><i class="glyphicon glyphicon-search"></i></button></a>
						</td>
					<?php
					}
					?>
				</tr>
				<?php
        		}
        	?>
            </tbody>
          </table>
        <div class="row">
          <a href="gestionFormation.php" class="btn btn-primary retourTable" role="button">Retour</a>
        </div>
        </div>
      </div>
  	</div>
  </div>
</div>
</body>
<?php
include 'footer.php';
?>