<?php

$nomPrenom = $_GET['nomPrenom'];

$adresseFichier = "../contrats/" . $nomPrenom . "_contrat.pdf";

$f = fopen($adresseFichier, 'c+');

header('Location: https://127.0.0.1:8000/etablir_contrats');

?>