<?php 
    $id = $_GET['id'];
    require("../../database/cnx.php");
    $sqlquest = "DELETE FROM reponse WHERE idSpec = '$id'";
    @mysql_query($sqlquest);
    $sqlemail = "SELECT emailSpec from specialiste WHERE idSpec = '$id'";
    $envoiemail = @mysql_query($sqlemail);
    $resemail = @mysql_fetch_array($envoiemail);
    $email = $resemail['emailSpec'];
    $sql0 = "INSERT INTO listerouge VALUES ('$email')";
    @mysql_query($sql0);
    $sql1 = "DELETE FROM specialiste WHERE idSpec = '$id'";
    @mysql_query($sql1);
    $sql2 = "DELETE FROM banspecs WHERE idSpec = '$id'";
    @mysql_query($sql2);
    header("location: bannedspec.php"); 
?>