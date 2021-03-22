<?php

echo 'Merci ' . htmlspecialchars($_POST["user_fname"]) . ' ' . htmlspecialchars($_POST["user_name"]) . ' de nous avoir contacté à propos de ' . '"' . htmlspecialchars($_POST["subjects"]) . '"' . '.';
echo "<br>";
echo "<br>";
echo 'Un de nos conseillers vous contactera soit à l\'adresse ' . htmlspecialchars($_POST["user_mail"]) .  ' ou par téléphone au ' . htmlspecialchars($_POST["phone_number"]) . ' dans les plus brefs délais pour traiter votre demande : ';
echo "<br>";
echo "<br>";
echo htmlspecialchars($_POST["user_message"]);
