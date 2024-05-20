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
    <style>
      .circular { 
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: relative;
        overflow: hidden;
        box-shadow: 3px 3px 1px gray;
        border: 5px solid rgb(45, 46, 131);
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
  </style>
    <section class="inner-page pt-4">
    <div class="row">
        <?php require("sidelist.html"); ?>
        <br>
        <div class="col-6" style="width: 90%;">
        <h1 style="border-bottom: 3px ridge rgb(45, 46, 131);">Gestion des Articles</h1>
        <br>
        <div class="row">
          <div class="col">
            <a href="waitingarticles.php"><h3><u>Articles en attente</u></h3></a>
          </div>
          <div class="col">
            <a href="alaune.php"><h3><u>À la Une</u></h3></a>
          </div>
        </div>
        <br>
        <div class="col" style="width: 95%;">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Auteur</th>
              <th scope="col">Titre</th>
              <th scope="col">Catégorie</th>
              <th scope="col">Thumbnail</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $sqlart = "SELECT * FROM article WHERE etatArt = 1";
              $envoiArt = @mysql_query($sqlart);
              while($resart = @mysql_fetch_array($envoiArt)){
            ?>
            <tr>
              <th scope="row"><?php echo $resart['idArt']; ?></th>
              <td>
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
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalSpec<?php echo $resspec['idSpec']; ?>">Voir</button>
                    <!-- Modal of Specs -->
                      <div class="modal fade" id="modalSpec<?php echo $resspec['idSpec']; ?>" tabindex="-1"  aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $resspec['nomSpec']." ".$resspec['prenomSpec']; ?></h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                              <div class="col-1">
                                <div class="circular" style="margin-bottom: 160px;">
                                  <img src="../../spec/pfp/<?php echo  $photoSpec;?>" alt="" style="height: 100px; width: auto;">
                                </div>
                              </div>
                              <div class="col-8" style="margin-left: 75px;">
                                <table class="table">
                                    <tr>
                                      <th>Spécialité:</th>
                                      <td><?php echo $resspec['specialite']; ?></td>
                                    </tr>       
                                    <tr>
                                      <th>Etablissement:</th>
                                      <td><?php echo $resspec['etabSpec']; ?></td>
                                    </tr> 
                                    <tr>
                                      <th>Email:</th>
                                      <td><?php echo $resspec['emailSpec']; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Tél:</th>
                                      <td><?php echo $resspec['telSpec']; ?></td>
                                    </tr> 
                                    <tr>
                                      <th>Adresse:</th>
                                      <td><?php echo $resspec['adresseSpec']; ?></td>
                                    </tr> 
                                    <tr>
                                      <th>Pays:</th>
                                      <td><?php echo $resspec['paysSpec']; ?></td>
                                    </tr>          
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- END of Modal of Specs -->
                  <?php } ?>
              </td>
              <td><?php echo $resart['titreArt']; ?></td>
              <td>
                <?php 
                  $catArt = $resart['catArt'];
                  $sqlcat = "SELECT * FROM catart WHERE idCat = '$catArt'";
                  $envoicat = @mysql_query($sqlcat);
                  if($rescat = @mysql_fetch_array($envoicat)){
                    echo $rescat['categorie'];
                  }
                  ?>
              </td>
              <td>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#thumbnailmodal<?php echo $resart['idArt']; ?>">Voir</button>
                <!-- Modal of thumbnail -->
                  <div class="modal fade" id="thumbnailmodal<?php echo $resart['idArt']; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-body">
                          <img src="../../spec/articleimg/thumbnail/<?php echo $resart['thumbArt']; ?>" style="width: 500px; height: auto;" alt="">
                        </div>
                    </div>
                  </div>
                <!-- End of Modal of thumbnail -->
              </td>
              <td><a class="btn btn-primary" target=”_blank” href="articleitem.php?id=<?php echo $resart['idArt']; ?>">Voir Article</a></td>
              <td><a class="btn btn-success" href="addalaune.php?id=<?php echo $resart['idArt']; ?>">Ajouter à la Une</a></td>
              
            </tr>
            <?php } ?>
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