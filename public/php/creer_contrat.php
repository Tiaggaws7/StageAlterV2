<?php

$nomPrenom = $_GET['nomPrenom'];

copy("../contrats/base/contrat_base.pdf","../contrats/" . $nomPrenom . "_contrat.pdf");

header('Location: https://127.0.0.1:8000/etablir_contrats');

?>