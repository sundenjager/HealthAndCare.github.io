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
  <style>
    .list-group-item{
      height: 50px;
    }
  </style>
    <section class="inner-page pt-4">
        <div class="row">
          <?php require("sidelist.html"); ?>
          <br>
          <div class="col-6" style="width: 90%;">
            <h1 style="border-bottom: 3px ridge rgb(45, 46, 131);">Gestion des Catégories</h1>
            <br>
            <h3 style="margin-left: 50px;">Ajouter catégorie</h3>
          </div>
        </div>
        <form method="POST" action="" class="row g-3" style="margin-left: 140px;">
          <div class="col-auto">
            <label for="categorie" class="visually-hidden">Catégorie</label>
            <input type="text" name="categorie" class="form-control" id="categorie" placeholder="Catégorie" required>
          </div>
          <div class="col-auto">
            <button type="submit" name="ajoutcatbtn" class="btn btn-primary mb-3">Ajouter</button>
          </div>
        </form>
        <?php 
          if(isset($_POST["ajoutcatbtn"])){
            $categorie = $_POST["categorie"];
            $sqlinsert = "INSERT INTO catart VALUE ('','$categorie')";
            @mysql_query($sqlinsert);
          }
        ?>
        <br>
        <table class="table" style="width: 300px; margin-left: 150px;">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $sql="SELECT * FROM catart";
              $envoi = @mysql_query($sql);
              while($res = @mysql_fetch_array($envoi)){
            ?>
            <tr>
              <th scope="row"><?php echo $res["idCat"]; ?></th>
              <td><?php echo $res["categorie"]; ?></td>
              <td>
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#updatecatmodal<?php echo $res["idCat"]; ?>">Modifier</button>
              </td>
              <div class="modal fade" id="updatecatmodal<?php echo $res["idCat"]; ?>" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier <?php echo $res["categorie"]; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="updatecat.php" method="POST">
                      <input type="hidden" value="<?php echo $res["idCat"]; ?>" name="id">
                      <input type="text" name="categorieupdate" class="form-control" id="categorieupdate" placeholder="Catégorie" required>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </tr>
            
            <?php } ?>
          </tbody>
        </table>
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