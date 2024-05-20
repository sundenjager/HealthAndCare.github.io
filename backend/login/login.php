<?php 
    require("../../database/cnx.php");
    if(isset($_POST["btncnxadmin"])){

        $email = $_POST["email"];
        $pw = $_POST["pw"];

        if($email == ""){
            $errorConnEmail = "Entrer Email!";
            header("location: index.php?errorConnEmail=$errorConnEmail");
        }elseif($pw == ""){
            $errorConnPw = "Entrer mot de passe!";
            header("location: index.php?errorConnPw=$errorConnPw");
        }else{
            $sql = "SELECT * FROM admin WHERE emailAdmin = '$email'";
            $envoi = @mysql_query($sql);
            if(!($res = @mysql_fetch_array($envoi))){
                $errorConnEmail = "Email introuvable!";
                header("location: index.php?errorConnEmail=$errorConnEmail");
            }else{
                    $sql = "SELECT * FROM admin WHERE emailAdmin = '$email' AND pwAdmin = '$pw'";
                    $envoi = @mysql_query($sql);
                    if(!($res = @mysql_fetch_array($envoi))){
                        $errorConnPw = "mot de passe incorrecte!";
                        header("location: index.php?errorConnPw=$errorConnPw");
                        }else{
                        session_start();
                        $_SESSION["idAdmin"] = $res["idAdmin"];
                        $_SESSION["nomAdmin"] = $res["nomAdmin"];
                        $_SESSION["prenomAdmin"] = $res["prenomAdmin"];
                        $_SESSION["emailAdmin"] = $res["emailAdmin"];
                        $_SESSION["pwAdmin"] = $res["pwAdmin"];
                        header("location: ../admin/index.php");
                    
                        }
                    
                }
            }
        }
?>
