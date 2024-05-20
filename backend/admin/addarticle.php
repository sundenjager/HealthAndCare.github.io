<?php 
    $id = $_GET['id'];
    require('../../database/cnx.php');

    $sql = "UPDATE article SET etatArt = 1 WHERE idArt='$id'";
    mysql_query($sql);
    header('location: waitingarticles.php');
?>