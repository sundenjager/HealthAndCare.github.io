<?php
$id = $_POST["id"]; 
    $categorieupdate = $_POST['categorieupdate'];
    require("../../database/cnx.php");
    
    $sql2 = "UPDATE catart SET categorie = '$categorieupdate' WHERE idCat = '$id'";
    @mysql_query($sql2);

    header("location: catart.php"); 
?>