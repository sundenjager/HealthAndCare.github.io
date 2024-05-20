<?php 
    session_start();
    if(isset($_SESSION["idSpec"])){
      $idSpec = $_SESSION["idSpec"];
      $pwSpec = $_SESSION["pwSpec"];
      
    }else{
      header("location: ../index.php");
    }
    require("../database/cnx.php");
    if(isset($_POST["btn"])){
        $pw = $_POST["pw"];
        if(!($pw==$pwSpec)){
            $errormes = "mot de passe incorrecte ";
            header("location: deleteacc.php?error=$errormes");
        }else{
            $sql = "DELETE FROM specialiste WHERE idSpec = '$idSpec'";
            @mysql_query($sql);
            session_destroy();
            header("location: ../index.php");
        }
    }

?>