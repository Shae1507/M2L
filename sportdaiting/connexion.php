<?php
session_start();
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
                                    <form action='connexion.php' method='POST'> 
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

    include 'header2.php';

    if (empty($_POST['email']) || empty($_POST['password']) ) //Oublie d'un champ
    {
        ?>

        <script>
               var msg = "Une erreur s\'est produite pendant votre identification. Vous devez remplir tous les champs";
         </script>
        <?php
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
            $_SESSION['email'] = $data['email'];
            $_SESSION['id'] = $data['id'];
            ?><script>var msg = "Bienvenue, vous êtes maintenant connecté!"
           // setTimeout(document.location.href="membres.php", 1000);</script><?php
            sleep(5);
                header("Location: membres.php", true, 303);



            //}

            //else{ $message = '<p>Activez votre compte via l\'email envoyé à cette adresse '.$data['email'].'!</p>'; }

        }
        else // Acces pas OK !
        {
                        
            ?><script>var msg = "Une erreur s\'est produite pendant votre identification.\n Le mot de passe ou l\'email entré n\'est pas correcte."</script><?php
        }
        $query->CloseCursor();
    }
    
    if (isset($_GET['deco'])){
            
    session_destroy(); 
    echo "allloo";
    $message = '<p>Vous avez bien été déconnecté.</p>';
                ?><script>var msg = "<p>Vous avez bien été déconnecté.</p>";
               // setTimeout(document.location.href="index.php", 200);
                </script><?php
                header( "refresh:200;url=index.php" );

    }


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
                                <h3>Informations de connexion</h3>
                                <div class='form-group col-md-6'>
                                    <form action='connexion.php' method='POST'> 
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
?> <script> setTimeout(alert(msg), 300);</script> 