<?php   // partie Contrôleur du blog aaa

require 'modele.php';

try {
    $billets = getBillets();        // Utilisation des services du modèle
    require 'listeBillets.php';     // Génération de la vue associée
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();  // Création du message d'erreur
    require 'erreur.php';           // Génération de la vue d'erreur
}

