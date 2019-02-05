<?php include 'header.php';
 include 'acces.php'; 

	    $query=$bdd->prepare('SELECT *
        FROM membres'); 
        $query->execute();

		?>
<title>Admin</title>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-bordered table-striped">
             <caption class="membresTable">
              <h4 class="nomTable">Les membres</h4>
            </caption>
            <thead>
              <tr class="info">
                <th> ID </th>
				<th> Pseudo </th>
				<th> Mdp </th>
				<th> Rang </th>
				<th> Nom </th>
				<th> Prénom </th>
				<th> Email </th>
				<th> Téléphone </th>
				<th> Modifier </th>
				<th> Supprimer </th>
              </tr>
            </thead>
            <tbody>
             <?php
        		while ($donnees = $query->fetch())
        		{
        		?><tr>
					<td><?=$donnees["id"]?></td>
					<td><?=$donnees["pseudo"]?></td>
					<td><?=$donnees["mdp"]?></td>
					<td><?=$donnees["rang"]?></td>
					<td><?=$donnees["nom"]?></td>
					<td><?=$donnees["prenom"]?></td>
					<td><?=$donnees["email"]?></td>
					<td><?=$donnees["telephone"]?></td>
					<td align='center'><a href='modif.php?id=<?=$donnees["id"]?>'><img src='images/modif.png' width='20' /></a></td>
					<td align='center'><a href='modif.php?id=<?=$donnees["id"]?>&del=1'><img src='images/supp.png' width='20' /></a></td>
				</tr>
				<?php
        		}
        	?>
            </tbody>
          </table>
        </div>
      </div>
  	</div>
  </div>
</div>

<?php include 'footer.php'; ?>