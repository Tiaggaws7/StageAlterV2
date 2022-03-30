<?php
    $nomPrenom = $_GET['nomPrenom'];

    $file_path = "../contrats/" . $nomPrenom . "_contrat.pdf";

    if (file_exists($file_path)) {
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary"); 
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
        readfile($file_url); 
    }

?>