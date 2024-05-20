<?php
    $id = $_GET['id'];
    require("../../database/cnx.php");
    $sql = "DELETE FROM contact WHERE idMes = '$id'";
    @mysql_query($sql);
    header('location: contact.php');

?>