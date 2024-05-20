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
                    <a href="accset.php" class="list-group-item list-group-item-action active" aria-current="true">
                        Changer Email
                    </a>

                    <a href="pwupdate.php" class="list-group-item list-group-item-action">Changer Mot de Passe</a>

                    

                </div>
            </div>
            <div class="col-8">
            <?php
            
            if(isset($_POST["btn"])){
                $email= $_POST["emailAdmin"];
                $id = $idAdmin;
                $email2= $_POST["emailAdmin2"];
                $pw= $_POST["mdp"];
                $sql1 = "SELECT emailAdmin from admin WHERE emailAdmin='$email'";
                $envoi1 = @mysql_query($sql1);
                $errormail= 0;
                while($res = @mysql_fetch_array($envoi1)){
                    $errormail = 1;
                        break;
                    }
                if(!($pw == $pwAdmin)){
                    echo '<div class="alert alert-danger" role="alert">
                    Mot de passe incorrecte !
                  </div>';
                }elseif(!($email == $email2)){
                    echo '<div class="alert alert-danger" role="alert">
                    Les deux champs email ne sont pas identiques !
                  </div>';  
                }elseif($errormail == 1){
                    echo '<div class="alert alert-danger" role="alert">
                        Email existe déjà !
                        </div>';                                 
                }else{

                        $_SESSION["emailAdmin"] = $email;
                        $emailAdmin = $_SESSION["emailAdmin"];
                        $sql2 = "UPDATE admin SET emailAdmin ='$email' WHERE idAdmin='$id'";
                        @mysql_query($sql2);
                        echo '<div class="alert alert-success" role="alert">
                                Votre adresse email a été bien modifiée
                                </div>';
                    
                            
                }
            }
        ?>
                <form action="" method="POST">
                    <label for="Email">Nouveau Email:</label>
                    <input class="form-control form-control-lg" name="emailAdmin" id="Email" type="email" placeholder="Nouveau Email" aria-label="Email">
                    <br><br>
                    <label for="Email2">Répéter Email:</label>
                    <input class="form-control form-control-lg" name="emailAdmin2" id="Email2" type="email" placeholder="Répéter Email" aria-label="Email Repeat">
                    
                    <br><br>
                    <label for="password">Entrer Mot de Passe:</label>
                    <input class="form-control form-control-lg" name="mdp" id="password" type="password" placeholder="Mot de Passe" aria-label="password">
                    <br><br>
                    <button name="btn"  type="submit" class="btn btn-primary btn-lg" style="margin-left: 700px;">Sauvegarder</button>          
                </form>
            </div>
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