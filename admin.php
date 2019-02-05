<?php include 'header.php';
 include 'acces.php'; 
 ?> <html>
<title>Admin</title>
	      <div class="main">
	      	      <div class="shop_top">
	      			<div class="container">

	    <?php

	    $query=$bdd->prepare('SELECT *
        FROM membres'); 
        $query->execute();

?>
<table class="tftable" border="1">
<tr><th> ID </th><th> Pseudo </th><th> Mdp </th><th> Rang </th><th> Nom </th><th> Prénom </th><th> Email </th><th> Téléphone </th><th> Modifier </th><th> Supprimer </th></tr>
<?php
        while ($donnees = $query->fetch())
        {
	echo "<tr>
					<td>".$donnees["id"]."</td>
					<td>".$donnees["pseudo"]."</td>
					<td>".$donnees["mdp"]."</td>
					<td>".$donnees["rang"]."</td>
					<td>".$donnees["nom"]."</td>
					<td>".$donnees["prenom"]."</td>
					<td>".$donnees["email"]."</td>
					<td>".$donnees["telephone"]."</td>
					<td align='center'><a href='modif.php?id=".$donnees["id"]."'><img src='images/modif.png' width='20' /></a></td>
					<td align='center'><a href='modif.php?id=".$donnees["id"]."&amp;del=1#popup1'><img src='images/supp.png' width='20' /></a></td>
		</tr>";

        }
        echo "</table>";
?>





<div id='modif'>
	<?php echo $donnees["id"]; ?>
</div>




	      			</div>
	      		</div>
	      	</div>











   
	</html><?php include 'footer.php'; ?> <html>
</body>	
</html>