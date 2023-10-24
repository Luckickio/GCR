<?php
require_once "Include/entete2.inc.php";
require_once "Include/SourceDonnees.inc.php";
require_once "Include/Bibliotheque01.inc.php";
require_once "Include/Securite.inc.php";
if (!(isset($_REQUEST["utilisateur"]))){
    $_REQUEST["utilisateur"] = "";
}
if (!(isset($_REQUEST["mot_de_passe"]))){
    $_REQUEST["mot_de_passe"] = "";
}
echo "<form id=\"frmIdentification\" method=\"POST\" action=\"Index\">";
echo formInputText("Utilisateur", "utilisateur", "utilisateur", $_REQUEST["utilisateur"], 20, 255, 1, False, True);
echo formInputPassword("Mot de passe", "mot_de_passe", "mot_de_passe", "", 20, 255, 1, True);
echo formBoutonSubmit("BoutonValider", "BoutonValider", "Valider", 2);
echo "</form>";

if (valideInfosCompteUtilisateur($_REQUEST["utilisateur"], $_REQUEST["mot_de_passe"])){
    ouvreSessionUtilisateur($_REQUEST["utilisateur"]);
    header("location: index.php?action=0");
    exit();
}
else {
    if ($_REQUEST["utilisateur"] != "") {
        echo "<p class=\"erreur\" >Utilisateur et/ou mot de passe invalide(s)</p>";
    }
}
?>
