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
       #result{
        display: flex;
        gap: 10px;
        padding: 10px 0;
      }

      .thumbnail{
        height: 192px;
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

    <?php  require("offcanvas.php");?>
      <section class="inner-page pt-4">
        <div class="container">
          <h1 style="border-bottom: 3px solid rgb(45, 46, 131); padding-bottom: 10px;">Créer votre article</h1>
          <br>
          <form action="articleprocess.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <label for="titreArt"><h3>Titre:</h3></label>
              <input class="form-control form-control-lg" id="titreArt" type="text" name="titreArt" required>
            </div>
            <br>
            <div class="row">
              <label for="descArt"><h3>Déscription:</h3></label>
              <input class="form-control form-control-lg" id="descArt" type="text" name="descArt" required>
            </div>
            <br>
            <div class="row">
              <h3>Catégorie:</h3>
              <select class="form-select" aria-label="Default select example" name="catArt">
                <option Selected>Choisir catégorie</option>
                <?php 
                  $sqlcat = "SELECT * FROM catart";
                  $envoicat = @mysql_query($sqlcat); 
                  while($rescat = @mysql_fetch_array($envoicat)){
                ?>
                <option value="<?php echo $rescat['idCat']; ?>"><?php echo $rescat["categorie"]; ?></option>
                <?php } ?>
              </select>
            </div>
            <br>
            <div class="row">
                <div>
                  <label for="thumbArt" class="form-label"><h3>Thumbnail:</h3></label>
                  <input class="form-control form-control-lg" name="thumbArt" id="thumbArt" type="file" accept="image/jpeg, image/png, image/jpg" required>
                </div>
            </div>
            <br><br>
            <div class="row">
              <label for="textArt"><h3>Votre texte</h3></label>
              <textarea class="form-control form-control-lg" name="textArt" id="textArt" style="height: 500px" required></textarea>
            </div>
            <br>
            <br>
            <div class="row">
              <button type="submit" class="btn btn-primary btn-lg" name="btnarticle">Envoyer</button>
            </div>
          </form>
        </div>
      </section>
       <br><br><br>
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

  <script>
                       document.querySelector("#imagesArt").addEventListener("change", (e) => {
                        if (window.File && window.FileReader && window.FileList && window.Blob) {
                            const files = e.target.files;
                            const output = document.querySelector("#result"); // Fix the selector here
                            for (let i = 0; i < files.length; i++) {
                                if (!files[i].type.match("image")) continue;
                                const picReader = new FileReader();
                                picReader.addEventListener("load", function (event) {
                                    const picFile = event.target;
                                    const div = document.createElement("div");
                                    div.innerHTML = `<img class="thumbnail" src="${picFile.result}" title="${picFile.name}"/>`;
                                    output.appendChild(div);
                                });
                                picReader.readAsDataURL(files[i]);
                            }
                        } else {
                            alert("Your browser does not support the File API");
                        }
                      });
                    </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>