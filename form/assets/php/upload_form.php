<?php

    include "../../config/connexion.php";
   
    if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"]) && isset($_POST["telephone"])
    && isset($_POST["objet"])&& isset($_POST["message"]));
    {
        
        $nom= $_POST["nom"];
        $mail= $_POST["mail"];
        $objet= $_POST["objet"];
        $messsage= $_POST["message"];

        $req = $db->prepare("insert into formulaire(nom,prenom,email,telephone,objet,message,date) 
                                                values('$nom','$mail','$objet', '$messsage', current_timestamp() )");
        $req->execute();
        
        if($req)
        {
            echo "insertion reussie";
            echo ' <a href="../../liste.php">Voir Formulaire</a>';
        }
        else
        {
            echo"erreur d'insertion";
        }
        
    }
?>

