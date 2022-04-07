<?php

    // Récupération des données contenue dans l'url
    $nomPrenom = $_GET['nomPrenom'];
    
    
    $server = "lakartxela.iutbayonne.univ-pau.fr";//Le serveur
    $username = "mweill_sym"; //Login
    $password = "mweill_sym"; //Mdp
    $database = "mweill_sym"; //Le nom de la base de données
    // Create connection
    $conn = mysqli_connect($server, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Échec de la connexion : " . mysqli_connect_error());
    }
    
    echo "Connexion réussie";
    
    $sql = 'DELETE from etudiants where etudiants.nom = "Buil"; ';
    if (mysqli_query($conn, $sql)) {
        echo "Nouveau enregistrement créé avec succès";
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);


    // Retour à la page etablir_contrat
    header('Location: https://127.0.0.1:8000/etablir_contrats');
?>