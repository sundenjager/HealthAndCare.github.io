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

  <main id="main" style="margin-left: -180px;">

    <section class="inner-page pt-4">
        
      <div class="container">
        <?php require("sidelist.html"); ?>
        <div class="col">

                    <h1 style="padding-bottom: 10px; border-bottom: 3px ridge rgb(45, 46, 131);">Gestion des signalisations</h1>
                        <br><br>
                                <?php 
                                    $sqlquest = "SELECT * FROM quest ORDER BY dateQuest DESC";
                                    $envoiquest = @mysql_query($sqlquest);
                                    while($resquest = mysql_fetch_array($envoiquest)){
                                        $idQuest = $resquest['idQuest'];
                                        $sqlreport = "SELECT * FROM report";
                                        $envoireport= @mysql_query($sqlreport);
                                        while($resreport = @mysql_fetch_array($envoireport)){
                                            $reqIdUser = $resquest["idUser"];
                                            $sqluser = "SELECT * FROM user WHERE idUser = '$reqIdUser'";
                                            $envoiuser = @mysql_query($sqluser);
                                            while($resuser = mysql_fetch_array($envoiuser)){
                                            if($resuser["Photo"]==""){
                                                $resuser["Photo"] = "person.jpg";
                                            }
                                    ?>
                                
                                <div class="card" style="border: 2px solid rgb(45, 46, 131); box-shadow: 3px 3px 3px gray; border-radius: 10px;">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="circular" style="height: 40px; width: 40px; border: 3px solid rgb(45, 46, 131);">
                                                    <img src="../../UI/pfp/<?php echo  $resuser['Photo'];?>" alt="" style="height: 40px; width: auto;">
                                                </div>
                                            </div>
                                            <div class="col-8 text-left" style="padding-top: 5px;">
                                                
                                                <h5><a href="" data-bs-toggle="modal" data-bs-target="#modalban<?php echo $resquest["idUser"]; ?>"><?php echo $resuser['prenomUser']." ".$resuser['nomUser']; ?></a></h5>
                                               <!-- Modal -->
                                                    <div class="modal fade" id="modalban<?php echo $resquest["idUser"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Voulez-vous vraiment bloquer cet utilisateur ?</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                            <a  class="btn btn-danger" href="blockuser.php?id=<?php echo $resquest["idUser"]; ?>">Confirmer</a>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>

                                            </div>
                                            
                                                
                                                    <div class="col-1 text-right">
                                                        <a href="../../UI/supprimer_quest.php?id=<?php echo $resquest['idQuest']; ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 150px;" width="30" height="30" fill="red" class="bi bi-ban" viewBox="0 0 16 16">
                                                                <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                               
                                                
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <h3><?php echo $resquest['titreQuest']; ?></h3>
                                            <p><?php echo $resquest['details']; ?></p>                           
                                        </blockquote>
                                    </div>
                                    
                                </div>
                                <br><br>
                                <?php }}} ?>
                    </div>
                
      </div>
    </section>
    <!-- Service End -->


   


   

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>