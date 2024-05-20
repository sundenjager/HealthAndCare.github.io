<?php
    $id = $_GET['id'];
    require("../../database/cnx.php");
    $sql = "INSERT INTO banusers VALUES ('$id')";
    @mysql_query($sql);
    header('location: index.php');

?>