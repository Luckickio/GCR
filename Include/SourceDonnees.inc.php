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
function getInfoUtilisateur($utilisateur) {
    $requete = "SELECT vis_nom, vis_prenom, vis_adresse, vis_cp, vis_ville, vis_datemb, vis_lab FROM visiteur WHERE vis_code =\"" . $utilisateur ."\" ;";
    $resultat = SGBDConnect()->query($requete);
    return $resultat;
}
function getInfoUser($UtilId) {
    $requete = "SELECT vis_prenom, vis_nom, tra_role, reg_nom FROM visiteur INNER JOIN travail ON visiteur.vis_code = travail.tra_vis INNER JOIN region ON  travail.tra_reg = region.reg_code WHERE tra_vis = $UtilId AND tra_dataff = (SELECT MAX(tra_dataff) FROM travail WHERE tra_vis = $UtilId";
    $resultat = SGBDConnect()->query($requete)->fetch(PDO::FETCH_ASSOC);
    return $resultat;
}
function getInfosPraticien2($TypePraticien, $RegionPraticien) {
    $requete = "SELECT pra_nom, pra_prenom, pra_adresse, pra_coef, type_praticien.typ_lieu, pra_ville FROM praticien INNER JOIN type_praticien ON praticien.pra_type = type_praticien.typ_code WHERE praticien.PRA_TYPE = \"".  $TypePraticien . "\"  AND praticien.PRA_ZONE = \"" .  $RegionPraticien . "\";";
    $resultat = SGBDConnect()->query($requete);
    return $resultat;
}
function getListTypePraticien() {
    $requete = "SELECT DISTINCT pra_type, type_praticien.TYP_LIBELLE FROM praticien INNER JOIN type_praticien ON pra_type = type_praticien.TYP_CODE ORDER BY pra_type ASC;";
    $resultat = SGBDConnect()->query($requete);
    return $resultat;
}
function getListRegionPraticien() {
    $requete = "SELECT DISTINCT pra_zone, region.REG_NOM FROM praticien INNER JOIN region ON pra_zone = region.REG_CODE ORDER BY pra_zone ASC;";
    $resultat = SGBDConnect()->query($requete);
    return $resultat;
}
