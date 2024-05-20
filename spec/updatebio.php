<?php 
    require("../database/cnx.php");
    session_start();
    $idSpec = $_SESSION["idSpec"];
    if(isset($_POST["btnupdatebio"])){
        $bio = $_POST["bio"];
        $sql = "UPDATE specialiste SET bioSpec = '$bio'";
        @mysql_query($sql);
        $_SESSION["bioSpec"] = $bio;
        header("location: profil.php");
    }

?>