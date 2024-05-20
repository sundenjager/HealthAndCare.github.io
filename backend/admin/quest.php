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
  $id = $_GET["id"];

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

    <?php 
      $sqlquest = "SELECT * FROM quest WHERE idQuest='$id'";
      $envoiquest = @mysql_query($sqlquest);
      $resquest = mysql_fetch_array($envoiquest);
      $reqIdUser = $resquest["idUser"];
      $sqluser = "SELECT * FROM user WHERE idUser = '$reqIdUser'";
      $envoiuser = @mysql_query($sqluser);
      $resuser = mysql_fetch_array($envoiuser);
      if($resuser["Photo"]==""){
        $resuser["Photo"] = "person.jpg";
        }
    ?>
  <main>
    <br><br>
    <section>
      <div class="container"  style="border: 5px solid rgb(45, 46, 131);border-radius: 35px; background-color: white; padding: 50px;">
        <div class="row" style="padding-bottom: 20px; border-bottom: 2px solid rgb(45, 46, 131);">
          <div class="col-1">
            <div class="circular" style="height: 50px; width: 50px; border: 3px solid rgb(45, 46, 131);">
              <img src="../../UI/pfp/<?php echo  $resuser['Photo'];?>" alt="" style="height: 40px; width: auto;">
            </div>
          </div>
          <div class="col-6 text-left" style="padding-top: 5px;">
            <h4><?php echo $resuser['prenomUser']." ".$resuser['nomUser']; ?></h4>
          </div>
          <div class="col-2 text-right">
            <a href="" data-bs-toggle="modal" data-bs-target="#reportmodal<?php echo $resquest['idQuest']; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" style="position: absolute; top:10px;  right: 20px;" width="30" height="30" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
                <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"/>
              </svg>
            </a>
          </div>  
        </div>
        <div class="row" style="padding-top: 20px;">
          <h1><?php echo $resquest['titreQuest']; ?></h1>
        </div> 
        <div class="row">
          <p style="font-size: 24px;"><?php echo $resquest['details']; ?></p>
        </div>
        <br>
        <br>
        <?php 
          $nbrrep=0;
          $sqlrepnb = "SELECT count(*) FROM reponse WHERE idQuest='$id'";
          $envoirepnb = @mysql_query($sqlrepnb);
          $resnbrrep = @mysql_fetch_array($envoirepnb);
          $nbrrep = $resnbrrep["count(*)"];
        ?>
        <div class="row" style=" border-bottom: 2px solid rgb(45, 46, 131);">
          <div class="col"><h5>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nbrrep;?>&nbsp;Réponse(s)</h5></div>
        </div>
        <?php 
          $sqlrep = "SELECT * FROM reponse WHERE idQuest='$id'";
          $envoirep = @mysql_query($sqlrep);
          while($resrep = @mysql_fetch_array($envoirep)){ 
          $idSpecRep = $resrep["idSpec"] ;
          $sqlSpec = "SELECT * FROM specialiste WHERE idSpec='$idSpecRep'";
          $envoiSpec = @mysql_query($sqlSpec);
          $resSpecRep = @mysql_fetch_array($envoiSpec);
          if($resSpecRep["photoSpec"]==""){
            $resSpecRep["photoSpec"] = "person.jpg";
            }

        ?>
        <div class="row" style="padding-top: 40px;">
          <div class="card" style="width: 80%; margin-left: 90px; border: 2px solid rgb(45, 46, 131); box-shadow: 3px 3px 3px;">
            <div class="card-body">
              <div class="row" style=" border-bottom: 2px solid rgb(45, 46, 131);">
                <div class="col-1">
                  <div class="circular" style="height: 40px; width: 40px; border: 3px solid rgb(45, 46, 131);">
                    <img src="../../spec/pfp/<?php echo  $resSpecRep['photoSpec'];?>" alt="" style="height: 40px; width: auto;">
                  </div>
                </div>
                <div class="col-10">
                  <a href="specialist.php?id=<?php echo $resSpecRep["idSpec"]; ?>">
                    <h5 class="card-title"><?php echo $resSpecRep["nomSpec"]." ".$resSpecRep["prenomSpec"]; ?></h5>
                  </a>
                  <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $resSpecRep["specialite"]; ?> à&nbsp;<?php echo $resSpecRep["etabSpec"]; ?></h6>
                </div>
              </div>
              <br>
              <p class="card-text"><?php echo $resrep["contenuRep"]; ?></p>
            </div>
          </div>
        </div>

        <?php } ?>
      </div>
    </section>
    <br><br>
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