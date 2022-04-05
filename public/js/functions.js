
// Permet de changer de page
function switch_page(nom_page){
    document.location.href = nom_page;
}

// Permet de savoir quel étudiant est selectionné
let etudiantChoisit = "";

let etudiantSansEspace = "";

// Permet de sélectionner un étudiant
function choisirEtudiant(numero){
    etudiant = document.getElementById(numero);
    parent = etudiant.parentNode;
    for ( i = 0; i < parent.children.length; i++){
        parent.children[i].style.background = 'rgb(255, 230, 200)'
    }
    etudiant.style.background = 'lightgrey';
    etudiantChoisit = etudiant.textContent;
    document.getElementById("etablir_contrats").innerHTML = "Contrat de " + etudiantChoisit;
    sansEspace = etudiantChoisit.replace(/ /g, "");
    etudiantSansEspace = sansEspace;
}

// Fonction utilisé afin d'envoyer le nom de l'étudiant selectionné en paramètre à une fonction php 
function renvoyerVersPhp(string) {
    div = document.getElementById("liste_etudiants");

    ul = div.children[1];

    for ( i = 0; i < ul.children.length; i++){
        if (ul.children[i].style.backgroundColor == 'lightgrey'){
            sansEspace = ul.children[i].textContent.replace(/ /g, "");
            document.location.href = string + sansEspace ;
        }
    }
}

// Permet de télécharger la fiche d'information 
function telechargerContrat() {
    renvoyerVersPhp("https://127.0.0.1:8000/php/telecharger_contrat.php?nomPrenom=");
}

// Permet de créer la fiche d'information 
function formulaireContrat() {
    document.location.href = "https://127.0.0.1:8000/creer_contrat";
}

function creerContrat(){
    console.log( etudiantSansEspace );
    document.location.href = "https://127.0.0.1:8000/php/creer_contrat.php?nomPrenom=" + etudiantSansEspace;
}

// Permet de modifier la fiche d'information 
function modifierContrat() {
    alert("Vous n'avez pas les droits pour modifier ce fichier");
}

function supprimerContrat() {
    renvoyerVersPhp("https://127.0.0.1:8000/php/supprimer_contrat.php?nomPrenom=");
}