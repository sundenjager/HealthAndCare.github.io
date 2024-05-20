
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
                        <a href="forum.php" class="nav-item nav-link">Forum</a>
                        <a href="articles.php" class="nav-item nav-link active">Articles</a>
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
            <h1 style="color: aliceblue;">Consultez nos Articles</h1>
        </div>
    </div>
    <!-- Page Header End -->

    
    <!-- Service Start -->
    <div class="container-fluid container-service py-5" style="width: 1200px; height: auto;">
            <?php 
                require('database/cnx.php');
                $sqlCat = "SELECT * FROM catart";
                $envoiCat = @mysql_query($sqlCat);
                while($resCat = @mysql_fetch_array($envoiCat)){
                    $idCat = $resCat["idCat"];
            ?>

        <h1><?php echo $resCat["categorie"] ; ?></h1>

        <div id="carousel<?php echo $resCat["idCat"] ; ?>" class="carousel slide">
        
            <div class="carousel-inner">
                <?php 
                    
                    $sqlart = "SELECT * FROM article WHERE etatArt = 1 AND catArt = '$idCat'";
                    $envoiart = mysql_query($sqlart);
                    $active = true; // Variable to track the first item as active
                    while($resart = mysql_fetch_array($envoiart)){
                ?>
                <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                    <img src="spec/articleimg/thumbnail/<?php echo $resart['thumbArt']; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <div class="container" style="margin-left: 100px;">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1><?php echo $resart['titreArt']; ?></h1>
                                    <p class="mb-5 animated slideInRight"><?php echo $resart['descArt']; ?></p>
                                    <a href="articleitem.php?id=<?php echo $resart['idArt'];?>" class="btn btn-primary py-3 px-5 animated slideInRight">Découvrir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $active = false; // Set active to false after the first item
                 }  
                ?>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?php echo $resCat["idCat"] ; ?>" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel<?php echo $resCat["idCat"] ; ?>" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <hr>
        <br><br>
        <?php } ?>
    </div>


   


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