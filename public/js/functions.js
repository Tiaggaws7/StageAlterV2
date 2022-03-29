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