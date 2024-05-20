<?php 
    $id = $_GET['id'];
    require("../../database/cnx.php");
    $sqlrep = "DELETE FROM reponse WHERE idQuest = '$id'";
    @mysql_query($sqlrep);
    $sqlquest = "DELETE FROM quest WHERE idQuest = '$id'";
    @mysql_query($sqlquest);
    header("location: pubs.php"); 
?>
