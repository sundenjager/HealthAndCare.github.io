<?php
session_start();

if (isset($_SESSION["idSpec"])) {
    $idSpec = $_SESSION["idSpec"];
} else {
    header("location: ../index.php");
    exit();
}

require("../database/cnx.php");

if (isset($_POST["btnarticle"])) {
    $titreArt = addslashes($_POST["titreArt"]);
    $descArt = addslashes($_POST["descArt"]);
    $catArt = $_POST["catArt"];
    $thumbArt = $_FILES["thumbArt"];
    $textArt = addslashes($_POST["textArt"]);

   
    $thumbArtPath = 'articleimg/thumbnail/' . $thumbArt['name'];
    move_uploaded_file($thumbArt['tmp_name'], $thumbArtPath);

    
    $sql1 = "INSERT INTO article VALUES ('', '$idSpec', '$titreArt', '$catArt', '{$thumbArt['name']}', '$descArt', '$textArt', 0, 0)";
    $result1 = mysql_query($sql1);

    if($result1){
        header('location: retourarticle.php');
        exit(); 
    } else {
        echo 'Erreur insertion';
    }
} else {
    echo 'Form soumission';
}
?>
