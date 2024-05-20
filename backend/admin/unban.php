<?php 
    $id = $_GET['id'];
    require("../../database/cnx.php");
    $sql2 = "DELETE FROM banusers WHERE idUser = '$id'";
    @mysql_query($sql2);
    header("location: bannedusers.php");
?>