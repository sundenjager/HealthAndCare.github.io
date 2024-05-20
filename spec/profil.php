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
                        <a href="index.php" class="nav-item nav-link">Accueil</a>
                        <a href="about.php" class="nav-item nav-link">A propos</a>
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
                      <a href="profil.php" class="nav-item nav-link active"> <b><?php echo $nomSpec." ".$prenomSpec; ?></b></a>
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
      <div class="container">
          <div class="row g-5 align-items-center mb-5">
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <a href="" data-bs-toggle="modal" data-bs-target="#modalPhoto">
                        <div class="circular" style="margin-bottom: 160px; margin-left: 60px;">
                            <img src="pfp/<?php echo  $photoSpec;?>" alt="" style="height: 200px; width: auto;">
                        </div>
                    </a>
                </div>
                <!-- Photo Modal -->
                    <div class="modal fade" id="modalPhoto" tabindex="-1" aria-labelledby="Photo" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">  Modifier Photo de Profil</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <div class="col">
                                    <div class="circular">
                                    <img src="pfp/<?php echo  $photoSpec;?>" style="height: 200px; width: auto;">
                                    </div>
                                </div>
                                <div class="col">
                                    <a href="supprimerPhoto.php?id=<?php echo $idSpec; ?>" class="btn btn-danger" style="margin-left: 150px; border-radius: 5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                    </svg>
                                    </a>
                                    <br><br>
                                    <form action="update_photo_spec.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $idSpec; ?>" name="id">
                                    <input type="file" class="form-control" name="photo">
                                </div>
                                </div>                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <button type="submit" name="updatePhoto" class="btn btn-primary">Modifier</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
            <!-- end Photo Modal -->
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s" style="border-left: 1px solid black;">
                    <h1 class="display-6 mb-3"><?php echo $nomSpec." ".$prenomSpec; ?></h1>
                    <p class="mb-1"><?php echo $specialite; ?></p>
                    <p class="mb-1">à <?php echo $etabSpec; ?></p>
                    <p class="mb-5"><?php echo $adresseSpec.", ".$paysSpec; ?></p>
                    
                    <h3 class="mb-3">Bio
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalofbio">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </a>
                    </h3>
                    <!-- Modal of Bio -->
                        <div class="modal fade" id="modalofbio" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Bio</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="updatebio.php" method="POST">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="bio" placeholder="Bio" id="floatingTextarea2" style="height: 100px" REQUIRED></textarea>
                                            <label for="floatingTextarea2">Bio</label>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <button type="submit" name="btnupdatebio" class="btn btn-primary">Sauvegarder</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    <!-- End of Modal of Bio -->
                    <p class="mb-4"><?php echo $bioSpec; ?></p>
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
                    <p class="mb-1"><?php echo $emailSpec; ?>
                            <a href="accset.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                    </p>
                    <p class="mb-1"><?php echo $telSpec; ?>
                            <a href="" data-bs-toggle="modal" data-bs-target="#modaloftel">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                            <!-- Tel Modal -->
                                <div class="modal fade" id="modaloftel" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier numéro de Téléphone</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="updatetel.php" method="POST">
                                                <div class="form-floating">
                                                    <input class="form-control" name="telSpec" placeholder="Tél" id="floatingTextarea2" type="number" REQUIRED>
                                                    <label for="floatingTextarea2">Tél</label>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                <button type="submit" name="updatetelbtn" class="btn btn-primary">Sauvegarder</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- End of Tel Modal -->
                    </p>    
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