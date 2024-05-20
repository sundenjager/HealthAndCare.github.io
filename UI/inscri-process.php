<?php 
    require ("database/cnx.php");
    if(isset($_POST["btn_inscri"])){
        $nomUser = $_POST["nomUser"];
        $prenomUser = $_POST["prenomUser"];
        $emailUser = $_POST["emailUser"];
        $telUser = $_POST["telUser"];
        $pwUser = $_POST["pwUser"];
        $pwUser2 = $_POST["pwUser2"];
        $birthUser = $_POST["birthUser"];
        $pays = $_POST["pays"];

        $emailcheck = 0;

        $sqlemail = "SELECT emailUser from user WHERE emailUser = '$emailUser'";
        $envoiemail = @mysql_query($sqlemail);
        if($resemail = @mysql_fetch_array($envoiemail)){
            $emailcheck = 1;
        }

        $listerougecheck = 0;
        $sqllisterouge = "SELECT * FROM listerouge WHERE emaillisterouge = '$emailUser'";
        $envoilsiterouge = @mysql_query($sqllisterouge);
        if($reslisterouge = @mysql_fetch_array($envoilsiterouge)){
            $listerougecheck = 1;
        }

        if($nomUser == "") {
            $error_mes = "Veillez entrer votre nom !";
        }elseif ($prenomUser == "") {
            $error_mes = "Veillez entrer votre prénom !";
        }elseif ($telUser == "") {
            $error_mes = "Veillez entrer votre nunéro de téléphon !";
        }elseif ($emailUser == "") {
            $error_mes = "Veillez entrer votre adresse Email !";
        }elseif (($emailcheck == 1) || ($listerougecheck == 1)) {
            $error_mes = "Email existe déjà!";
        }elseif ($pwUser == "") {
            $error_mes = "entrer une mot de passe SVP !";
        }elseif ($pwUser2 == "") {
            $error_mes = "Répeter mot de passe SVP !";
        }elseif(!($pwUser == $pwUser2)){
            $error_mes = "les champs de mot de passe ne sont pas identiques !";
        }else{
            $sql = "INSERT INTO user VALUES ('','$nomUser','$prenomUser','$emailUser','$telUser','$pwUser','$birthUser','$pays','')";
            @mysql_query($sql);
            $success_mes = "vous êtes inscit(e) !";
        }
        if(!($error_mes == "")){
            header("location: inscription.php?error_mes=$error_mes");
        }elseif(!($success_mes == "")){
            header("location: inscription.php?success_mes=$success_mes");
        }
    }
?>