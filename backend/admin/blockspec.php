<?php
    $id = $_GET['id'];
    require("../../database/cnx.php");
    $sql = "INSERT INTO banspecs VALUES ('$id')";
    @mysql_query($sql);
    header('location: specs.php');

?>