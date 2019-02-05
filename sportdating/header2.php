 <?php
 session_start();
if (isset($_SESSION['email'])) {
        $data['email'] = $_SESSION['email'] ;
        $data['prenom'] = $_SESSION['prenom'] ;
         $data['id'] = $_SESSION['id'] ;   
}

$bdd = new PDO('mysql:host=localhost;dbname=m2l_bd2;charset=utf8', 'root', '');

 echo " 
 

<html lang='fr'>
    
<!-- Mirrored from html.verodate.com/verodate/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Apr 2018 14:36:04 GMT -->
<head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='icon' href='img/fav-icon.png' type='image/x-icon' />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sos Partenaire</title>

        <!-- Icon css link -->
        <link href='vendors/material-icon/css/materialdesignicons.min.css' rel='stylesheet'>
        <link href='css/font-awesome.min.css' rel='stylesheet'>
        <link href='vendors/linears-icon/style.css' rel='stylesheet'>
        <!--<link href='css/popup.css' rel='stylesheet'> -->

        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel='stylesheet' type='text/css' href='vendors/revolution/css/layers.css'>
        <link rel='stylesheet' type='text/css' href='vendors/revolution/css/navigation.css'>
        <link rel='stylesheet' type='text/css' href='vendors/revolution/css/settings.css'>
        
        <!-- Bootstrap -->
        <link href='css/bootstrap.min.css' rel='stylesheet'>
        <link href='vendors/image-dropdown/dd.css' rel='stylesheet'>
        <link href='vendors/image-dropdown/flags.css' rel='stylesheet'>
        <link href='vendors/image-dropdown/skin2.css' rel='stylesheet'>
        <link href='vendors/magnific-popup/magnific-popup.css' rel='stylesheet'>
        <link href='vendors/bootstrap-selector/bootstrap-select.css' rel='stylesheet'>
        <link href='vendors/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css' rel='stylesheet'>
        <link href='vendors/owl-carousel/assets/owl.carousel.css' rel='stylesheet'>
        <link href='vendors/animate-css/animate.css' rel='stylesheet'>
        <link href='vendors/bs-tooltip/jquery.webui-popover.css' rel='stylesheet'>
        <link href='vendors/jquery-ui/jquery-ui.css' rel='stylesheet'>
        
        <link href='css/style.css' rel='stylesheet'>
        <link href='css/responsive.css' rel='stylesheet'>
        
        <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE'></script>
       
        <script src='js/map-custome.js'></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
        <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
        <![endif]-->
    </head>





     <header class='header_menu_area white_menu'>
            <nav class='navbar navbar-default'>
                <div class='container'>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class='navbar-header'>
                    <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <a class='navbar-brand' href='index.php'><img src='img/logo-2.png' alt=''></a>
                </div>

                <!-- Collect the nav links, forms, andw other content for toggling -->
                  <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                    <ul class='nav navbar-nav'>

                        <li><a href='membres.php'>Membres</a></li>
                       
                        <li><a href=contact.php>Contactez-nous</a></li>";


                    if (!isset($data['email'])) { 
                        echo "<li><a href='connexion.php'><i class='mdi mdi-key-variant'></i>Login</a></li>"; }
        
                       else {
                        echo "<li><a href='profil.php'>Mon profil</a></li>
                           <li><a href='connexion.php?deco=1'>Deconnexion</a></li>"; 
                        }
            
                     echo "

                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>

    <body>"; ?>