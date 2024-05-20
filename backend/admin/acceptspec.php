<?php
    $id = $_GET['id'];
    require("../../database/cnx.php");
    $sql = "UPDATE specialiste SET etatSpec = 1 WHERE idSpec='$id'";
    @mysql_query($sql);
    header('location: requestspec.php');

?>
