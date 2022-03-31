<?php

    // Récupération des données contenue dans l'url
    $nomPrenom = $_GET['nomPrenom'];

    // Suppprime le fichier  
    unlink("../contrats/" . $nomPrenom . "_contrat.pdf");

    // Retour à la page etablir_contrat
    header('Location: https://127.0.0.1:8000/etablir_contrats');
?>