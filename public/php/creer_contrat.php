<?php

// Récupération des données contenue dans l'url
$nomPrenom = $_GET['nomPrenom'];


// Copie la fiche d'information vide de base et la colle en la renommant en suivant la forme "NOMPrenom_contrat.pdf" dans le dossier contennant les contrats 
copy("../contrats/base/contrat_base.pdf","../contrats/" . $nomPrenom . "_contrat.pdf");


// Retour à la page etablir_contrat
header('Location: https://127.0.0.1:8000/php/ajout_etudiant.php');

?>