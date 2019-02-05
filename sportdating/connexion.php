<?php
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
                    <a href='index.php'>Home</a>
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
                                <button href='connexion.php' type='submit' value='LogIn' class='btn form-control login_btn'>Connexion</button>

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
                                <h4>Sos Partenaire est un site de rencontre qui vous permet de trouver les personnes qui pratiquent le même sport que vous dans les alentours. </h4>
                              
                            </div>
                            </br>

                           <a href='inscription.php'> <button type='submit' class='btn form-control login_btn'> Inscris-toi!</button></a>
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
            ?>

            <script>var msg = "Bienvenue, vous êtes maintenant connecté!";
               var redir = "membres.php";
            </script>
            <?php
        }   
        else // Acces pas OK !
        {
                        
            ?><script>var msg = "Une erreur s\'est produite pendant votre identification.\n Le mot de passe ou l\'email entré n\'est pas correcte.";
            var redir = "connexion.php";</script><?php
        }
        $query->CloseCursor();
    }
    
    if (isset($_GET['deco'])){
            
    session_destroy(); 
    $message = 'Vous avez bien été déconnecté.';
                ?><script>var msg = "Vous avez bien été déconnecté.";
                var redir = "index.php";
                </script><?php
    }


        echo "
        
        <!--================Banner Area =================-->
        <section class='banner_area'>
            <div class='container'>
                <div class='banner_content'>
                    <h3 title='Connexion'><img class='left_img' src='img/banner/t-left-img.png' alt=''>Connexion<img class='right_img' src='img/banner/t-right-img.png' alt=''></h3>
                    <a href='index.php'>Home</a>
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
                                <button href='connexion.php' type='submit' value='LogIn' class='btn form-control login_btn'>Connexion</button>

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
                                <h4>Sos Partenaire est un site de rencontre qui vous permet de trouver les personnes qui pratiquent le même sport que vous dans les alentours. </h4>
                              
                            </div>
                            </br>

                           <a href='inscription.php'>  <button type='submit' class='btn login_btn'>Inscris-toi!</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==========End Check out area==========-->
        ";

    include 'footer.php';

}


echo '<script type="text/javascript"> alert(msg); window.location.href = redir; </script>';

?>