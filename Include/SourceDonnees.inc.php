<?php
function SGBDConnect() {
    try {
        $connexion = new PDO("mysql:host=localhost;dbname=gsb", "root", "");
        $connexion->query("SET NAMES UTF8");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
        echo "Erreur !: " . $e->getMessage() . "<br />";
        exit();
        }
    return $connexion;
}
function getListePraticiens() {
    $requete = "SELECT pra_num, concat(pra_nom,\" \",pra_prenom) FROM praticien ORDER BY pra_nom ASC;";
    $resultat = SGBDConnect()->query($requete);
    return $resultat;
}
function getInfosPraticien($numPraticien) {
    $requete = "SELECT pra_nom, pra_prenom, pra_adresse, pra_coef, type_praticien.typ_lieu, pra_ville FROM praticien INNER JOIN type_praticien ON praticien.pra_type = type_praticien.typ_code WHERE praticien.pra_num = \"" . $numPraticien . "\";";
    $resultat = SGBDConnect()->query($requete);
    return $resultat;
}
function getChoixFamilleMedicament() {
    $requete = "SELECT fam_code, fam_libelle FROM famille;";
    $resultat = SGBDConnect()->query($requete);
    return $resultat;
}
function getMedicament($familleMedicament) {
    $requete = "SELECT med_code, med_nom FROM medicament INNER JOIN famille on medicament.med_famille = famille.fam_code WHERE fam_code =\"" . $familleMedicament . "\";";
    $resultat = SGBDConnect()->query($requete);
    return $resultat;
}
function getFicheMedicament($medicament) {
    $requete = "SELECT med_compo, med_effets, med_contreindic, lab_nom FROM medicament INNER JOIN laboratoire ON medicament.med_labo = laboratoire.lab_code WHERE med_code = \"" . $medicament . "\";";
    $resultat = SGBDConnect()->query($requete);
    return $resultat;
}
?>

