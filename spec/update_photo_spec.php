<?php
 session_start();
 if(!(isset($_SESSION["idSpec"]))){
    header("location: ../index.php");
 }
require('../database/cnx.php');
 if(isset($_POST["updatePhoto"])){
    $id = $_POST["id"];
    $photo = $_FILES["photo"];

    		
    $tmpName=$_FILES['photo']['tmp_name'];
    $photo = $_FILES['photo']['name'];
    $size =$_FILES['photo']['size'];
    $error = $_FILES['photo']['error'];
    move_uploaded_file($tmpName,'pfp/'.$photo);	

    $sql = "UPDATE specialiste SET photoSpec='$photo' WHERE idSpec='$id'";
    @mysql_query($sql);
    header("location: profil.php");
 }

?>