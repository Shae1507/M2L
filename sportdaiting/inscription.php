
    
        <!--================Frist Main hader Area =================-->
        <?php include 'header2.php'; ?>
        <!--================Frist Main hader Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Inscription"><img class="left_img" src="img/banner/t-left-img.png" alt="">Inscription<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <a href="index-2.php">Home</a>
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
                                 <form action="traitement.php" method="POST"> 
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
                                    <input type="text" class="form-control" name="ville" placeholder="Ville">
                                </div>

                                </br><h3>Informations sportives</h3>

                                    <div class="form-group col-md-6">
                                    <select class="selectpicker" name="sport">
                                        <option>Sport</option>
                                        <option>Course</option>
                                        <option>Rugby</option>
                                        <option>Lutte</option>
                                        <option>Natation</option>
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
                                        <option>Dhaka</option>
                                        <option>Mirpur</option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    
                                    <textarea class="form-control" rows="1" placeholder="Quel genre de partenaire recherches-tu?" name="descrip"></textarea>
                                </div>

                                <div class="reg_chose col-md-6form-group">
                              <iframe src="http://www.hostingpics.net/iframe_mini.php" width="400" height="100" scrolling="no" frameborder="0" allowtransparency="true"></iframe>

                                     <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="avatar" placeholder="Lien de votre avatar">
                                </div>

                                <button type="submit" value="LogIn" class="btn form-control login_btn">Register</button>

                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="order_box">
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==========End Check out area==========-->
        
        <!--================Footer Area =================-->
<?php include 'footer.php'; ?>
        <!--================End Footer Area =================-->
