function switch_page(nom_page){
    document.location.href = nom_page;
}

let etudiantChoisit = "";

function choisirEtudiant(numero){
    etudiant = document.getElementById(numero);
    parent = etudiant.parentNode;
    for ( i = 0; i < parent.children.length; i++){
        parent.children[i].style.background = 'rgb(255, 230, 200)'
    }
    etudiant.style.background = 'lightgrey';
    etudiantChoisit = etudiant.textContent;
    document.getElementById("etablir_contrats").innerHTML = "Contrat de " + etudiantChoisit;
}

function telechargerContrat() {

}

function creerContrat() {
    div = document.getElementById("liste_etudiants");

    ul = div.children[1];

    for ( i = 0; i < ul.children.length; i++){
        if (ul.children[i].style.backgroundColor == 'lightgrey'){
            sansEspace = ul.children[i].textContent.replace(/ /g, "");
            document.location.href ="https://127.0.0.1:8000/php/creer_contrat.php?nomPrenom=" + sansEspace ;
        }
    }

    //document.location.href = "https://127.0.0.1:8000/php/creer_contrat.php";
}

function modifierContrat() {
    alert("Vous n'avez pas les droits pour modifier ce fichier");
}

function supprimerContrat() {
    alert("Vous n'avez pas les droits pour supprimer ce fichier");
}