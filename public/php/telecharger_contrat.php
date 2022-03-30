<?php
    $nomPrenom = $_GET['nomPrenom'];

    $file_path = "../contrats/" . $nomPrenom . "_contrat.pdf";

    if (file_exists($file_path)) {
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"" . basename($file_path) . "\""); 
        readfile($file_path); 
    } else {
        header('Location: https://127.0.0.1:8000/etablir_contrats');
    }

?>