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
  $namecheck=0;
  if(isset($_POST["btn"])){
    $nom= $_POST["nomAdmin"];
    $prenom= $_POST["prenomAdmin"];
    $id = $idAdmin;
    $_SESSION["nomAdmin"] = $nom;
    $_SESSION["prenomAdmin"] = $prenom;
    $prenomAdmin = $_SESSION["prenomAdmin"];
    $nomAdmin = $_SESSION["nomAdmin"];
    $sql = "UPDATE admin SET nomAdmin ='$nom' , prenomAdmin ='$prenom' WHERE idAdmin='$id'";
    @mysql_query($sql);
    $namecheck=1;
  }
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
        <h1 style="border-bottom: 1px solid black;">Changer Nom et Prénom</h1>
        <br>
          <?php   
            if($namecheck==1){
                echo '<div class="alert alert-success" role="alert">
                         Nom et Prénom ont été bien modifiée
                       </div>';             
                }
            ?>
                <form action="" method="POST">
                    <label for="nomAdmin"><h3>Nom:</h3></label>
                    <input class="form-control form-control-lg" name="nomAdmin" id="nomAdmin" type="text" value="<?php echo $nomAdmin; ?>">
                    <br><br>
                    <label for="prenomAdmin"><h3>Prénom:</h3></label>
                    <input class="form-control form-control-lg" name="prenomAdmin" id="prenomAdmin" type="text" value="<?php echo $prenomAdmin;  ?>">
                    
                    <br><br>
                    
                    <button name="btn"  type="submit" class="btn btn-primary btn-lg" style="margin-left: 1100px;">Sauvegarder</button>          
                </form>
            </div>

      </div>
    </section>

  </main><!-- End #main -->
       <br><br>
  
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