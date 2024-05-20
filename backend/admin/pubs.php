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
    <section class="inner-page pt-4">
      <div class="row">
        <?php require("sidelist.html"); ?>
        <br>
        <div class="col-6" style="width: 90%;">
        <h1 style="border-bottom: 3px ridge rgb(45, 46, 131);">Publications</h1>
        <br>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Contenu</th>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
                <th scope="col">utilisateur</th>
                <th scope="col">Réponses</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                <?php 
                  $sqlquest = "SELECT * FROM quest";
                  $envoiQuest = @mysql_query($sqlquest);
                  while($resquest = @mysql_fetch_array($envoiQuest)){
                ?>
              <tr>
                <td><?php echo $resquest['idQuest']; ?></td>
                <td>
                  <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalquest<?php echo $resquest['idQuest']; ?>">Voir</button>
                  <div class="modal fade" id="modalquest<?php echo $resquest['idQuest']; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $resquest['titreQuest']; ?></h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <?php echo $resquest['details']; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td><?php echo $resquest['dateQuest']; ?></td>
                <td><?php echo $resquest['timeQuest']; ?></td>
                <td>
                  <?php
                    $idUser = $resquest['idUser'];
                    $sqluser = "SELECT * FROM user WHERE idUser = '$idUser'";
                    $envoiUser = @mysql_query($sqluser);
                    $resuser = @mysql_fetch_array($envoiUser);
                      $photouser = $resuser['Photo'];
                      if($photouser == ""){
                        $photouser = "person.jpg";
                      }   
                  ?>
                  <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modaluser<?php echo $resuser['idUser']; ?>">Voir</button>
                  <!-- Modal of Specs -->
                    <div class="modal fade" id="modaluser<?php echo $resuser['idUser']; ?>" tabindex="-1"  aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $resuser['nomUser']." ".$resuser['prenomUser']; ?></h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-1">
                                <div class="circular" style="margin-bottom: 160px;">
                                  <img src="../../UI/pfp/<?php echo  $photouser;?>" alt="" style="height: 100px; width: auto;">
                                </div>
                              </div>
                              <div class="col-8" style="margin-left: 75px;">
                                <table class="table">
                                    <tr>
                                      <th>Email:</th>
                                      <td><?php echo $resuser['emailUser']; ?></td>
                                    </tr>       
                                    <tr>
                                      <th>Tél:</th>
                                      <td><?php echo $resuser['telUser']; ?></td>
                                    </tr> 
                                    <tr>
                                      <th>ID:</th>
                                      <td><?php echo $resuser['idUser']; ?></td>
                                    </tr>          
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ferner</button>
                            <a type="button" class="btn btn-danger" href="blockuser.php<?php echo $resuser['idUser']; ?>">Bloque</a>
                          </div>

                        </div>
                    </div>
                  <!-- END of Modal of Specs -->
                </td>
                <td>
                  <a class="btn btn-primary" target=”_blank” href="quest.php?id=<?php echo $resquest['idQuest']; ?>">Voir</a>
                </td>
                <td><a class="btn btn-danger" href="deletequest.php?id=<?php echo $resquest['idQuest']; ?>">Supprimer</a></td>
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