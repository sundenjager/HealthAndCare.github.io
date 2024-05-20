<?php 

  session_start();
  if(isset($_SESSION["idSpec"])){
    $idSpec = $_SESSION["idSpec"];
    $nomSpec = $_SESSION["nomSpec"];
    $prenomSpec = $_SESSION["prenomSpec"];
    $specialite = $_SESSION["specialite"];
    $etabSpec = $_SESSION["etabSpec"];
    $emailSpec = $_SESSION["emailSpec"]; 
    $telSpec = $_SESSION["telSpec"];
    $adresseSpec = $_SESSION["adresseSpec"];
    $paysSpec = $_SESSION["paysSpec"];
    $pwSpec = $_SESSION["pwSpec"];
    $bioSpec = $_SESSION["bioSpec"];
  }else{
    header("location: ../index.php");
  }
  require("../database/cnx.php");
 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Health & Care: <?php echo " ".$nomSpec." ".$prenomSpec; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/health and care logo only.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
      .circular { 
        width: 200px;
        height: 200px;
        border-radius: 50%;
        position: relative;
        overflow: hidden;
        box-shadow: 3px 3px 1px gray;
        border: 10px solid rgb(45, 46, 131);
       }
       .circular img{
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
       }
    </style>

</head>

<body>

    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <a href="index.html" class="h1 text-white mb-0"><img src="img/Health & Care Logo with subs.png" style="width: 100px;"></a>
                <div class="d-flex">
                    <div class="ms-3">                       
                    </div>
                </div>               
                <div class="d-flex">
                    <div class="ms-3">
                      <a class="btn btn-primary" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasProfile" aria-controls="offcanvasRight">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16" >
                          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                      </a>
                      
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <img src="img/Health & Care Logo with subs.png" style="width: 100px;">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.html" class="nav-item nav-link">Accueil</a>
                        <a href="about.html" class="nav-item nav-link">A propos</a>
                        <a href="forum.php" class="nav-item nav-link">Forum</a>
                        <a href="articles.php" class="nav-item nav-link">Articles</a>
                        <a href="team.php" class="nav-item nav-link">Equipe</a>
                        <!--
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="appoinment.html" class="dropdown-item">Appoinment</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        -->
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                      <div class="collapse navbar-collapse">
                      <a href="profil.php" class="nav-item nav-link"> <b><?php echo $nomSpec." ".$prenomSpec; ?></b></a>
                      </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <?php  require("offcanvas.php");?>
  <main id="main">

      


    <section class="inner-page pt-4">
      <div class="container" style="height: 700px;">
        <h1 style="border-bottom: 1px solid black;">Paramètres du compte</h1>
        <br>
        <div class="row">
            <div class="col-2" style="border-right: 1px solid black;">
                <div class="list-group">
                    <a href="accset.php" class="list-group-item list-group-item-action active" aria-current="true">
                        Changer Email
                    </a>

                    <a href="pwupdate.php" class="list-group-item list-group-item-action">Changer Mot de Passe</a>

                    <a href="deleteacc.php" class="list-group-item list-group-item-action">Désactiver Compte</a>

                </div>
            </div>
            <div class="col-8">
            <?php
            
            if(isset($_POST["btn"])){
                $email= $_POST["emailSpec"];
                $id = $idSpec;
                $email2= $_POST["emailSpec2"];
                $pw= $_POST["mdp"];
                $sql1 = "SELECT emailSpec from specialiste WHERE emailSpec='$email'";
                $envoi1 = @mysql_query($sql1);
                $errormail= 0;
                while($res = @mysql_fetch_array($envoi1)){
                    $errormail = 1;
                        break;
                    }
                if(!($pw == $pwSpec)){
                    echo '<div class="alert alert-danger" role="alert">
                    Mot de passe incorrecte !
                  </div>';
                }elseif(!($email == $email2)){
                    echo '<div class="alert alert-danger" role="alert">
                    Les deux champs email ne sont pas identiques !
                  </div>';  
                }elseif($errormail == 1){
                    echo '<div class="alert alert-danger" role="alert">
                        Email existe déjà !
                        </div>';                                 
                }else{

                        $_SESSION["emailSpec"] = $email;
                        $emailSpec = $_SESSION["emailSpec"];
                        $sql2 = "UPDATE specialiste SET emailSpec ='$email' WHERE idSpec='$id'";
                        @mysql_query($sql2);
                        echo '<div class="alert alert-success" role="alert">
                                Votre adresse email a été bien modifiée
                                </div>';
                    
                            
                }
            }
        ?>
                <form action="" method="POST">
                    <label for="Email">Nouveau Email:</label>
                    <input class="form-control form-control-lg" name="emailSpec" id="Email" type="email" placeholder="Nouveau Email" aria-label="Email">
                    <br><br>
                    <label for="Email2">Répéter Email:</label>
                    <input class="form-control form-control-lg" name="emailSpec2" id="Email2" type="email" placeholder="Répéter Email" aria-label="Email Repeat">
                    
                    <br><br>
                    <label for="password">Entrer Mot de Passe:</label>
                    <input class="form-control form-control-lg" name="mdp" id="password" type="password" placeholder="Mot de Passe" aria-label="password">
                    <br><br>
                    <button name="btn"  type="submit" class="btn btn-primary btn-lg" style="margin-left: 700px;">Sauvegarder</button>          
                </form>
            </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
       <br><br>
  <!-- ======= Footer ======= -->

        <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/Health & Care Logo with subs.png" style="width: 100px;">
                    </a>
                    <br><br>
                    <p class="fs-5 mb-4">N'hésitez pas à nous contacter!</p>
                    <p><i class="fa fa-map-marker-alt me-2"></i>123 rue XXXXX, XXXXX, XXXXX</p>
                    <p><i class="fa fa-phone-alt me-2"></i>+216 XX XXX XXX</p>
                    <p><i class="fa fa-envelope me-2"></i>info@h&c.com</p>
                    <div class="d-flex mt-4">
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Liens Rapides</h4>
                            <a class="btn btn-link" href="">A propos</a>
                            <a class="btn btn-link" href="">Contact</a>
                            <a class="btn btn-link" href="">Equipe</a>
                            <a class="btn btn-link" href="">Forum</a>
                            <a class="btn btn-link" href="">Articles</a>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="text-light mb-4">Newsletter</h4>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0 py-3 px-4" style="background: rgba(255, 255, 255, .1);" placeholder="Votre adresse email"><button class="btn btn-primary px-4">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>