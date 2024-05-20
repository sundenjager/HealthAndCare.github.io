<?php 
    $id = $_GET['id'];
    require("../../database/cnx.php");
    $sql2 = "DELETE FROM banspecs WHERE idSpec = '$id'";
    @mysql_query($sql2);
    header("location: bannedusers.php");
?>