<?php 
    require("../database/cnx.php");
    if(isset($_POST["btnreport"])){
        $id = $_POST['id'];
         
        $sql = "INSERT INTO  report VALUES ('','$id')";
        @mysql_query($sql);
        header("location: profil.php");
    }
?>