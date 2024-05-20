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

  <main id="main" style="margin-left: 50px;">
 
    <section class="inner-page pt-4">
      <div class="row">
        <?php require("sidelist.html"); ?>
        <br>
        <div class="col-6" style="width: 90%;">
        <h1 style="border-bottom: 3px ridge rgb(45, 46, 131);">Gestion de Spécialistes: Liste d'attente</h1>
        <br>
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Spécialité</th>
                <th scope="col">Etablissement</th>
                <th scope="col">Email</th>
                <th scope="col">Tél</th>
                <th scope="col">Adresse</th>
                <th scope="col">Pays</th>
                <th scope="col">Fichier</th>
                <th scope="col">Mot de passe</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $sql = "SELECT * FROM specialiste";
                $envoi = @mysql_query($sql);
                while($res = @mysql_fetch_array($envoi)){
                  
                  $idSpec = $res["idSpec"];
                  $sqlban = "SELECT * FROM banspecs WHERE idspec = '$idSpec'";
                  $envoiban = @mysql_query($sqlban);
                  if($res["etatSpec"] == 0){
              ?>
              <tr>
                <th scope="row"><?php echo $res["idSpec"]; ?></th>
                <td><?php echo $res["nomSpec"]; ?></td>
                <td><?php echo $res["prenomSpec"]; ?></td>
                <td><?php echo $res["specialite"]; ?></td>
                <td><?php echo $res["etabSpec"]; ?></td>
                <td><?php echo $res["emailSpec"]; ?></td>
                <td><?php echo $res["telSpec"]; ?></td>
                <td><?php echo $res["adresseSpec"]; ?></td>
                <td><?php echo $res["paysSpec"]; ?></td>
                <td>
                  <a href="fichierSpec/<?php echo $res["fichierSpec"]; ?>" class="btn btn-primary">Télécharger</a>
                </td>
                <td><?php echo $res["pwSpec"]; ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="acceptspec.php?id=<?php echo $res["idSpec"]; ?>" class="btn btn-outline-success">Accepter</a>
                    <a href="denyspec.php?id=<?php echo $res["idSpec"]; ?>" class="btn btn-outline-danger">Rejeter</a>
                  </div>
                </td>
              </tr>
              <?php }} ?>
            </tbody>
          </table>
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