<?php 
 
    $id = $_GET['id'];
    require('../../database/cnx.php');

    $sql = "UPDATE article SET alaune = 0 WHERE idArt='$id'";
    mysql_query($sql);
    header('location: alaune.php');

?>