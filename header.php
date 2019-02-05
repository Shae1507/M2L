<?php
session_start();
if (isset($_SESSION['pseudo']))	{
		$data['pseudo'] = $_SESSION['pseudo'] ;
	    $data['rang'] = $_SESSION['rang'] ;
	     $data['id'] = $_SESSION['id'] ;

}

$bdd = new PDO('mysql:host=localhost;dbname=m2l_bd1;charset=utf8', 'root', '');

 ?>


 <!DOCTYPE HTML>
<html>
<head>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel='stylesheet' href='css/popup.css'>
<link href="css/circle.css" rel='stylesheet' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script type="text/javascript" src="js/scroll_partenaires.js"></script>

</head>
<body> 

<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header-left">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=""/></a>
					</div>
					<div class="menu">
						<a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li>
						    		<div class="dropdown">
 										<button class="dropbtn">Présentation</button>
  											<div class="dropdown-content">
    											<a href="presentation.php">La M2L</a>
    											<a href="locaux.php">Locaux</a>
    											<a href="materiels.php">Matériels</a>
    											<a href="ligues.php">Les ligues</a>
    											<a href="juridique.php">Statut juridique</a>
    											<a href="e4.php">Epreuve E4</a>
  											</div>
									</div>
								</li>
						    	<li>
						    		<div class="dropdown">
 										<button class="dropbtn">Services</button>
  											<div class="dropdown-content">
  												<a href="services.php">Prestations</a>
  											</div>
									</div>
								</li>
						    	<li>
						    		<div class="dropdown">
 										<button class="dropbtn">Nos équipes</button>
  											<div class="dropdown-content">
  												<a href="team.php">Présentation</a>
    											<a href="recrutement.php">Recrutement</a>
  											</div>
									</div>
								</li>
								<li>
									<a href="contact.php">Contact</a>
								</li>
							</ul>
					</div>
				</div>
					<?php if(isset($_SESSION['pseudo'])) { 
						?>
						<p style="color: grey; font-style: italic; text-align: right; margin-top: 2.5em;">Connecté</p> <?php ; 
						} else { 
							?> <p style="color: grey;font-style: italic; text-align: right; margin-top: 2.5em;">Déconnecté</p> <?php ;
						}
					?>
	    	</div>				
		</div>
	</div>
</div>
