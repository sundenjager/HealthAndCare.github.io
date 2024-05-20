<?php 
    require("database/cnx.php");
    if(isset($_POST["inscrispecbtn"])){
        
        $nomSpec = $_POST["nomSpec"];
        $prenomSpec = $_POST["prenomSpec"];
        $specialite = addslashes($_POST["specialite"]);
        $etabSpec = $_POST["etabSpec"];
        $emailSpec = $_POST["emailSpec"];
        $telSpec = $_POST["telSpec"];
        $adresseSpec = $_POST["adresseSpec"];
        $paysSpec = $_POST["paysSpec"];
        $fichierSpec = $_FILES["fichierSpec"];
        $pwSpec = $_POST["pwSpec"];
        $reppw = $_POST["reppw"];

        $emailcheck = 0;

        $sqlemail = "SELECT emailSpec from specialiste WHERE emailSpec = '$emailSpec'";
        $envoiemail = @mysql_query($sqlemail);
        if($resemail = @mysql_fetch_array($envoiemail)){
            $emailcheck = 1;
        }

        $listerougecheck = 0;
        $sqllisterouge = "SELECT * FROM listerouge WHERE emaillisterouge = '$emailSpec'";
        $envoilsiterouge = @mysql_query($sqllisterouge);
        if($reslisterouge = @mysql_fetch_array($envoilsiterouge)){
            $listerougecheck = 1;
        }

        if(empty($nomSpec)){
            $error_mes = "Veuillez entrer votre nom!";
        }elseif(empty($prenomSpec)){
            $error_mes = "Veuillez entrer votre prénom!";
        }elseif(empty($specialite)){
            $error_mes = "Veuillez mentionner votre spécialité!";
        }elseif(empty($etabSpec)){
            $error_mes = "Veuillez mentionner votre établissement!";
        }elseif(empty($emailSpec)){
            $error_mes = "Veuillez entrer votre adresse email!";
        }elseif (($emailcheck == 1) || ($listerougecheck == 1)){
            $error_mes = "Email existe déjà!";
        }elseif(empty($telSpec)){
            $error_mes = "Veuillez entrer votre numéro de téléphone!";
        }elseif(empty($adresseSpec)){
            $error_mes = "Veuillez entrer votre adresse!";
        }elseif(empty($fichierSpec)){
            $error_mes = "Un document justificatif est necessaire!";
        }elseif(empty($pwSpec)){
            $error_mes = "Veuillez créer un mot de passe!";
        }elseif(empty($reppw)){
            $error_mes = "Veuillez remplir tous les champs de mot passe";
        }elseif(!($pwSpec === $reppw)){
            $error_mes = "Les deux mot de passe ne sont pas identiques!";
        }else{
            $targetDir = "backend/admin/fichierSpec/"; 
            $targetFile = $targetDir.basename($_FILES["fichierSpec"]["name"]); 
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            if($fileType != "pdf" || $_FILES["fichierSpec"]["size"] > 2000000) { 
                $error_mes = "Seulement les fichiers PDF qui ne dépasse pas 2Mo sont autorisés!"; 
            }else{
                if(move_uploaded_file($_FILES["fichierSpec"]["tmp_name"], $targetFile)){
                    $filename = $_FILES["fichierSpec"]["name"];
                    $sql = "INSERT INTO specialiste VALUES ('','$nomSpec','$prenomSpec','$specialite','$etabSpec','$emailSpec','$telSpec','$adresseSpec','$paysSpec','$filename','$pwSpec','','',0)";
                    @mysql_query($sql);
                    $success_mes = "Votre demande d'inscription a été envoyé!";
                }
            }             
        }
        if(!($error_mes == "")){
            header("location: inscrispec.php?error_mes=$error_mes");
        }elseif(!($success_mes == "")){
            header("location: inscrispec.php?success_mes=$success_mes");
        }    
    }
?>