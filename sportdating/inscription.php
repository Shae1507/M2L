
    
        <!--================Frist Main hader Area =================-->
        <?php include 'header2.php'; ?>
        <!--================Frist Main hader Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Inscription"><img class="left_img" src="img/banner/t-left-img.png" alt="">Inscription<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <a href="index.php">Home</a>
                    <a href="inscription.php">Inscription</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--==========Check out area==========-->
        <section class="check_out_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="check_out_left">
                                <h3>Informations personnelles</h3>
                                 <form action="traitement.php?new=1" method="POST"> 
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="prenom" placeholder="Prénom">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="telephone" placeholder="Téléphone">
                                </div>

                                  <div class="form-group col-md-6">
                                <input type="password" class="form-control" name="mdp" placeholder="Password">
                            </div>
                                 <div class="form-group col-md-6">
                                    <select class="selectpicker" name="sexe">
                                        <option>Sexe</option>
                                        <option>Homme</option>
                                        <option>Femme</option>
                                        <option>Autre</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="age" placeholder="Age">
                                </div>

                                        <div class="form-group col-md-6">
                                    <select class="selectpicker" name="ville">
                                        <option>Ville</option>
                                  <option value="Algrange">Algrange</option>
                                    <option value="Amnéville">Amnéville</option>
                                    <option value="Ars-sur-Moselle">Ars-sur-Moselle</option>
                                    <option value="Audun-le-Tiche">Audun-le-Tiche</option>
                                    <option value="Baccarat">Baccarat</option>
                                    <option value="Bar-le-Duc">Bar-le-Duc</option>
                                    <option value="Behren-les-Forbach">Behren-les-Forbach</option>
                                    <option value="Bitche">Bitche</option>
                                    <option value="Blénod-les-Pont-à-Mousson">Blénod-les-Pont-à-Mousson</option>
                                    <option value="Boulay-Moselle">Boulay-Moselle</option>
                                    <option value="Bouxières-aux-Dames">Bouxières-aux-Dames</option>
                                    <option value="Bouzonville">Bouzonville</option>
                                    <option value="Capavenir">Capavenir Vosges</option>
                                    <option value="Champigneulles">Champigneulles</option>
                                    <option value="Charmes">Charmes</option>
                                    <option value="Commercy">Commercy</option>
                                    <option value="Creutzwald">Creutzwald</option>
                                    <option value="Dieulouard">Dieulouard</option>
                                    <option value="Dombasle-sur-Meurthe">Dombasle-sur-Meurthe</option>
                                    <option value="Ecrouves">Ecrouves</option>
                                    <option value="Epinal">Epinal</option>
                                    <option value="Essey-les-Nancy">Essey-les-Nancy</option>
                                    <option value="Fameck">Fameck</option>
                                    <option value="Farébersviller">Farébersviller</option>
                                    <option value="Faulquemont">Faulquemont</option>
                                    <option value="Florange">Florange</option>
                                    <option value="Folschviller">Folschviller</option>
                                    <option value="Forbach">Forbach</option>
                                    <option value="Freyming-Merlebach">Freyming-Merlebach</option>
                                    <option value="Frouard">Frouard</option>
                                    <option value="Gérardmer">Gérardmer</option>
                                    <option value="Golbey">Golbey</option>
                                    <option value="Guenange">Guenange</option>
                                    <option value="Hagondange">Hagondange</option>
                                    <option value="Hayange">Hayange</option>
                                    <option value="Heillecourt">Heillecourt</option>
                                    <option value="Herserange">Herserange</option>
                                    <option value="Hettange-Grande">Hettange-Grande</option>
                                    <option value="Hombourg-Haut">Hombourg-Haut</option>
                                    <option value="Homécourt">Homécourt</option>
                                    <option value="Jarny">Jarny</option>
                                    <option value="Jarville-la-Malgrange">Jarville-la-Malgrange</option>
                                    <option value="Joeuf">Joeuf</option>
                                    <option value="LaBresse">La Bresse</option>
                                    <option value="Laxou">Laxou</option>
                                    <option value="LeBan-Saint-Martin">Le Ban-Saint-Martin</option>
                                    <option value="LeVal-d'Ajol">Le Val-d'Ajol</option>
                                    <option value="L'Hopital">L'Hôpital</option>
                                    <option value="Ligny-en-Barrois">Ligny-en-Barrois</option>
                                    <option value="Liverdun">Liverdun</option>
                                    <option value="Longuyon">Longuyon</option>
                                    <option value="Longwy">Longwy</option>
                                    <option value="Ludres">Ludres</option>
                                    <option value="Lunéville">Lunéville</option>
                                    <option value="Maizières-les-Metz">Maizières-les-Metz</option>
                                    <option value="Malzéville">Malzéville</option>
                                    <option value="Marange-Silvange">Marange-Silvange</option>
                                    <option value="Marly">Marly</option>
                                    <option value="Maxéville">Maxéville</option>
                                    <option value="Metz">Metz</option>
                                    <option value="Mirecourt">Mirecourt</option>
                                    <option value="Mondelange">Mondelange</option>
                                    <option value="Montigny-les-Metz">Montigny-les-Metz</option>
                                    <option value="Mont-Saint-Martin">Mont-Saint-Martin</option>
                                    <option value="Moulin-les-Metz">Moulin-les-Metz</option>
                                    <option value="Moyeuvre-Grande">Moyeuvre-Grande</option>
                                    <option value="Nancy">Nancy</option>
                                    <option value="Neufchâteau">Neufchâteau</option>
                                    <option value="Neuves-Maisons">Neuves-Maisons</option>
                                    <option value="Nilvange">Nilvange</option>
                                    <option value="Pagny-sur-Moselle">Pagny-sur-Moselle</option>
                                    <option value="Petite-Rosselle">Petite-Rosselle</option>
                                    <option value="Phalsbourg">Phalsbourg</option>
                                    <option value="Pompey">Pompey</option>
                                    <option value="Pont-à-Mousson">Pont-à-Mousson</option>
                                    <option value="Pulnoy">Pulnoy</option>
                                    <option value="Rambervillers">Rambervillers</option>
                                    <option value="Raon-l'Etape">Raon-l'Etape</option>
                                    <option value="Remiremont">Remiremont</option>
                                    <option value="Rombas">Rombas</option>
                                    <option value="Saint-Avold">Saint-Avold</option>
                                    <option value="Saint-Dié-des-Vosges">Saint-Dié-des-Vosges</option>
                                    <option value="Saint-Max">Saint-Max</option>
                                    <option value="Saint-Mihiel">Saint-Mihiel</option>
                                    <option value="Saint-Nabord">Saint-Nabord</option>
                                    <option value="Saint-Nicolas-de-Port">Saint-Nicolas-de-Port</option>
                                    <option value="Sarralbe">Sarralbe</option>
                                    <option value="Sarrebourg">Sarrebourg</option>
                                    <option value="Sarreguemines">Sarreguemines</option>
                                    <option value="Seichamps">Seichamps</option>
                                    <option value="Seremange-Erzange">Seremange-Erzange</option>
                                    <option value="Stiring-Wendel">Stiring-Wendel</option>
                                    <option value="Talange">Talange</option>
                                    <option value="Terville">Terville</option>
                                    <option value="Thionville">Thionville</option>
                                    <option value="Tomblaine">Tomblaine</option>
                                    <option value="Toul">Toul</option>
                                    <option value="Uckange">Uckange</option>
                                    <option value="Val-de-Briey">Val-de-Briey</option>
                                    <option value="Vandoeuvre-les-Nancy">Vandoeuvre-les-Nancy</option>
                                    <option value="Verdun">Verdun</option>
                                    <option value="Villers-les-Nancy">Villers-les-Nancy</option>
                                    <option value="Villerupt">Villerupt</option>
                                    <option value="Vittel">Vittel</option>
                                    <option value="Woippy">Woippy</option>
                                    <option value="Yutz">Yutz</option>
                                    </select>
                                </div>



                                </br><h3>Informations sportives</h3>

                                    <div class="form-group col-md-6">
                                    <select class="selectpicker" name="sport">
                                        <option>Sport</option>
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

                                <div class="form-group col-md-6">
                                    <select class="selectpicker" name="niveau">
                                        <option>Niveau</option>
                                        <option>Debutant</option>
                                        <option>Intermediaire</option>
                                        <option>Expert</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <select class="selectpicker" name="jour">
                                        <option>Jour</option>
                                        <option>Lundi</option>
                                        <option>Mardi</option>
                                        <option>Mercredi</option>
                                        <option>Jeudi</option>
                                        <option>Vendredi</option>
                                        <option>Samedi</option>
                                        <option>Dimanche</option>
                                    </select>
                                </div>

                                                                <div class="form-group col-md-6">
                                    <select class="selectpicker" name="heure">
                                        <option>Tranche horraire</option>
                                        <?php for($i=0;$i < 24;$i++){
                                        echo '<option> '.$i.'/';
                                        $i++; echo ''.$i.'h</option>';
                                        $i--;
                                        } ?>
                                    </select>
                                </div>


                                <div class="form-group col-md-12">
                                    
                                    <textarea class="form-control" rows="1" placeholder="Quel genre de partenaire recherches-tu?" name="descrip"></textarea>
                                </div>

                                     <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="avatar" placeholder="Lien de votre avatar">
                                </div>

                            <div class="form-group col-md-6">
                              <iframe src="http://www.hostingpics.net/iframe_mini.php" width="400" height="100" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                            </div>

                                    <input type="checkbox" id="f-option" name="catdata" value="1" checked="1">
                                    <label for="f-option">Afficher mon numéro et mon adresse courriel sur mon profil.</label>
                                    <div class="check">
                                    </div>

                                <button type="submit" value="LogIn" class="btn form-control login_btn">Envoyer</button>

                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!--==========End Check out area==========-->
        
        <!--================Footer Area =================-->
<?php include 'footer.php'; ?>
        <!--================End Footer Area =================-->
