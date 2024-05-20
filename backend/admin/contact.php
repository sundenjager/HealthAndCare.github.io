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

  <main id="main" style="margin-left: -180px;">
  <style>
    .list-group-item{
      height: 50px;
    }
  </style>
    <section class="inner-page pt-4">
      <div class="container">

        <?php require("sidelist.html"); ?>

        <div class="col" style="width: 95%;">
        <h1 style="padding-bottom: 10px; border-bottom: 3px ridge rgb(45, 46, 131);">Messages</h1>
                        <br><br>
        <div class="row">
          <?php 
            $col = 0;
            $sql = "SELECT * FROM contact";
            $envoi = @mysql_query($sql);
            while($res = @mysql_fetch_array($envoi)){
              if($col == 3){
          ?>
          </div>
          <br><br>
          <div class="row">
            <div class="col">
            <div class="card" style="width: 300px; border: 3px ridge rgb(45, 46, 131);">
              <div class="card-body">
                <h5 class="card-title"><?php echo $res['sujet']; ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">de: <?php echo $res['nom']; ?></h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">Email: <?php echo $res['email']; ?></h6>
                <hr>
                <p class="card-text"><?php echo $res['message']; ?></p>
                <a href="suppcontact.php?id=<?php echo $res["idMes"]; ?>" style="color: red;">Supprimer</a>
              </div>
            </div>  
            </div>
          <?php }else{ ?>
          <div class="col">
            <div class="card" style="width: 300px; border: 3px ridge rgb(45, 46, 131);">
              <div class="card-body">
                <h5 class="card-title"><?php echo $res['sujet']; ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">de: <?php echo $res['nom']; ?></h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">Email: <?php echo $res['email']; ?></h6>
                <hr>
                <p class="card-text"><?php echo $res['message']; ?></p>
                <a href="suppcontact.php?id=<?php echo $res["idMes"]; ?>" style="color: red;">Supprimer</a>
              </div>
            </div>
          </div>
          <?php 
              }
          $col++;
          } 
        
        ?>
        </div>
      </div>
      <br><br><br><br><br>
    </section>

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