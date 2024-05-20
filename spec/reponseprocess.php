<?php 
    session_start();
    if(isset($_SESSION["idSpec"])){
      $idSpec = $_SESSION["idSpec"];
    }else{
      header("location: ../index.php");
    }
    require("../database/cnx.php");
   
    if(isset($_POST["btnrpn"])){
        $idQuest = $_POST["idQuest"];
        $contenuRep = $_POST["contenuRep"];
        $contenuRep = addslashes($contenuRep);
        $sql = "INSERT INTO reponse VALUE ('','$idSpec','$idQuest','$contenuRep')";
        @mysql_query($sql);
        header("location: question.php?id=$idQuest");
    }
?>