<?php
    $id = uniqid((double)microtime()*1000000, true);
    $numEtudiant = $_POST["numEtudiant"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $dateNaiss = $_POST["dateNaiss"];
    $regimeInscription = $_POST["regimeInscription"];
    $adresse = $_POST["adresse"];
    $code_postal = $_POST["code_postal"];
    $ville = $_POST["ville"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $nationalite = $_POST["nationalite"];
    $lieuNaiss = $_POST["lieuNaiss"];
    $numDepartementNaiss = $_POST["numDepartementNaiss"];
    $numSecu = $_POST["numSecu"];
    $regimeSocial = $_POST["regimeSocial"];
    $dernierDiplome = $_POST["dernierDiplome"];
    $handicape = $_POST["handicape"];
    $contratApprentissage = $_POST["contratApprentissage"];


    //$etudiant = new Etudiants($numEtudiant, $nom, $prenom);

    // $etudiant->setprenom($prenom);

    // $etudiant->setnom($nom);

    // $manager->persist($etudiant);

    // $manager->flush();

    

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
    
    $sql = 'INSERT INTO etudiants VALUES (789654123, 756963, "BUIL", "Tiago", "30/07/2002", "formation continue", "rue des soeurs blanches", 64100, "Bayonne", 0699733669, "tiagobuil@yahoo.fr", "français", "La Teste-de-Buch", 33260, 123456789, "URSSAF", "BAC S", true, "aucun");';
    //    $sql = 'INSERT INTO etudiants VALUES ($id, $numEtudiant, \"$nom\", \"$prenom\", \"$dateNaiss\", \"$regimeInscription\", \"$adresse\", $code_postal, \"$ville\", $telephone, \"$email\", \"$nationalite\", \"$lieuNaiss\", $numDepartementNaiss, $numSecu, \"$regimeSocial\", \"$dernierDiplome\", $handicape, \"$contratApprentissage\");';w
    if (mysqli_query($conn, $sql)) {
        echo "Nouveau enregistrement créé avec succès";
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);


    
    // Retour à la page etablir_contrat
    header('Location: https://127.0.0.1:8000/etablir_contrats');

?>