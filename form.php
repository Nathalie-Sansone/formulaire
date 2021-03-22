<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>

<form action="/thanks.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="fname">Prénom :</label>
        <input type="text" id="fname" name="user_fname">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phone">Numéro de téléphone :</label>
        <input type="number" id="phone" name="phone_number">
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select name="subjects" id="subjects-select">
            <option value="">--Please choose an option--</option>
            <option value="Ma commande">Ma commande</option>
            <option value="Ma livraison">Ma livraison</option>
            <option value="Retourner mon colis">Retourner mon colis</option>
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>
</body>
</html>