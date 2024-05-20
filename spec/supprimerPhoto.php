<?php 
    require("../database/cnx.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = "UPDATE specialiste SET photoSpec='' WHERE idSpec='$id'";
        @mysql_query($sql);
        header("location: profil.php");
    }
?>