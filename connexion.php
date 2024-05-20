<?php 
    require("database/cnx.php");
    if(isset($_POST["btnConn"])){

        $emailConn = $_POST["emailConn"];
        $pwConn = $_POST["pwConn"];

        if($emailConn == ""){
            $errorConnEmail = "Entrer Email!";
            header("location: index.php?errorConnEmail=$errorConnEmail");
        }elseif($pwConn == ""){
            $errorConnPw = "Entrer mot de passe!";
            header("location: index.php?errorConnPw=$errorConnPw");
        }else{
            $sql1 = "SELECT * FROM user WHERE emailUser = '$emailConn'";
            $envoi1 = @mysql_query($sql1);
            $sql2 = "SELECT * FROM specialiste WHERE emailSpec ='$emailConn'";
            $envoi2 = @mysql_query($sql2);
            if(!(($res1 = @mysql_fetch_array($envoi1)) || ($res2 = @mysql_fetch_array($envoi2)))){
                $errorConnEmail = "Email introuvable!";
                header("location: index.php?errorConnEmail=$errorConnEmail");
            }else{
                if(!(empty($res1))){
                    $sql = "SELECT * FROM user WHERE emailUser = '$emailConn' AND pwUser = '$pwConn'";
                    $envoi = @mysql_query($sql);
                    if(!($res = @mysql_fetch_array($envoi))){
                        $errorConnPw = "mot de passe incorrecte!";
                        header("location: index.php?errorConnPw=$errorConnPw");
                        }else{
                            $idUser = $res['idUser'];
                            $sqlban = "SELECT * FROM banusers WHERE idUser='$idUser'";
                            $envoiban = @mysql_query($sqlban);
                            if($resban = @mysql_fetch_array($envoiban)){
                                header('location: UI/banpage.php');
                            }else{
                                session_start();
                                $_SESSION["idUser"] = $res["idUser"];
                                $_SESSION["nomUser"] = $res["nomUser"];
                                $_SESSION["prenomUser"] = $res["prenomUser"];
                                $_SESSION["emailUser"] = $res["emailUser"];
                                $_SESSION["telUser"] = $res["telUser"];
                                $_SESSION["pwUser"] = $res["pwUser"];
                                $_SESSION["birthUser"] = $res["birthUser"];
                                $_SESSION["pays"] = $res["pays"];
                                $_SESSION["photo"] = $res["photo"];
                                header("location: UI/profil.php");
                            }
                        }
                    }elseif(!(empty($res2))){
                        $sql = "SELECT * FROM specialiste WHERE emailSpec = '$emailConn' AND pwSpec = '$pwConn'";
                        $envoi = @mysql_query($sql);
                        if(!($res = @mysql_fetch_array($envoi))){
                        $errorConnPw = "mot de passe incorrecte!";
                        header("location: index.php?errorConnPw=$errorConnPw");
                        }else{
                        session_start();
                        $_SESSION["idSpec"] = $res["idSpec"];
                        $_SESSION["nomSpec"] = $res["nomSpec"];
                        $_SESSION["prenomSpec"] = $res["prenomSpec"];
                        $_SESSION["specialite"] = $res["specialite"];
                        $_SESSION["etabSpec"] = $res["etabSpec"];
                        $_SESSION["emailSpec"] = $res["emailSpec"];
                        $_SESSION["telSpec"] = $res["telSpec"];
                        $_SESSION["adresseSpec"] = $res["adresseSpec"];
                        $_SESSION["paysSpec"] = $res["paysSpec"];
                        $_SESSION["pwSpec"] = $res["pwSpec"];
                        $_SESSION["photoSpec"] = $res["photoSpec"];
                        $_SESSION["bioSpec"] = $res["biosSpec"];
                        $_SESSION["etatSpec"] = $res["etatSpec"];
                        
                        if($res["etatSpec"]==0){
                        header("location: spec/notready.html");
                        }else{
                        header("location: spec/profil.php");
                        }
                    }
                }
            }
        }
    }
?>