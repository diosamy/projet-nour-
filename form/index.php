<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form action="assets/php/upload_form.php" method="POST">
        <h1>CONTACT</h1>
        <div class="formulaire">
            <div class="groupe">
                <label>Nom:</label>
                <input type="text" class="input" name="nom" id="nom" placeholder="Votre nom ici..." required>
            </div>
            <div class="groupe">
                <label>Prénom:</label>
                <input type="text" class="input" name="prenom" id="prenom" placeholder="Votre prénom ici..." required>
            </div>
            <div class="groupe">
                <label>Email:</label>
                <input type="email" class="input" name="mail" id="mail"placeholder="Votre email ici..." required>
            </div>
            <div class="groupe">
                <label>Téléphone:</label>
                <input type="text" class="input" name="telephone" id="telephone" placeholder="Votre téléphone ici..." required>
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
    <div class="piedpage">
        <span>+223 71393515  contact@yacoubababy.ml</span>
    </div>
</body>
</html>