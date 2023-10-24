<?php
session_start();
function existeCompteVisiteur($codeVisiteur, $motDePasseHash){
    $requete = "SELECT vis_code, vis_passe FROM visiteur WHERE vis_code=\"" . $codeVisiteur . "\" AND vis_passe=\"" . $motDePasseHash . "\";";
    $resultat = SGBDconnect()->query($requete);
    $resultatNbItem = $resultat->rowCount();
    if ($resultatNbItem == 1){
        return True;
    }
    else{
        return False;
    }
}
function valideInfosCompteUtilisateur($codeVisiteur, $motDePasse){
    $motDePasseHash = md5($motDePasse);
    if (existeCompteVisiteur($codeVisiteur, $motDePasseHash)){
        return True;
    }
    else {
        return False;
    }
}
function ouvreSessionUtilisateur($utilisateur) {
    $_SESSION["UtilId"] = $utilisateur;
    // $InfoUtilisateur = getInfoUser($utilisateur);
    // $_SESSION["UtilPrenom"] = $InfoUtilisateur["vis_prenom"];
    // $_SESSION ["UtilNom"] = $InfoUtilisateur["vis_nom"];
    // $_SESSION ["UtilRole"] = $InfoUtilisateur["tra_role"];
    // $_SESSION ["UtilRegion"] = $InfoUtilisateur["reg_nom"];
}
function estSessionUtilisateurOuverte() {
    if (isset($_SESSION["UtilId"])) {
        return True;
    }
    else {
        return False;
    }
}
function fermeSessionUtilisateur() {
    session_destroy();
}
?>