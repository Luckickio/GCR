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
?>

