<?php

require("../database/cnx.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title></title>
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


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap JS Bundle (includes Popper.js and jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
      .circular-offcanvas { 
        width: 60px;
        height: 60px;
        border-radius: 50%;
        position: relative;
        overflow: hidden;
        border: 3px solid white;
       }
       .circular-offcanvas img{
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
<?php 
    $sql="SELECT photoSpec FROM specialiste WHERE idSpec='$idSpec'";
    $envoi = @mysql_query($sql);
    if($res = @mysql_fetch_array($envoi)){
      $photoSpec = $res["photoSpec"];
    }
    if($photoSpec==""){
      $photoSpec="person.jpg";
    }
  ?>
<body>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasProfile" aria-labelledby="offcanvasRightLabel" style="background-color: #3368c6;">
        <div class="offcanvas-header" style="background-color: rgb(45, 46, 131);">
          <div class="container">
            <div class="row">
              <div class="col text-left">
                <div class="circular-offcanvas" style="box-shadow: 0px;">
                  <img src="pfp/<?php echo  $photoSpec;?>" style="height: 40px; width: auto; border: 3px solid rgb(45, 46, 131);">
                </div>
              </div>
              <div class="col-6 text-left" style="margin-top: 14px;">
                <h5 class="offcanvas-title" id="offcanvasRightLabel" style="color: white; "><?php echo $nomSpec." ".$prenomSpec; ?></h5>
              </div>
              <div class="col" style="margin-left: 35px; margin-top: 12px;">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>

            </div>
          </div>
        </div>
        <div class="offcanvas-body">
          <div class="container">
            <div class="row text-left" >
              <a href="profil.php" class="btn btn-primary btn-lg" style="heigth: 100px; background-color: rgb(149, 193, 31);">Mon Profil</a>
            </div>
            <br>
            <div class="row text-left">
              <a href="archive.php" class="btn btn-primary btn-lg" style="heigth: 100px; background-color: rgb(149, 193, 31);">Archive</a>
            </div>
            <br>
            <div class="row text-left">
              <a href="accset.php" class="btn btn-primary btn-lg" style="heigth: 100px; background-color: rgb(149, 193, 31);">Paramétre du compte</a>
            </div>
            </div>
        </div>
        
        <a href="logout.php" type="button" class="btn btn-danger" style="height: 80px; font-size: 30px; padding-top: 11px; box-shadow: 3px 3px 3px 3px black;">Deconnexion</a>
    </div>
</body>
</html>