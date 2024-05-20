<?php 
    require("database/cnx.php");
    if(isset($_POST["btnCtc"])){
        
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $sujet = $_POST["sujet"];
        $message = addslashes($_POST["message"]);
        
        $sql = "INSERT INTO contact VALUES ('', '$nom', '$sujet', '$email', '$message')";
        @mysql_query($sql);

        $mes="Votre message a été bien envoyé";
        header("location: contact.php?mes=$mes");

    }
?>

