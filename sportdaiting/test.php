          <?php include 'header2.php'; 
      

        $id = $_GET['id'];
        $query=$bdd->prepare("SELECT *
        FROM membres WHERE id = '$id'"); 
        $query->execute();
        $donnees = $query->fetch(); 

        echo $donnees['sexe'];
        echo "$id";