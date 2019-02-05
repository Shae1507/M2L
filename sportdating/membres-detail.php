
        <!--================Frist Main hader Area =================-->
          <?php include 'header2.php'; 
      

        $id = $_GET['id'];
        $query=$bdd->prepare("SELECT *
        FROM membres WHERE id = '$id'"); 
        $query->execute();
        $donnees = $query->fetch(); 

 echo "

        <section class='banner_area profile_banner'>
            <div class='profiles_inners'>
                <div class='container'>
                    <div class='profile_content'>
                        <div class='user_img'>
                            <img class='img-circle' src='". $donnees['avatar'] ."' alt='' style='width: 200px;height: 200px;'>
                        </div>
                        <div class='user_name'>
                            <h3>". $donnees['prenom'] ." ". $donnees['nom'] ."</h3>
                            <h4>". $donnees['age'] ." ans</h4>
                            <ul>
                                <li><a href='#'>". $donnees['ville'] ."</a></li>
                                <li class='dropdown extara'>
                                    
                                    <ul class='dropdown-menu'>
                                       <li>Match</li>
                                        <li>
                                            <div class='circle1'>
                                                <strong></strong>
                                            </div>
                                            <h4>Match</h4>
                                        </li>
                                        <li>
                                            <div class='circle2'>
                                                <strong></strong>
                                            </div>
                                            <h4>Enemy</h4>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class='right_side_content'>
                            <button type='submit' value='LogIn' class='btn form-control login_btn'>Chat<img src='img/comment.png' alt=''></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog grid Area =================-->
        <section class='blog_grid_area'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-9'>
                        <div class='members_profile_inners'>
                            <ul class='nav nav-tabs profile_menu' role='tablist'>
                            
                                <li role='presentation' class='active'><a href='#profile' aria-controls='profile' role='tab' data-toggle='tab'>Profil</a></li>

                                
                            </ul>
                            <div class='tab-content'>
                                <div role='tabpanel' class='tab-pane active fade in' id='profile'>
                                    <div class='profile_list'>
                                        <ul>
                                            <li><a href='#'>Sexe</a></li>
                                            <li><a href='#'>Age</a></li>
                                            <li><a href='#'>Ville</a></li>
                                            <li><a href='#'>Téléphone</a></li>
                                            <li><a href='#'>Email</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href='#'>". $donnees['sexe'] ."</a></li>
                                            <li><a href='#'>". $donnees['age'] ." years old</a></li>
                                            <li><a href='#'>". $donnees['ville'] ."</a></li>";
                                            if ($donnees['catdata'] == 1){
                                            echo "<li><a href='#'>". $donnees['telephone'] ."</a></li>
                                            <li><a href='#'>". $donnees['email'] ."</a></li>";
                                            }
                                            else{
                                                echo "<li><a href='#'>Masqué</a></li>
                                            <li><a href='#'>Masqué</a></li>";
                                            }
                                            echo"
                                        </ul>
                                        <ul>
                                            <li><a href='#'>Sport</a></li>
                                            <li><a href='#'>Niveau</a></li>
                                            <li><a href='#'>Jour</a></li>
                                            <li><a href='#'>Heure</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href='#'>". $donnees['sport'] ."</a></li>
                                            <li><a href='#'>". $donnees['niveau'] ."</a></li>
                                            <li><a href='#'>". $donnees['jour'] ."</a></li>
                                            <li><a href='#'>". $donnees['heure'] ."</a></li>
                                                </ul>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class='members_about_box'>
                                <h4>Ma pratique en quelques mots</h4>
                                <p>". $donnees['descrip'] ."</p>
                            </div>
                        </div>
                    </div>";
                    ?>
                    
                </div>
            </div>
        </section>
        <!--================End Blog grid Area =================-->
        
        <!--================Footer Area =================--> 
<?php include 'footer.php'; ?>