<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         <link rel="stylesheet" href="styless.css">
         <link  href="https://fonts.googleapis.com/css?family=karla" rel="stylesheet">
        <title></title>
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
    </head>
    <body>
<div class="block2">
    
</div>
<div class="block3">
    <center><H2> </H2></center>
    <marquee behavior="alternate" direction=""><H1>CONTACT DES SERVICES COURIERS</H1></marquee>
    <div class="pp">
    <H2>Bamako (Envoi)</H2>
    <H2>(223 66 75 50 92)</H2>
    <H2>Bamako (Reception)</H2>
    <H2>(223 66 75 50 92)</H2>
    </div>
    <div class="ppp">
        <H2>(+223) 66 75 50 78</H2>
        <H2>GAO (Reception)</H2>
        <H2>(+223) 66 75 50 78</H2>
        <H2>NOUKCHOTT (Envoi)</H2>
    </div>
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
            <input type="email" class="input" name="email" id="email"placeholder="Votre email ici..." required>
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
<center> <h1>MODE DE PAIEMENT</h1></center> 
<div class="block7">
    <div class="row">
        <div class="colum">
            <img src="MASTER.png" width="80%;">
        </div>
        <div class="colum">
            <img src="ORANGE.jfif"  width="80%;">
        </div>
        <div class="colum">
            <img src="PP.png"  width="70%;">
        </div>
    </div>
</div>
</body>
<footer>
    <div class="block5">  
        <ul class="social">
            <li><i class="fab fa-facebook-f"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-youtube"></i></li>
        </ul>    
    </div> 
</footer>
</html>