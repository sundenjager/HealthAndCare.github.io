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
</head>

<body style="background: no-repeat url('img/bodybg.jpeg');  background-attachment: fixed;">

    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex" style="border-bottom: 5px ridge rgb(45, 46, 131); height: 100px;">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">               
                <h1 style="margin-left: 330px;"><font color="white" size="30">ESPACE ADMINISTRATEUR</font></h1>  
            </div>
        </div>
    </div>
    <!-- Brand End -->
<br><br><br><br>
  <main id="main">
    <section class="inner-page pt-4">
      <div class="container">
        <div class="position-relative">
          <div class="position-absolute top-100 start-50 translate-middle" style="margin-top: 200px;">
            <div class="card" style="width: 450px; border: 5px ridge rgb(45, 46, 131); box-shadow: 3px 3px 3px #509c18; border-radius: 10px; padding: 20px;">
              <div style=" border-bottom: 2px solid rgb(45, 46, 131); padding-bottom: 25px;">
                <img src="img/health and care logo only.png" style="width: 100px; height: auto; margin-left: 150px;" class="card-img-top">
                <br>
                <h2 style="margin-left: 155px;">
                  Login
                </h2>
              </div>
              <br>
              <div class="card-body">
                <form action="login.php" method="POST">
                  <div class="mb-3">
                    <label for="email" class="form-label"><h4>Email:</h4></label>
                    <input type="email" <?php if(isset($_GET["errorConnEmail"])){ ?> style="border-color: red;" <?php } ?> name="email" class="form-control" id="email" placeholder="nom@exemple.com">
                      <?php 
                        if(isset($_GET["errorConnEmail"])){
                          echo '<font color="red">'.$_GET["errorConnEmail"].'</font>';
                        }
                      ?>
                  </div>
                  <br>
                  <div class="mb-3">
                    <label for="pw" class="form-label"><h4>Mot de passe:</h4></label>
                    <input type="password" <?php if(isset($_GET["errorConnPw"])){ ?> style="border-color: red;" <?php } ?> class="form-control" name="pw" id="pw" placeholder="*************">
                    <?php 
                      if(isset($_GET["errorConnPw"])){
                        echo '<font color="red">'.$_GET["errorConnPw"].'</font>';
                      }
                    ?>   
                  </div>
                  <br>
                  <div class="d-grid gap-2">
                    <button type="submit" name="btncnxadmin" class="btn btn-primary">Connexion</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br><br><br>
  </main><!-- End #main -->



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