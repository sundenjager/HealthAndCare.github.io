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
  $id = $_GET['id'];
  $sqlart = "SELECT * FROM article WHERE idArt = '$id'";
  $envoiart = @mysql_query($sqlart);
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
    <style>
      .circular { 
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: relative;
        overflow: hidden;
        box-shadow: 3px 3px 1px gray;
        border: 5px solid rgb(45, 46, 131);
        margin-left: 75px;
        margin-top: 20px;
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

    <?php require("headeroffcanvas.php"); ?>

  <main id="main" style="margin-left: 50px;">
  <style>
    .list-group-item{
      height: 50px;
    }
    <?php 
        $resart = @mysql_fetch_array($envoiart);
    ?>
  </style>
    <section class="inner-page pt-4">
    <?php require("sidelist.html"); ?>
    <br><br>
    <div class="row" style="padding: 70px;">
        <br>
        <h1 style="border-bottom: 3px ridge rgb(45, 46, 131); padding-bottom: 20px;"><?php echo $resart["titreArt"]; ?></h1>
        <br>
        
        <div class="col-9" style="margin-left: 35px; border-right: 3px ridge rgb(45, 46, 131); padding-right: 20px; padding-top: 30px;">
            <div class="row" style="padding-bottom: 20px;"><?php echo $resart["descArt"]; ?></div>
            <div class="row" style="padding-bottom: 20px; padding-top: 30px;">
                <img src="../../spec/articleimg/thumbnail/<?php echo $resart["thumbArt"]; ?>" style="border: 3px ridge rgb(45, 46, 131);" alt="">
            </div>
            <div class="row" style="padding-bottom: 20px; padding-top: 10px; border-bottom: 1px ridge rgb(45, 46, 131);">
               <p><font color="black"><?php echo $resart["textArt"]; ?></font></p> 
            </div>
        </div>
        <div class="col-1">
            <?php
                $idSpec = $resart['idSpec'];
                  $sqlspec = "SELECT * FROM specialiste WHERE idSpec = '$idSpec'";
                  $envoispec = @mysql_query($sqlspec);
                  if($resspec = @mysql_fetch_array($envoispec)){
                    $photoSpec = $resspec['photoSpec'];
                    if($photoSpec == ""){
                      $photoSpec = "person.jpg";
                    }    
                ?>
                
                <div class="card" style="width: 18rem;">
                <div class="circular">
                    <img src="../../spec/pfp/<?php echo  $photoSpec;?>" alt="" style="height: 100px; width: auto;">
                </div>
                    <div class="card-body">
                        <h5 style="margin-left: 50px;" class="card-title"><?php echo $resspec['prenomSpec']." ".$resspec['nomSpec']; ?></h5>
                        <div class="col-8">
                                <table class="table">
                                    <tr>
                                      <th>Spécialité:</th>
                                      <td><?php echo $resspec['specialite']; ?></td>
                                    </tr>       
                                    <tr>
                                      <th>à:</th>
                                      <td><?php echo $resspec['etabSpec']; ?></td>
                                    </tr> 
                                      <th>Pays:</th>
                                      <td><?php echo $resspec['paysSpec']; ?></td>
                                    </tr>          
                                </table>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
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