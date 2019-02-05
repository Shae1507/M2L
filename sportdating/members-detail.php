
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
                            <img class='img-circle' src='img/members/single_members.png' alt=''>
                        </div>
                        <div class='user_name'>
                            <h3>". $donnees['prenom'] ." ". $donnees['nom'] ."</h3>
                            <h4>". $donnees['age'] ." years old</h4>
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
                             <ul class='nav navbar-nav'>
                                <li class='dropdown'>
                                  <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='fa fa-ellipsis-h'></i></a>
                                  <ul class='dropdown-menu'>
                                    <li><a href='#'>Action</a></li>
                                    <li><a href='#'>Another action</a></li>
                                    <li><a href='#'>Another action</a></li>
                                    <li><a href='#'>Another action</a></li>
                                  </ul>
                                </li>
                              </ul>
                            <button type='submit' value='LogIn' class='btn form-control login_btn'>Add Friend <img src='img/user.png' alt=''></button>
                            <button type='submit' value='LogIn' class='btn form-control login_btn'>Chat Now <img src='img/comment.png' alt=''></button>
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
                                            <li><a href='#'>Gender</a></li>
                                            <li><a href='#'>Age</a></li>
                                            <li><a href='#'>City</a></li>
                                            <li><a href='#'>Téléphone</a></li>
                                            <li><a href='#'>Email</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href='#'>". $donnees['sexe'] ."</a></li>
                                            <li><a href='#'>". $donnees['age'] ." years old</a></li>
                                            <li><a href='#'>". $donnees['ville'] ."</a></li>
                                            <li><a href='#'>". $donnees['telephone'] ."</a></li>
                                            <li><a href='#'>". $donnees['email'] ."</a></li>
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
                            <div class='members_about_box'>
                                <h4>Je recherche</h4>
                                <p>". $donnees['descrip'] ."</p>
                            </div>
                        </div>
                    </div>";
                    ?>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget photo_widget">
                                <div class="s_title">
                                    <h4>Photo</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/photo/photo-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-3.jpg" alt=""></a></li>
                                </ul>
                            </aside>
                            <aside class="s_widget recent_post_widget">
                                <div class="s_title">
                                    <h4>Recent Post</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Image Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Standard Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Image Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                            </aside>
                            <aside class="s_widget social_widget">
                                <div class="s_title">
                                    <h4>Tags</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog grid Area =================-->
        
        <!--================Footer Area =================--> 
<?php include 'footer.php'; ?>