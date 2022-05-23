<?php

    include "connexion.php";
   
    if(isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["objet"])&& isset($_POST["message"]))

    {
        
        $nom= $_POST["nom"];
        $email= $_POST["email"];
        $objet= $_POST["objet"];
        $messsage= $_POST["message"];

        $req = mysqli_query ($link, "insert into nour_contact (nom,email,objet,message) 
                                                values('$nom','$email', '$objet', '$messsage')");
        
        if($req)
        {
            echo "insertion reussie";
            echo ' <a href="contact.php">Retourner sur le site</a>';
        }
        else
        {
            echo"erreur d'insertion";
        } 
    }
?>