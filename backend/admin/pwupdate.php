<?php 
  session_start();
  if(isset($_SESSION["idAdmin"])){
    $idAdmin = $_SESSION["idAdmin"];
    $nomAdmin = $_SESSION["nomAdmin"];
    $prenomAdmin = $_SESSION["prenomAdmin"];
    $emailAdmin = $_SESSION["emailAdmin"]; 

    $pwAdmin = $_SESSION["pwAdmin"];
   
  }else{
    header("location: ../login/index.php");
  }
  require("../../database/cnx.php");

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Health & Care: ESPACE ADMINISTATEUR</title>
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
</head>

<body>

    <?php require("headeroffcanvas.php"); ?>
  <main id="main">




    <section class="inner-page pt-4">
      <div class="container" style="height: 700px;">
      <h1 style="border-bottom: 1px solid black;">Paramètres du compte</h1>
        <br>
        <div class="row">
            <div class="col-2" style="border-right: 1px solid black;">
                <div class="list-group">
                    <a href="accset.php" class="list-group-item list-group-item-action" >
                        Changer Email
                    </a>

                    <a href="pwupdate.php" class="list-group-item list-group-item-action active" aria-current="true">Changer Mot de Passe</a>



                </div>
            </div>
            <div class="col-8">
            <?php
            
            if(isset($_POST["btn"])){
                $oldpw= $_POST["oldpw"];
                $id = $idAdmin;
                $newpw= $_POST["newpw"];
                $pw2= $_POST["pw2"];
                
                if(!($oldpw == $pwAdmin)){
                    echo '<div class="alert alert-danger" role="alert">
                    Mot de passe incorrecte !
                  </div>';
                }elseif(!($newpw == $pw2)){
                    echo '<div class="alert alert-danger" role="alert">
                    Les deux champs mot de passe ne sont pas identiques !
                  </div>';                                
                }else{

                        $_SESSION["pwAdmin"] = $newpw;
                        $pwAdmin = $_SESSION["pwAdmin"];
                        $sql = "UPDATE admin SET pwAdmin ='$newpw' WHERE idAdmin='$id'";
                        @mysql_query($sql);
                        echo '<div class="alert alert-success" role="alert">
                                Votre mot de passe a été bien modifié
                                </div>';
                    
                            
                }
            }
        ?>
                <form action="" method="POST">
                    <label for="oldpw">Ancien mot de passe:</label>
                    <input class="form-control form-control-lg" name="oldpw" id="oldpw" type="password" placeholder="Ancien mot de passe" aria-label="old password">
                    <br><br>
                    <label for="newpw">Nouveau mot de passe:</label>
                    <input class="form-control form-control-lg" name="newpw" id="newpw" type="password" placeholder="Entrer nouveau mot de passe" aria-label="password new">
                    
                    <br><br>
                    <label for="pw2">Répéter mot de Passe:</label>
                    <input class="form-control form-control-lg" name="pw2" id="pw2" type="password" placeholder="Répéter mot de Passe" aria-label="password">
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