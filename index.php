<?php

// On demande les 5 derniers billets (modèle)
include_once('get_messages.php');
$messages = get_messages(0, 10);


// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($messages as $cle => $message)
{
    $messages[$cle]['pseudo'] = htmlspecialchars($message['pseudo']);
    $messages[$cle]['message'] = nl2br(htmlspecialchars($message['message']));
    $messages[$cle]['date_message_fr'] = $message['date_message_fr'];
}


// On affiche la page (vue)
include_once('vue.php');