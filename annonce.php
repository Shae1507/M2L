<?php 
    		 	$bdd = new PDO('mysql:host=localhost;dbname=m2l_bd1;charset=utf8', 'root', ''); ?>

<!DOCTYPE html>
<html>
<head>
	<title>annonce</title>
	<meta charset="utf-8">
</head>
<body>


<div>
    <form action="annonce.php" method="post">
    	<div class="search_item">
    		 <h5>Je recherche une :</h5>
    		 <select name="choixMarque">
    		 	<?php 
    		 	$query=$bdd->prepare("SELECT distinct marque FROM annonce");

                $query->execute();

                while($data=$query->fetch()){
                ?>
                 <option value="<?php echo $data["marque"]; ?>" > <?php echo $data["marque"]; ?> </option>
                 <?php
                } 
                ?>
             </select>
           </div>
           <div>
           	<h5>Dans la région :</h5>
           	<select name="choixRegion">
           		<?php
				$query=$bdd->prepare("SELECT distinct region FROM annonce");

                $query->execute();

                while($data=$query->fetch()){
                ?>
                 <option value="<?php echo $data["region"]; ?>" > <?php echo $data["region"]; ?> </option>
                 <?php
                } 
                ?>
             </select>
           </div>
           <div>
           	<h5>De couleur:</h5>
           	<select name="choixCouleur">
    		 	<?php 
    		 	$query=$bdd->prepare("SELECT distinct couleur FROM annonce");

                $query->execute();


                while($data=$query->fetch()){
                ?>
                 <option value="<?php echo $data["couleur"]; ?>" > <?php echo $data["couleur"]; ?> </option>
                 <?php
                } 
                ?>
             </select>
           </div>
           <br />
            <div class="search_item">
                                <button type="submit" value="Connexion" name="Rechercher" class="btn form-control login_btn"> Rechercher </button>
            </div>
    </form>
 </div>    
 <?php 

        if(isset($_POST["Rechercher"]))
        {
        	$choixMarque = $_POST["choixMarque"];
            $choixRegion = $_POST["choixRegion"];
            $choixCouleur = $_POST["choixCouleur"];

            echo $choixMarque;
            echo $choixRegion;
            echo $choixCouleur;
            echo "SELECT * FROM annonce WHERE marque = '$choixMarque' AND region = '$choixRegion' AND couleur ='$choixCouleur'";
            $query=$bdd->prepare("SELECT * FROM annonce WHERE marque = '$choixMarque' AND region = '$choixRegion' AND couleur ='$choixCouleur'");

           	$query->execute();
            $count = $query->rowCount();
            ?>
            <div>
              <h3>Résultats de la recherche: </h3>
            </div>

            <?php
            if($count > 0)
            { 
            	while($data=$query->fetch()) {
            ?>
            <div class="main">
	      	  <div class="shop_top">
	      			<div class="container">
	      				<p class="western" style="text-align: justify; font-family: Calibri, sans-serif; border-width: 2px; border-style: dotted; padding-left: 5px; padding-right: 5px;">
	      					<br />
	      					<p><?php echo $data["texte"] ?></p> 
	      				</p>
				</div>
			</div>
           <?php
       			}
       		}
       		else {
       			?>
       			<p>Il n'y a pas d'annonce qui corresponde à vos critères.</p>
       			<?php
       		}
        }


 ?>                   
</body>
</html>