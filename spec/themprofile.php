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
 

  $id = $_GET["id"];

  $sqluser= "SELECT * FROM user WHERE idUser = '$id'";
  $envoiuser = @mysql_query($sqluser);
  $resuser = mysql_fetch_array($envoiuser);
  $birthdate = new DateTime($resuser['birthUser']);
  $currentDate = new DateTime();
  $age = $currentDate->diff($birthdate)->y;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Health & Care: <?php echo " ".$nomUser." ".$prenomUser; ?></title>
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

<body style="background: no-repeat url('img/bodybg.jpeg');  background-attachment: fixed;">

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
                      <a href="profil.php" class="nav-item nav-link active"> <b><?php echo $_SESSION['nomSpec']." ".$_SESSION['prenomSpec']; ?></b></a>
                      </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <?php  require("offcanvas.php");
      if($resuser['Photo']==""){
        $resuser['Photo']="person.jpg"; 
      }
    
    ?>

  <main id="main">
    <section class="inner-page pt-4">
      <div class="container">
      <div class="container text-left" style="border: 5px solid rgb(45, 46, 131);border-radius: 0 20% 0 20%; background-color: #d0d0d0; padding: 50px;">
        <div class="row">
          <div class="col" style="padding-right: -100px;">
            <div class="circular">
              <img src="../UI/pfp/<?php echo  $resuser['Photo'];?>" alt="" style="height: 200px; width: auto;">
            </div>
            
          </div>
          <div class="col" style="margin-right: 700px; magin-top: 30px;">
            <h1 style="font-size: 60px;"><?php echo $resuser['nomUser']." ".$resuser['prenomUser']; ?></h1>
          </div>
        </div>
        <br><br>
        <div class="row" >
          <div class="col text-center" style="height: 250px; background-color: white; border: 2px solid rgb(45, 46, 131); box-shadow: 3px 3px 3px gray; border-radius: 10px; width: 100px; padding: 20px;">
            <div class="tableheight" style="max-height: 500px;">
              <table class="table table-borderless">
                <tr>
                  <td><h5>Age:</h5></td>
                  <td><?php echo $age; ?></td>
                </tr>
                <tr>
                  <td><h5>Email:</h5></td>
                  <td><?php echo $resuser['emailUser']; ?></td>
                </tr>
                <tr>
                  <td><h5>Pays:</h5></td>
                  <td><?php echo $resuser['pays']; ?>
                </td>
                </tr>
                <tr>
                  <td><h5>Tél:</h5></td>
                  <td><?php echo $resuser['telUser']; ?></td>
                </tr>
              </table>
            </div> 
          </div>
          <div class="col-sm-9">

          <?php 
                    $sqlquest = "SELECT * FROM quest WHERE idUser = '$id'";
                    $envoiquest = @mysql_query($sqlquest);
                    while($resquest = mysql_fetch_array($envoiquest)){
                ?>
                          <div class="card" style="border: 2px solid rgb(45, 46, 131); box-shadow: 3px 3px 3px gray; border-radius: 10px;">
                            <div class="card-header">
                              <div class="row">
                                <div class="col-2">
                                    <div class="circular" style="height: 40px; width: 40px; border: 3px solid rgb(45, 46, 131);">
                                        <img src="../UI/pfp/<?php echo  $resuser['Photo'];?>" alt="" style="height: 40px; width: auto;">
                                    </div>
                                </div>
                                <div class="col-8 text-left" style="padding-top: 5px;">
                                    <h5><?php echo $resuser['prenomUser']." ".$resuser['nomUser']; ?></h5>
                                </div>
                              </div>
                              <div class="col-1 text-right">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#reportmodal<?php echo $resquest['idQuest']; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute; top:10px;  right: 20px;" width="30" height="30" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
                                                    <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"/>
                                                </svg>
                                            </a>
                                            <!-- Report modal -->
                                            <div class="modal fade" id="reportmodal<?php echo $resquest['idQuest']; ?>" tabindex="-1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Voulez-vous vraiment signaler cette publication?</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="reportquest.php" method="POST">
                                                            <input type="hidden" name="id" value="<?php echo $resquest['idQuest']; ?>">
                                                        <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                            <button type="submit" name="btnreport" class="btn btn-primary">Confirmer</button>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            <!-- End of Report modal -->


                                        </div>
                            </div>
                            <div class="card-body">
                              <blockquote class="blockquote mb-0">
                                <h3><?php echo $resquest['titreQuest']; ?></h3>
                                <p><?php echo $resquest['details']; ?></p>                           
                              </blockquote>
                            </div>
                            <button class="btn" style="margin: 2px; color: white; background-color: rgb(45, 46, 131); border-radius: 4px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $resquest["idQuest"]; ?>" aria-expanded="false" aria-controls="collapseExample">
                              Réponses...
                            </button>
                            <div class="collapse" id="collapse<?php echo $resquest["idQuest"]; ?>" style="margin: 3px; border: 2px solid rgb(45, 46, 131); border-radius: 10px;">
                              <div class="card">
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item"> <div class="row">
                                    <div class="col-1">
                                      <img src="pfp/person.jpg" alt="" style="height: 40px; width: auto; border: 2px solid rgb(45, 46, 131); border-radius: 50%; ">
                                    </div>
                                    <div class="col-10 text-left" style="padding-top: 5px;">
                                      <h5>nom prenom medecin</h5>
                                    </div>
                                  </li>
                                  <li class="list-group-item">A second item</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <br><br>
                    <?php } ?>
        </div>
        <br><br>
      </div>
      <br><br>
      </div>
    </section>
  </main><!-- End #main -->
<br><br>
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