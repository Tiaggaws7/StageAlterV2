<?php
    $nomPrenom = $_GET['nomPrenom'];

    unlink("../contrats/" . $nomPrenom . "_contrat.pdf");

    header('Location: https://127.0.0.1:8000/etablir_contrats');
?>