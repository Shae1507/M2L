
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
                                    <?php 
                                    $query=$bdd->prepare("SELECT * FROM sports");

                                    $query->execute();

                                    while($data=$query->fetch()){
                                        ?>
                                        <option value="<?php echo $data["sports"]; ?>" > <?php echo $data["sports"]; ?> </option>
                                        <?php
                                    } 
                                    ?>
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
                                                <a href="membres-detail.php?id="<?php echo $data["id"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $data["avatar"] ?>" alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
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
                                            <h5><?php echo$data["age"] ?> ans</h5>
                                            <p><a href="membres-detail.php?id=<?php echo $data["id"] ?>">Voir la fiche</a></p>
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
                                                <a href="membres-detail.php?id="<?php echo $data["id"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
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
                                                <a href="membres-detail.php?id="<?php echo $data["id"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
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
                                                <a href="membres-detail.php?id="<?php echo $data["id"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
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
                                                <a href="membres-detail.php?id="<?php echo $data["id"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
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
                                                <a href="membres-detail.php?id="<?php echo $data["id"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
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
                                                <a href="membres-detail.php?id="<?php echo $data["id"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src=<?php echo $data["avatar"] ?> alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
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
        <section class="actives_members">
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
                                        <div class="active_mem_item">
                                            <ul class="nav navbar-nav">
                                                <li class="dropdown tool_hover">
                                                <a href="membres-detail.php?id="<?php echo $data["id"] ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $data["avatar"] ?>" alt=""></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <div class="head_area">
                                                                <h4><?php echo $data["prenom"]." ".$data["nom"] ?></h4>
                                                            </div>
                                                            <div class="media">
                                                                <div class="media-left">
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
                        <?php 
                        $i++;
                    }
                ?>
            </div>
        </div>
        <br />
        <br />
    </section>
        <!--================End All Members Area =================-->
        
        <!--================Footer Area =================-->
        <?php include 'footer.php' ?>
        <!--================End Footer Area =================-->
        
        
        
     