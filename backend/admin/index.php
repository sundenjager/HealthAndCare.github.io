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
        width: 200px;
        height: 200px;
        border-radius: 50%;
        position: relative;
        overflow: hidden;
        box-shadow: 3px 3px 1px gray;
        border: 10px solid rgb(45, 46, 131);
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
        <h1 style="border-bottom: 3px ridge rgb(45, 46, 131);">Gestion des utilisateurs</h1>
        <br>
        <a href="bannedusers.php"><h5 style="margin-left: 1100px; color: #c21010;"><u>Utilisateurs bloqués</u></h5></a>
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Tél</th>
                <th scope="col">Mot de passe</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Pays</th>
                <th scope="col">Photo</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $sql = "SELECT * FROM user";
                $envoi = @mysql_query($sql);
                while($res = @mysql_fetch_array($envoi)){
                  if($res["Photo"]==""){
                    $res["Photo"] = "person.jpg";
                  }
                  $idUser = $res["idUser"];
                  $sqlban = "SELECT * FROM banusers WHERE idUser = '$idUser'";
                  $envoiban = @mysql_query($sqlban);
                  if(!($resban = @mysql_fetch_array($envoiban))){
              ?>
              <tr>
                <th scope="row"><?php echo $res["idUser"]; ?></th>
                <td><?php echo $res["nomUser"]; ?></td>
                <td><?php echo $res["prenomUser"]; ?></td>
                <td><?php echo $res["emailUser"]; ?></td>
                <td><?php echo $res["telUser"]; ?></td>
                <td><?php echo $res["pwUser"]; ?></td>
                <td><?php echo $res["birthUser"]; ?></td>
                <td><?php echo $res["pays"]; ?></td>
                <td><a href="" data-bs-toggle="modal" data-bs-target="#modal<?php echo $res['idUser']; ?>">Voir</a></td>
                <td>
                  <a href="blockuser.php?id=<?php echo $res["idUser"]; ?>" class="btn btn-outline-danger">Block</a>
                </td>
              </tr>
               <!-- Modal -->
                <div class="modal fade" id="modal<?php echo $res['idUser']; ?>" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Photo de profil de <?php echo $res['nomUser']." ".$res['prenomUser']; ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="circular">
                          <img src="../../UI/pfp/<?php echo  $res['Photo']; ?>" style="height: 200px; width: auto;">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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