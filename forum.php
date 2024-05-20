<?php 
    require("database/cnx.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Health & Care</title>
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
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!--
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Career</a>
                    <a class="breadcrumb-item small text-body" href="#">Support</a>
                    <a class="breadcrumb-item small text-body" href="#">Terms</a>
                    <a class="breadcrumb-item small text-body" href="#">FAQs</a>
                </nav>
            </div>
        </div>
    </div>
    -->
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <a href="index.php" class="h1 text-white mb-0"><img src="img/Health & Care Logo with subs.png" style="width: 100px; margin-right: 50px;"></a>
                <div class="d-flex">
                    <form action="connexion.php" method="POST">
                    <div class="row g-3 " style="margin-right: 10px;">            
                        <div class="col-auto">
                            <input type="email" <?php if(isset($_GET["errorConnEmail"])){ ?> style="border-color: red;" <?php } ?> class="form-control" name="emailConn" placeholder="Email">
                            <?php 
                            if(isset($_GET["errorConnEmail"])){
                                echo '<font color="red">'.$_GET["errorConnEmail"].'</font>';
                            }
                            ?>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" <?php if(isset($_GET["errorConnPw"])){ ?> style="border-color: red;" <?php } ?>  class="form-control" name="pwConn" placeholder="Mot de Passe" aria-describedby="passwordHelpInline">
                            <?php 
                            if(isset($_GET["errorConnPw"])){
                                echo '<font color="red">'.$_GET["errorConnPw"].'</font>';
                            }
                            ?>   
                        </div>   
                        <div class="col-auto">
                            <button type="submit"  class="btn btn-primary py-3 px-5 animated slideInRight" name="btnConn" style="background-color: #29539e; margin-right: 50px;">Connexion</button>
                        </div>             
                    </div>
                        </form>
                    <div class="d-flex">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.php" class="navbar-brand d-lg-none">
                    <img src="img/Health & Care Logo with subs.png" style="width: 100px;">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link">Accueil</a>
                        <a href="about.php" class="nav-item nav-link">A propos</a>
                        <a href="forum.php" class="nav-item nav-link active">Forum</a>
                        <a href="articles.php" class="nav-item nav-link">Articles</a>
                        <a href="team.php" class="nav-item nav-link">Equipe</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Inscription</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="inscription.php" class="dropdown-item">En tant que Utilisateur</a>
                                <a href="inscrispec.php" class="dropdown-item">En tant que Spécialiste</a>
                            </div>
                        </div>

                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->





    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 style="color: aliceblue;">Vous Avez des Questions ?</h1>
            <br>
            <a href="inscription.php" class="btn btn-primary py-3 px-5 animated slideInRight" style="background-color: #29539e;">Commencer</a>
        </div>
    </div>
    <!-- Page Header End -->

    
    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="container" style="border-bottom: 1px solid black; padding-bottom: 20px;">
                <div class="row">
                    <input class="form-control form-control-lg" type="text" name="recherchetext" placeholder="Rechercher Forum" aria-label=".form-control-lg example" REQUIRED> 
                </div>
                <div class="row">
                    <a href="inscription.php" class="btn btn-primary btn-lg">Rechercher</a>
                </div>  
            </div>
            <br><br>
                    <?php 
                        $sqlquest = "SELECT * FROM quest ORDER BY dateQuest DESC";
                        $envoiquest = @mysql_query($sqlquest);
                        while($resquest = mysql_fetch_array($envoiquest)){
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
                                        <img src="UI/pfp/<?php echo  $resuser['Photo'];?>" alt="" style="height: 40px; width: auto;">
                                    </div>
                                </div>
                                <div class="col-8 text-left" style="padding-top: 5px;">
                                    <h5><a href="inscription.php"><?php echo $resuser['prenomUser']." ".$resuser['nomUser']; ?></a></h5>
                                </div>                                 
                            </div>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <h3><?php echo $resquest['titreQuest']; ?></h3>
                                <p><?php echo $resquest['details']; ?></p>                           
                            </blockquote>
                        </div>
                        <a href="inscription.php" class="btn" style="margin: 2px; color: white; background-color: rgb(45, 46, 131); border-radius: 4px;" type="button" aria-expanded="false" aria-controls="collapseExample">
                            Réponses...
                        </a>
                    </div>
                    <br><br>
                    <?php }} ?>
        </div>
    </div>
    <!-- Service End -->
    <!-- Service End -->


   


    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/Health & Care Logo with subs.png" style="width: 100px;">
                    </a>
                    <br><br>
                    <p class="fs-5 mb-4">N'hésitez pas à nous contacter!</p>
                    <p><i class="fa fa-map-marker-alt me-2"></i>123 rue XXXXX, XXXXX, XXXXX</p>
                    <p><i class="fa fa-phone-alt me-2"></i>+216 XX XXX XXX</p>
                    <p><i class="fa fa-envelope me-2"></i>info@h&c.com</p>
                    <div class="d-flex mt-4">
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Liens Rapides</h4>
                            <a class="btn btn-link" href="">A propos</a>
                            <a class="btn btn-link" href="">Contact</a>
                            <a class="btn btn-link" href="">Equipe</a>
                            <a class="btn btn-link" href="">Forum</a>
                            <a class="btn btn-link" href="">Articles</a>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="text-light mb-4">Newsletter</h4>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0 py-3 px-4" style="background: rgba(255, 255, 255, .1);" placeholder="Votre adresse email"><button class="btn btn-primary px-4">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a href="#">Health & Care</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    
                    <p class="mb-0">Designed by <a href="">Ayoub</a><br>Distributed by <a href="">Ayoub</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


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