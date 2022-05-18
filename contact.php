<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         <link rel="stylesheet" href="style_contact.css">
         <link  href="https://fonts.googleapis.com/css?family=karla" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <nav>
            <img src="icon.jpg" alt="" class="lg">
            <ul>
                <li><a href="Accueil.html">Accueil</a></li>
                <li><a href="administration.html">A propos</a></li>
                <li><a href="service.html">Service</a></li>
                <li><a href="destination.html">Axes routiers</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
       
<div class="block2">
    
</div>
<div class="block3">
    <center><H2>CONTACT DES SERVICES COURIERS </H2></center>
    <img src="personnel_1.jpg" alt="">
    <P></P>
</div>
<form action="upload_form.php" method="POST">
    <h1>CONTACT</h1>
    <div class="formulaire">
        <div class="groupe">
            <label>Nom:</label>
            <input type="text" class="input" name="nom" id="nom" placeholder="Votre nom ici..." required>
        </div>
        <div class="groupe">
            <label>Email:</label>
            <input type="email" class="input" name="email" id="mail"placeholder="Votre email ici..." required>
        </div>
        <div class="groupe">
            <label>Objet:</label>
            <input type="text" class="input" name="objet" id="objet"placeholder="Votre objet ici..." required>
        </div>
        <div class="msg">
            <label>Message:</label>
            <textarea name="message" id="message" placeholder="Votre message..."></textarea>
        </div>
        <div class="btn" align="right">
            <button type="submit">Envoyer</button>
        </div>
    </div>
</form>
</body>
<footer>
<center> <h1>MODE DE PAIEMENT</h1></center> 
        <div class="sadio">
            <div class="row">
                <div class="colum">
                    <img src="maste-removebg-preview.png" width="80%;">
                </div>
        
                <div class="colum">
                    <img src="ORANGE.jfif"  width="80%;">
                </div>
        
                <div class="colum">
                    <img src="paypal-removebg-preview (5).png"  width="70%;">
                  
                </div>
            </div>
        </div>
   
</footer>
</html>