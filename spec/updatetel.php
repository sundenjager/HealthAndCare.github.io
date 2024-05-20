<?php 
    require("../database/cnx.php");
    session_start();
    $idSpec = $_SESSION["idSpec"];
    if(isset($_POST["updatetelbtn"])){
        $telSpec = $_POST["telSpec"];
        $sql = "UPDATE specialiste SET telSpec = '$telSpec'";
        @mysql_query($sql);
        $_SESSION["telSpec"] = $telSpec;
        header("location: profil.php");
    }

?>