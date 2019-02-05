
    
        <!--================Frist Main hader Area =================-->
        <?php include 'header2.php'; ?>
        <!--================Frist Main hader Area =================-->
        

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Inscription"><img class="left_img" src="img/banner/t-left-img.png" alt="">Mon profil<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <a href="index.php">Home</a>
                    <a href="profil.php">Mon profil</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
<?php  
        $query=$bdd->prepare("SELECT *
        FROM membres WHERE id = '$data[id]'"); 
        $query->execute();
        $donnees = $query->fetch(); 

   echo "     <!--==========Check out area==========-->
        <section class='check_out_area'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-8'>
                        <div class='row'>
                            <div class='check_out_left'>
                                <h3>Informations personnelles</h3>
                                 <form action='traitement.php' method='POST'> 
                                <div class='form-group col-md-6'>
                                    <input type='text' class='form-control' name='prenom' placeholder='Prénom' value=".  $donnees['prenom'].">
                                </div>
                                <div class='form-group col-md-6'>
                                    <input type='text' class='form-control' name='nom' placeholder='Nom'  value=".  $donnees['nom'].">
                                </div>
                                <div class='form-group col-md-6'>
                                    <input type='email' class='form-control' name='email' placeholder='Email'  value=".  $donnees['email'].">
                                </div>
                                <div class='form-group col-md-6'>
                                    <input type='text' class='form-control' name='telephone' placeholder='Téléphone'  value=".  $donnees['telephone'].">
                                </div>

                                  <div class='form-group col-md-6'>
                                <input type='password' class='form-control' name='mdp' placeholder='Password'>
                            </div>
                                 <div class='form-group col-md-6'>
                                    <select class='selectpicker' name='sexe'>
                                        <option selected='selected'>".  $donnees['sexe']."</option>
                                        "; if ($donnees['sexe'] == "Homme"){ 

                                                echo "<option>Femme</option>
                                                <option>Autre</option>"; }

                                            else if ($donnees['sexe'] == "Femme") {

                                                 echo "<option>Homme</option>
                                                <option>Autre</option>"; }
                                            else {
                                            echo "<option>Homme</option>
                                                <option>Femme</option>"; }

                                            echo "

                                    </select>
                                </div>
                                <div class='form-group col-md-6'>
                                    <input type='text' class='form-control' name='age' placeholder='Age' value=".  $donnees['age'].">
                                </div>
                                <div class='form-group col-md-6'>
                                    <input type='text' class='form-control' name='ville' placeholder='Ville' value=".  $donnees['ville'].">
                                </div>

                                </br><h3>Informations sportives</h3>

                                    <div class='form-group col-md-6'>
                                    <select class='selectpicker' name='sport'>
                                    <option selected='selected'>".  $donnees['sport']."</option>

                                    <option value='Tennis'>Tennis</option>
                                    <option value='Football'>Football</option>
                                    <option value='Basketball'>Basketball</option>
                                    <option value='Rugby'>Rugby</option>
                                    <option value='Baseball'>Baseball</option>
                                    <option value='Equitation'>Equitation</option>
                                    <option value='Aïkido'>Aïkido</option>
                                    <option value='Danse'>Danse</option>
                                    <option value='Boxe'>Boxe</option>
                                    <option value='Canoë'>Canoë</option>
                                    <option value='Gymnastique'>Gymnastique</option>
                                    <option value='Natation'>Natation</option>
                                    <option value='Athlétisme'>Athlétisme</option>
                                    <option value='Judo'>Judo</option>
                                    <option value='Volley'>Volley</option>
                                    <option value='Badmington'>Badmington</option>
                                    <option value='Escrime'>Escrime</option>
                                    <option value='Karaté'>Karaté</option>
                                    <option value='Cyclisme'>Cyclisme</option>
                                    <option value='Handball'>Handball</option>
                                    <option value='Lutte'>Lutte</option>
                                    <option value='Taekwondo'>Taekwondo</option>
                                    <option value='TennisDeTable'>Tennis de table</option>
                                    <option value='Triathlon'>Triathlon</option>
                                    <option value='Yoga'>Yoga</option>
                                    <option value='Echecs'>Echecs</option>
                                    <option value='Escalade'>Escalade</option>
                                    <option value='Course'>Course</option>
                                    <option value='Ultimate'>Ultimate</option>

                                    </select>
                                </div>

                                <div class='form-group col-md-6'>
                                    <select class='selectpicker' name='niveau'>
                                      <option selected='selected'>".  $donnees['niveau']."</option>
                                        "; if ($donnees['niveau'] == "Debutant"){ 

                                                echo "<option>Intermediaire</option>
                                        <option>Expert</option>"; }

                                            else if ($donnees['niveau'] == "Intermediaire") {

                                                 echo "<option>Debutant</option>
                                                       <option>Expert</option>"; }
                                            else {
                                            echo "<option>Debutant</option>
                                                   <option>Intermediaire</option>"; }

                                            echo "
                                    </select>
                                </div>

                                <div class='form-group col-md-6'>
                                    <select class='selectpicker' name='jour'>
                                    <option selected='selected'>".  $donnees['jour']."</option>";
                                    
                                    switch ($donnees['jour']) {
                                        case "Lundi": echo "<option>Mardi</option>
                                        <option>Mercredi</option>
                                        <option>Jeudi</option>
                                        <option>Vendredi</option>
                                        <option>Samedi</option>
                                        <option>Dimanche</option>
                                        "; 
                                        break;
                                          case "Mardi": echo "<option>Lundi</option>
                                        <option>Mercredi</option>
                                        <option>Jeudi</option>
                                        <option>Vendredi</option>
                                        <option>Samedi</option>
                                        <option>Dimanche</option>
                                        "; 
                                        break;
                                          case "Mercredi": echo "<option>Lundi</option>
                                        <option>Mardi</option>
                                        <option>Jeudi</option>
                                        <option>Vendredi</option>
                                        <option>Samedi</option>
                                        <option>Dimanche</option>
                                        "; 
                                        break;
                                          case "Jeudi": echo "<option>Lundi</option>
                                        <option>Mardi</option>
                                        <option>Mercredi</option>
                                        <option>Vendredi</option>
                                        <option>Samedi</option>
                                        <option>Dimanche</option>
                                        "; 
                                        break;
                                          case "Vendredi": echo "<option>Lundi</option>
                                        <option>Mardi</option>
                                        <option>Mercredi</option>
                                        <option>Jeudi</option>
                                        <option>Samedi</option>
                                        <option>Dimanche</option>
                                        "; 
                                        break;
                                          case "Samedi": echo "<option>Lundi</option>
                                        <option>Mardi</option>
                                        <option>Mercredi</option>
                                        <option>Jeudi</option>
                                        <option>Vendredi</option>
                                        <option>Dimanche</option>
                                        "; 
                                        break;
                                          case "Dimanche": echo "<option>Lundi</option>
                                        <option>Mardi</option>
                                        <option>Mercredi</option>
                                        <option>Jeudi</option>
                                        <option>Vendredi</option>
                                        <option>Samedi</option>
                                        "; 
                                        break; } 
                                        echo "
                                    </select>
                                </div>

                                                                <div class='form-group col-md-6'>
                                    <select class='selectpicker' name='heure'>
                                    <option selected='selected'>".  $donnees['heure']."</option>;
                                        <option>Tranche horraire</option>";
                                         for($i=0;$i < 24;$i++){
                                        echo '<option> '.$i.'/';
                                        $i++; echo ''.$i.'h</option>';
                                        $i--;
                                        } echo "
                                        </select>
                                </div>
                                
                                <div class='form-group col-md-12'>
                                    
                                    <textarea class='form-control' rows='1' placeholder='Quel genre de partenaire recherches-tu?' name='descrip' value=''></textarea>
                                </div>

                                <div class='reg_chose col-md-6form-group'>
                              <iframe src='http://www.hostingpics.net/iframe_mini.php' width='400' height='100' scrolling='no' frameborder='0' allowtransparency='true'></iframe>

                                     <div class='form-group col-md-6'>
                                    <input type='text' class='form-control' name='avatar' placeholder='Lien de votre avatar' value=".  $donnees['avatar'].">
                                </div>


                                    <input type='checkbox' id='f-option' name='catdata' value='1' checked='1'>
                                    <label for='f-option'>Afficher mon numéro et mon adresse courriel sur mon profil.</label>
                                    <div class='check'>
                                    </div>
                                <button type='submit' value='LogIn' class='btn form-control login_btn'>Envoyer</button>

                            </form>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--==========End Check out area==========-->
        
        <!--================Footer Area =================-->"; 
 include 'footer.php'; ?>
        <!--================End Footer Area =================-->
