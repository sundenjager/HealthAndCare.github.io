
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Health & Care</title>
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


    <!-- Topbar Start -->
    <!--
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Career</a>
                    <a class="breadcrumb-item small text-body" href="#">Support</a>
                    <a class="breadcrumb-item small text-body" href="#">Terms</a>
                    <a class="breadcrumb-item small text-body" href="#">FAQs</a>
                </nav>
            </div>
        </div>
    </div>
    -->
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <a href="index.php" class="h1 text-white mb-0"><img src="img/Health & Care Logo with subs.png" style="width: 100px; margin-right: 50px;"></a>
                <div class="d-flex">
                    <form action="connexion.php" method="POST">
                    <div class="row g-3 " style="margin-right: 10px;">            
                        <div class="col-auto">
                            <input type="email" <?php if(isset($_GET["errorConnEmail"])){ ?> style="border-color: red;" <?php } ?> class="form-control" name="emailConn" placeholder="Email">
                            <?php 
                            if(isset($_GET["errorConnEmail"])){
                                echo '<font color="red">'.$_GET["errorConnEmail"].'</font>';
                            }
                            ?>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" <?php if(isset($_GET["errorConnPw"])){ ?> style="border-color: red;" <?php } ?>  class="form-control" name="pwConn" placeholder="Mot de Passe" aria-describedby="passwordHelpInline">
                            <?php 
                            if(isset($_GET["errorConnPw"])){
                                echo '<font color="red">'.$_GET["errorConnPw"].'</font>';
                            }
                            ?>   
                        </div>   
                        <div class="col-auto">
                            <button type="submit"  class="btn btn-primary py-3 px-5 animated slideInRight" name="btnConn" style="background-color: #29539e; margin-right: 50px;">Connexion</button>
                        </div>             
                    </div>
                        </form>
                    <div class="d-flex">
                        
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
                <a href="index.php" class="navbar-brand d-lg-none">
                    <img src="img/Health & Care Logo with subs.png" style="width: 100px;">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link">Accueil</a>
                        <a href="about.php" class="nav-item nav-link">A propos</a>
                        <a href="forum.php" class="nav-item nav-link">Forum</a>
                        <a href="articles.php" class="nav-item nav-link">Articles</a>
                        <a href="team.php" class="nav-item nav-link active">Equipe</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Inscription</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="inscription.php" class="dropdown-item">En tant que Utilisateur</a>
                                <a href="inscrispec.php" class="dropdown-item">En tant que Spécialiste</a>
                            </div>
                        </div>

                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <?php 
       require("database/cnx.php");
       $id = $_GET["id"];
       $sql="SELECT * FROM specialiste WHERE idSpec = '$id'";
       $envoi = @mysql_query($sql);
       $res = @mysql_fetch_array($envoi);
       if($res["photoSpec"]==""){
           $res["photoSpec"] = "person.jpg";
           }
       ?>
    <main id="main">
    <section class="inner-page pt-4">
      <div class="container">
          <div class="row g-5 align-items-center mb-5">
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    
                        <div class="circular" style="margin-bottom: 160px; margin-left: 60px;">
                            <img src="spec/pfp/<?php echo  $res['photoSpec'];?>" alt="" style="height: 200px; width: auto;">
                        </div>
                    
                </div>
                
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s" style="border-left: 1px solid black;">
                    <h1 class="display-6 mb-3"><?php echo $res['nomSpec']." ".$res['prenomSpec']; ?></h1>
                    <p class="mb-1"><?php echo $res['specialite']; ?></p>
                    <p class="mb-1">à <?php echo $res['etabSpec']; ?></p>
                    <p class="mb-5"><?php echo $res['adresseSpec'].", ".$res['paysSpec']; ?></p>
                    
                    <h3 class="mb-3">Bio</h3>
                    
                    <!-- End of Modal of Bio -->
                    <p class="mb-4"><?php echo $res['bioSpec']; ?></p>
                    <br>
                    <div class="d-flex">
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.3s" style="border-left: 1px solid black;">
                    <h3 class="mb-3">Contact</h3>
                    <p class="mb-1"><?php echo $res['emailSpec']; ?></p>
                    <p class="mb-1"><?php echo $res['telSpec']; ?></p>    
                    <br><br>
                </div>
          </div>
      </div>
    </section>
<br><br>
  </main><!-- End #main -->

     <!-- Footer Start -->
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


  <!-- Copyright Start -->
  <div class="container-fluid copyright bg-dark text-white-50 py-4">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-center text-md-start">
                  <p class="mb-0">&copy; <a href="#">Health & Care</a>. All Rights Reserved.</p>
              </div>
              <div class="col-md-6 text-center text-md-end">
                  
                  <p class="mb-0">Designed by <a href="">Ayoub</a><br>Distributed by <a href="">Ayoub</a></p>
              </div>
          </div>
      </div>
  </div>
  <!-- Copyright End -->

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