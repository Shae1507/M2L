        <!--================Frist Main hader Area =================-->
<?php include 'header2.php'; ?>
        <!--================Frist Main hader Area =================-->
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Contact us"><img class="left_img" src="img/banner/t-left-img.png" alt="">Nous Contacter<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <a href="index-2.html">Home</a>
                    <a href="matches.html">Nous contacter</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Contact Address Area =================-->
        <section class="address_details">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="address_item">
                            <img src="img/soul-icon/address-1.png" alt="">
                            <h3>Adresse</h3>
                            <h4>13 rue Jean Moulin</h4>
                            <h4>BP 70001, France</h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="address_item">
                            <img src="img/soul-icon/address-2.png" alt="">
                            <h3>Téléphone et Fax</h3>
                            <h4>+33 3 83 18 87 02</h4>
                            <h4>+33 3 83 18 87 03</h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="address_item">
                            <img src="img/soul-icon/address-3.png" alt="">
                            <h3>Email</h3>
                            <h4>contact@m2l.fr</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Address Area =================-->
        
        <!--================Map Area =================-->
        <!--<section class="map_area map_marker"> -->
        <!--================Map Area =================
            <div id="mapBox" class="mapBox row m0" 
            data-lat="39.4001994" 
            data-lon="-84.5617397" 
            data-zoom="17" 
            data-marker="img/map-marker.png" 
            data-info="<h3>Vero<span>Date</span></h3><h4>44 Oak Meadow Street </h4><h4>Port Washington, NY 11050</h4>"
            data-mlat="39.4001994"
            data-mlon="-84.5617397"></div>-->
        <!--================End Map Area =================
            <ul>
                <li>
                    <div class="tooltip" onclick="tooltip.pop(this, '#tip4', {sticky:true, position:0, cssClass:'no-padding'})"></div>
                    <div style="display:none;">
                        <div id="tip4" class="address_map">
                            <h4>Vero<span>Date</span></h4>
                            <h5>44 Oak Meadow Street</h5>
                            <h5>Port Washington, NY 11050</h5>
                        </div>
                    </div>
                </li>
            </ul>
        </section>-->
        <!--================End Map Area =================-->
        
        <!--================Contact From Area =================-->
        <section class="contact_form_area">
            <div class="container">
                <div class="welcome_title">
                    <h3>Nous envoyer un message</h3>
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="row">
                    <form action="http://html.verodate.com/verodate/contact_process.php" method="post" id="contactForm" class="form_inner">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nom">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <textarea id="comment" placeholder="Message" id="message" name="message" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" value="LogIn" class="btn form-control login_btn">Envoyer</button>
                        </div>
                    </form>
                    <div id="success">
                        <p>Votre message a bien été envoyé !</p>
                    </div>
                    <div id="error">
                        <p>Une erreur s'est produite, le message n'a pas pu être envoyé</p>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact From Area =================-->
        
        <!--================Footer Area =================-->
        <?php include 'footer.php' ?>
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
        
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        
        <script src="js/video_player.js"></script>
        <script src="js/theme.js"></script>
    </body>

<!-- Mirrored from html.verodate.com/verodate/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Apr 2018 14:40:44 GMT -->
</html>