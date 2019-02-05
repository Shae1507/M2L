
        <!--================Frist Main hader Area =================-->
          <?php include 'header2.php'; ?>
        <!--================Banner Area =================-->



        <section class="banner_area banner_area2">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Members"><img class="left_img" src="img/banner/t-left-img.png" alt="">Membres<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <a href="index.php">Home</a>
                    <a href="#">Membres</a>
                    <div class="advanced_search">
                        <div class="search_inner">
                            <form action="membres.php" method="post">
                            <div class="search_item">
                                <h5>Je recherche à :</h5>
                                <select class="selectpicker" name="choixVille">
                                    <?php 
                                    $query=$bdd->prepare("SELECT * FROM villes");

                                    $query->execute();

                                    while($data=$query->fetch()){
                                        ?>
                                        <option value="<?php echo $data["villes"]; ?>" > <?php echo $data["villes"]; ?> </option>
                                        <?php
                                    } 
                                    ?>
                                </select>
                            </div>
                            <!--<div class="search_item">
                                <h5>Ou dans le : </h5>
                                <select class="selectpicker">
                                    <option>Non défini</option>
                                    <option>54 - Meurthe-et-Moselle</option>
                                    <option>55 - Meuse</option>
                                    <option>57 - Moselle</option>
                                    <option>88 - Vosges</option>
                                </select>
                            </div> -->
                            <div class="search_item">
                                <h5>Pratiquant : </h5>
                                <select class="selectpicker" name="sport">
                                    <option value="Tennis">Tennis</option>
                                    <option value="Football">Football</option>
                                    <option value="Basketball">Basketball</option>
                                    <option value="Rugby">Rugby</option>
                                    <option value="Baseball">Baseball</option>
                                    <option value="Equitation">Equitation</option>
                                    <option value="Aïkido">Aïkido</option>
                                    <option value="Danse">Danse</option>
                                    <option value="Boxe">Boxe</option>
                                    <option value="Canoë">Canoë</option>
                                    <option value="Gymnastique">Gymnastique</option>
                                    <option value="Natation">Natation</option>
                                    <option value="Athlétisme">Athlétisme</option>
                                    <option value="Judo">Judo</option>
                                    <option value="Volley">Volley</option>
                                    <option value="Badmington">Badmington</option>
                                    <option value="Escrime">Escrime</option>
                                    <option value="Karaté">Karaté</option>
                                    <option value="Cyclisme">Cyclisme</option>
                                    <option value="Handball">Handball</option>
                                    <option value="Lutte">Lutte</option>
                                    <option value="Taekwondo">Taekwondo</option>
                                    <option value="TennisDeTable">Tennis de table</option>
                                    <option value="Triathlon">Triathlon</option>
                                    <option value="Yoga">Yoga</option>
                                    <option value="Echecs">Echecs</option>
                                    <option value="Escalade">Escalade</option>
                                    <option value="Course">Course</option>
                                    <option value="Ultimate">Ultimate</option>
                                </select>
                            </div>
                            <br />
                            <div class="search_item">
                                <h5>Avec : </h5>
                                <select class="selectpicker" name="choixPartenaire">
                                    <option value="Indéfini">Indéfini</option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <h5>Le : </h5>
                                <select class="selectpicker" name="jour"">
                                    <option value="Indéfini">Indéfini</option>
                                    <option value="Lundi">Lundi</option>
                                    <option value="Mardi">Mardi</option>
                                    <option value="Mercredi">Mercredi</option>
                                    <option value="Jeudi">Jeudi</option>
                                    <option value="Vendredi">Vendredi</option>
                                    <option value="Samedi">Samedi</option>
                                    <option value="Dimanche">Dimanche</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <button type="submit" value="Connexion" name="Rechercher" class="btn form-control login_btn"> Rechercher </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->


        <?php 

        if(isset($_POST["Rechercher"]))
        {
            $choixVille = $_POST["choixVille"];
            $sport = $_POST["sport"];
            $choixPartenaire = $_POST["choixPartenaire"];
            $jour = $_POST["jour"];


            if($choixVille == "Indéfini")
            {
                if($choixPartenaire == "Indéfini")
                {
                    if($jour == "Indéfini")
                    {
                        $query=$bdd->prepare("SELECT * FROM membres WHERE sport = '$sport' ORDER BY nom");
                        //$query->bindValue(':sport',$_POST['sport'], PDO::PARAM_STR);

                        $query->execute();
                            ?>  
                            <section class="actives_members">
                                <div class="container">
                                    <div class="welcome_title">
                                        <h3>Résultats de la recherche: </h3>
                                        <img src="img/w-title-b.png" alt="">
                                    </div>
                                <div class="row">
                                    <?php while($data=$query->fetch()) {
                                    ?>
                                    <div class="col-sm-2 col-xs-6">
                                        <div class="active_mem_item">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown tool_hover">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <img src=<?php echo $data["avatar"] ?> alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6><?php echo $data["age"] ?> ans<br> <?php echo $data["ville"] ?> <br> <?php echo $data["sport"] ?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                            <h5><?php echo$data["age"] ?></h5>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                            <?php
                    }else {
                        $query=$bdd->prepare("SELECT * FROM membres WHERE sport = '$sport' AND jour = ('$jour' OR 'Indéfini') ORDER BY nom");

                        $query->execute();
                        ?>  
                            <section class="actives_members">
                                <div class="container">
                                    <div class="welcome_title">
                                        <h3>Résultats de la recherche: </h3>
                                        <img src="img/w-title-b.png" alt="">
                                    </div>
                                <div class="row">
                                    <?php while($data=$query->fetch()) {
                                    ?>
                                    <div class="col-sm-2 col-xs-6">
                                        <div class="active_mem_item">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown tool_hover">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <img src=<?php echo $data["avatar"] ?> alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6><?php echo $data["age"] ?> ans<br> <?php echo $data["ville"] ?> <br> <?php echo $data["sport"] ?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                            <h5><?php echo$data["age"] ?></h5>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                            <?php
                    }
                }elseif ($jour =="Indéfini") {
                    $query=$bdd->prepare("SELECT * FROM membres WHERE sport = '$sport' AND sexe = '$choixPartenaire' ORDER BY nom");

                    $query->execute();
                    ?>  
                            <section class="actives_members">
                                <div class="container">
                                    <div class="welcome_title">
                                        <h3>Résultats de la recherche: </h3>
                                        <img src="img/w-title-b.png" alt="">
                                    </div>
                                <div class="row">
                                    <?php while($data=$query->fetch()) {
                                    ?>
                                    <div class="col-sm-2 col-xs-6">
                                        <div class="active_mem_item">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown tool_hover">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <img src=<?php echo $data["avatar"] ?> alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6><?php echo $data["age"] ?> ans<br> <?php echo $data["ville"] ?> <br> <?php echo $data["sport"] ?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                            <h5><?php echo$data["age"] ?></h5>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                            <?php
                }else{
                    $query=$bdd->prepare("SELECT * FROM membres WHERE sport = '$sport' AND sexe = '$choixPartenaire'  AND jour = ('$jour' OR 'Indéfini') ORDER BY nom");

                    $query->execute();
                    ?>  
                            <section class="actives_members">
                                <div class="container">
                                    <div class="welcome_title">
                                        <h3>Résultats de la recherche: </h3>
                                        <img src="img/w-title-b.png" alt="">
                                    </div>
                                <div class="row">
                                    <?php while($data=$query->fetch()) {
                                    ?>
                                    <div class="col-sm-2 col-xs-6">
                                        <div class="active_mem_item">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown tool_hover">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <img src=<?php echo $data["avatar"] ?> alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6><?php echo $data["age"] ?> ans<br> <?php echo $data["ville"] ?> <br> <?php echo $data["sport"] ?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                            <h5><?php echo$data["age"] ?></h5>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                            <?php
                }
            }elseif ($choixPartenaire == "Indéfini") {
                if ($jour == "Indéfini")
                {
                    $query=$bdd->prepare("SELECT * FROM membres WHERE sport = '$sport' AND ville = '$choixVille' ORDER BY nom");

                    $query->execute();
                    ?>  
                            <section class="actives_members">
                                <div class="container">
                                    <div class="welcome_title">
                                        <h3>Résultats de la recherche: </h3>
                                        <img src="img/w-title-b.png" alt="">
                                    </div>
                                <div class="row">
                                    <?php while($data=$query->fetch()) {
                                    ?>
                                    <div class="col-sm-2 col-xs-6">
                                        <div class="active_mem_item">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown tool_hover">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <img src=<?php echo $data["avatar"] ?> alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6><?php echo $data["age"] ?> ans<br> <?php echo $data["ville"] ?> <br> <?php echo $data["sport"] ?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                            <h5><?php echo$data["age"] ?></h5>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                            <?php
                }else {
                    $query=$bdd->prepare("SELECT * FROM membres WHERE sport = '$sport' AND ville = '$choixVille'  AND jour = ('$jour' OR 'Indéfini') ORDER BY nom");

                    $query->execute();
                    ?>  
                            <section class="actives_members">
                                <div class="container">
                                    <div class="welcome_title">
                                        <h3>Résultats de la recherche: </h3>
                                        <img src="img/w-title-b.png" alt="">
                                    </div>
                                <div class="row">
                                    <?php while($data=$query->fetch()) {
                                    ?>
                                    <div class="col-sm-2 col-xs-6">
                                        <div class="active_mem_item">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown tool_hover">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <img src=<?php echo $data["avatar"] ?> alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6><?php echo $data["age"] ?> ans<br> <?php echo $data["ville"] ?> <br> <?php echo $data["sport"] ?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                            <h5><?php echo$data["age"] ?></h5>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                            <?php
                }
            }else {
                $query=$bdd->prepare("SELECT * FROM membres WHERE sport = '$sport' AND sexe = '$choixPartenaire'  AND jour = ('$jour' OR 'Indéfini') AND ville = '$choixVille' ORDER BY nom");

                    $query->execute();
                    ?>  
                            <section class="actives_members">
                                <div class="container">
                                    <div class="welcome_title">
                                        <h3>Résultats de la recherche: </h3>
                                        <img src="img/w-title-b.png" alt="">
                                    </div>
                                <div class="row">
                                    <?php while($data=$query->fetch()) {
                                    ?>
                                    <div class="col-sm-2 col-xs-6">
                                        <div class="active_mem_item">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown tool_hover">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <img src=<?php echo $data["avatar"] ?> alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6><?php echo $data["age"] ?> ans<br> <?php echo $data["ville"] ?> <br> <?php echo $data["sport"] ?></h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                            <h5><?php echo$data["age"]." ans" ?></h5>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </section>
                            <?php
            }
        }
        ?>
        <br />
        <!--================All Members Area =================-->
        <section class="all_members_area">
            <div class="container">
                <div class="welcome_title">
                    <h3>Derniers membres inscrits</h3>
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="row">
                <?php 
                    $query=$bdd->prepare("SELECT * FROM membres");

                    $query->execute();

                    $i=0;
                    while ($data=$query->fetch() and $i < 12) {
                        ?>
                        <div class="col-sm-2 col-xs-6">
                            <div class="all_members_item">
                                <img src=<?php echo $data["avatar"] ?> alt="">
                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                <h5><?php echo $data["sport"] ?></h5>
                            </div>
                        </div>
                        <?php 
                        $i++;
                    }
                ?>
            </div>
        </div>
    </section>
        <!--================End All Members Area =================-->
        
        <!--================Footer Area =================
        <?php //include 'footer.php' ?>-->
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!--RS5.0 Extensions-->
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
  
        <!-- Extra plugin js -->
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="vendors/animate-css/wow.min.js"></script>
        <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootstrap-datepicker/js/moment-with-locales.js"></script>
        <script src="vendors/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/counter-up/waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bs-tooltip/jquery.webui-popover.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        
        <script src="js/video_player.js"></script>
        <script src="js/theme.js"></script>
    </body>

<!-- Mirrored from html.verodate.com/verodate/members.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Apr 2018 14:39:59 GMT -->
</html>