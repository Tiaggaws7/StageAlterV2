<?php

    // Récupération des données contenue dans l'url
    $nomPrenom = $_GET['nomPrenom'];

    //chemin du fichier de l'étudiant
    $file_path = "../contrats/" . $nomPrenom . "_contrat.pdf";

    if (file_exists($file_path)) {
        // Si la fiche d'information de l'étudiant existe, le télécharge
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"" . basename($file_path) . "\""); 
        readfile($file_path); 

    } else {
        // Si le fichier n'existe pas, on retourne à la page etablir_contrat
        header('Location: https://127.0.0.1:8000/etablir_contrats');
    }

?>