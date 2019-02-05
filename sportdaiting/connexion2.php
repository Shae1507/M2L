<?php
echo $_POST['email'];
echo $_POST['password'];
echo $_SESSION['email'];
if (isset($_SESSION['email']) && empty($_POST['email']) || empty($_POST['password']) && empty($_GET['deco']) ) //On est dans la page de formulaire
{	
      ##  <!--================Frist Main hader Area =================-->

	include 'header2.php';

 ##         <!--================Frist Main hader Area =================-->

		echo "
        
        <!--================Banner Area =================-->
        <section class='banner_area'>
            <div class='container'>
                <div class='banner_content'>
                    <h3 title='Connexion'><img class='left_img' src='img/banner/t-left-img.png' alt=''>Connexion<img class='right_img' src='img/banner/t-right-img.png' alt=''></h3>
                    <a href='index-2.php'>Home</a>
                    <a href='connexion.php'>Connexion</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--==========Check out area==========-->
        <section class='check_out_area'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-8'>
                        <div class='row'>
                            <div class='check_out_left'>
                                <h3>Informations de connexion1</h3>
                                <div class='form-group col-md-6'>
                                    <form action='connexion2.php' method='POST'> 
                                    <input type='email' class='form-control' name='email' placeholder='Email'>
                                </div>

                                    
                                  <div class='form-group col-md-6'>
                                <input type='password' class='form-control' name='password' placeholder='Password'>
                            </div>


                                <div class='form-group col-md-12'>
                                <button type='submit' value='LogIn' class='btn form-control login_btn'>Connexion</button>

                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                                  <div class='order_box'>
                            <h2>Pas encore de compte?</h2>
                            <h3>Trouve ton partenaire idéal!</h3>
                            <div class='samrt_watch'>
                                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </h4>
                              
                            </div>
                            </br>

                            <button type='submit' class='btn login_btn'>Inscris-toi!</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==========End Check out area==========-->
        ";

include 'footer.php'; 
			}	
else
{

	echo 'je rentre ici';

	include 'header2.php';

    if (empty($_POST['email']) || empty($_POST['password']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
		Vous devez remplir tous les champs</p>';
    }

    else //On check le mot de passe
    {
	        $query=$bdd->prepare('SELECT mdp, prenom, id, actif, email
	        FROM membres WHERE email = :email');
	        $query->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
	        $query->execute();
	        $data=$query->fetch();
		if ($data['mdp'] == $_POST['password']) // Acces OK !
		{

			//if($data['actif'] == 1){ // on vérifie si il a bien validé son email

		    $_SESSION['prenom'] = $data['prenom'];
		    $_SESSION['id'] = $data['id'];
		    $message = '<p>Bienvenue '.$data['prenom'].', 
				vous êtes maintenant connecté!</p>';

			//}

			//else{ $message = '<p>Activez votre compte via l\'email envoyé à cette adresse '.$data['email'].'!</p>'; }

		}
		else // Acces pas OK !
		{
		    $message = '<p>Une erreur s\'est produite 
		    pendant votre identification.<br /> Le mot de passe ou l\'email 
	            entré n\'est pas correcte.';
		}
	    $query->CloseCursor();

    }

    if (isset($_GET['deco'])){
	    	
	session_destroy(); 
	echo "allloo";
	$message = '<p>Vous avez bien été déconnecté.</p>';
	

	}

		echo "

		<div id='popup1' class='overlay'>
	<div class='popup'>
		<h2>Here i am</h2>
		<a class='close' href='index.php'>&times;</a>
		<div class='content'>
		</html>" . $message . "<html>
		</div>
	</div>
</div>

        
        <!--================Banner Area =================-->
        <section class='banner_area'>
            <div class='container'>
                <div class='banner_content'>
                    <h3 title='Connexion'><img class='left_img' src='img/banner/t-left-img.png' alt=''>Connexion<img class='right_img' src='img/banner/t-right-img.png' alt=''></h3>
                    <a href='index-2.php'>Home</a>
                    <a href='connexion.php'>Connexion</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--==========Check out area==========-->
        <section class='check_out_area'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-8'>
                        <div class='row'>
                            <div class='check_out_left'>
                                <h3>Informations de connexion2</h3>
                                <div class='form-group col-md-6'>
                                    <form action='traitement.php' method='POST'> 
                                    <input type='email' class='form-control' name='email' placeholder='Email'>
                                </div>

                                    
                                  <div class='form-group col-md-6'>
                                <input type='password' class='form-control' name='mdp' placeholder='Password'>
                            </div>


                                <div class='form-group col-md-12'>
                                <button type='submit' value='LogIn' class='btn form-control login_btn'>Connexion</button>

                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                                  <div class='order_box'>
                            <h2>Pas encore de compte?</h2>
                            <h3>Trouve ton partenaire idéal!</h3>
                            <div class='samrt_watch'>
                                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </h4>
                              
                            </div>
                            </br>

                            <button type='submit' class='btn login_btn'>Inscris-toi!</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==========End Check out area==========-->
        ";

	include 'footer.php';

}
?>