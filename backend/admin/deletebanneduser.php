<?php 
    $id = $_GET['id'];
    require("../../database/cnx.php");
    $sqlquest = "DELETE FROM quest WHERE idUser = '$id'";
    @mysql_query($sqlquest);
    $sqlemail = "SELECT emailUser from user WHERE idUser = '$id'";
    $envoiemail = @mysql_query($sqlemail);
    $resemail = @mysql_fetch_array($envoiemail);
    $email = $resemail['emailUser'];
    $sql0 = "INSERT INTO listerouge VALUES ('$email')";
    @mysql_query($sql0);
    $sql1 = "DELETE FROM user WHERE idUser = '$id'";
    @mysql_query($sql1);
    $sql2 = "DELETE FROM banusers WHERE idUser = '$id'";
    @mysql_query($sql2);
    header("location: bannedusers.php"); 
?>