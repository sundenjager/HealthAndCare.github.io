<?php 
 
    $id = $_GET['id'];
    require('../../database/cnx.php');

    $sql = "UPDATE article SET alaune = 1 WHERE idArt='$id'";
    mysql_query($sql);
    header('location: arts.php');

?>