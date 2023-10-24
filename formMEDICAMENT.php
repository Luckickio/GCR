<html>
<head>
	<title>formulaire MEDICAMENT</title>
	<link rel="stylesheet" href="Styles/gcr.css">
</head>
<body>
<div id="haut" ><h1><img src="Images/logo.jpg" width="100" height="60"/>Gestion des visites</h1>
</div>
<!-- fin div haut -->
<div id="gauche">
      <h2>Outils</h2>
      <ul>
        <li>Comptes-Rendus</li>
        <li>
          <ul>
          <li><a href="index.php?action=10">Nouveaux</a></li>
            <li>Consulter</li>
          </ul>
        </li>
        <li>Consulter</li>
        <li>
          <ul>
            <li><a href="index.php?action=20">Médicaments</a></li>
            <li><a href="index.php?action=30">Praticiens</a></li>
            <li><a href="index.php?action=40">Autres visiteurs</a></li>
          </ul>
          <li><a href="index.php?action=50">Fermer la session</a></li>
        </li>
      </ul>
</div>
<!-- fin div gauche -->
<div id="droite" >
	<div id="bas" >
    <?php
    require_once "Include/SourceDonnees.inc.php";
    require_once "Include/Bibliotheque01.inc.php";
    echo "<h1>Pharmacopée</h1>";
    switch ($_REQUEST["action"]) {
      case 20:
        echo "<form id=\"formChoixFamilleMedicaments\" method=\"POST\" action=\"index.php?action=21\">";
        $valDefaut = (isset($_REQUEST["cfMedicament"])) ? $_REQUEST["cfMedicament"] : null;
        echo formSelectDepuisRecordset("Famille", "cfMedicament", "cfMedicament", getChoixFamilleMedicament(), $valDefaut, 1);
        echo formBoutonSubmit("EnvoicfMedicament", "EnvoicfMedicament","OK", 1);
        echo "</form>";
        break;
      case 21:
        echo "<form id=\"formChoixFamilleMedicaments\" method=\"POST\" action=\"index.php?action=21\">";
        $valDefaut = (isset($_REQUEST["cfMedicament"])) ? $_REQUEST["cfMedicament"] : null;
        echo formSelectDepuisRecordset("Famille", "cfMedicament", "cfMedicament", getChoixFamilleMedicament(), $valDefaut, 1);
        echo formBoutonSubmit("EnvoicfMedicament", "EnvoicfMedicament", "OK", 1);
        echo "</form>";
        echo "<form id=\"formChoixMedicament\" method=\"POST\" action=\"index.php?action=22\">";
        $valDefaut = (isset($_REQUEST["cMedicament"])) ? $_REQUEST["cMedicament"] : null;
        echo formSelectDepuisRecordset("Medicament", "cMedicament", "cMedicament", getMedicament($_REQUEST["cfMedicament"]), $valDefaut, 2);
        echo formBoutonSubmit("EnvoicMedicament", "EnvoicMedicament", "OK", 2);
        echo formInputHidden("familleCache", "familleCache", $_REQUEST["cfMedicament"]);
        echo "</form>";
        break;
      case 22:
        echo "<form id=\"formChoixFamilleMedicaments\" method=\"POST\" action=\"index.php?action=21\">";
        echo formSelectDepuisRecordset("Famille", "cfMedicament", "cfMedicament", getChoixFamilleMedicament(), $_REQUEST["familleCache"], 1);
        echo formBoutonSubmit("EnvoicfMedicament", "EnvoicfMedicament","OK", 1);
        echo "</form>";
        echo "<form id=\"formChoixMedicament\" method=\"POST\" action=\"index.php?action=22\">";
        echo formSelectDepuisRecordset("Medicament", "cMedicament", "cMedicament", getMedicament($_REQUEST["familleCache"]), $_REQUEST["cMedicament"], 2);
        echo formInputHidden("familleCache", "familleCache", $_REQUEST["familleCache"]);
        echo formBoutonSubmit("EnvoicMedicament", "EnvoicMedicament", "OK", 2);
        echo "</form>";
        echo "<form id=\"formMedicament\" method=\"POST\" action=\"index.php?action=22\">";
        getFicheMedicament($_REQUEST["cMedicament"])->setFetchMode(PDO::FETCH_ASSOC);
        $item = getFicheMedicament($_REQUEST["cMedicament"])->fetch();
        echo formTextArea("Composition", "composition", "composition", $item["med_compo"], 70, 5, 255, 3, True);
        echo formTextArea("Effets", "effets", "effets", $item["med_effets"], 70, 5, 255, 3, True);
        echo formTextArea("ContreIndic", "contreindic", "contreindic", $item["med_contreindic"], 70, 5, 255, 3, True);
        echo formTextArea("Laboratoire", "laboratoire", "laboratoire", $item["lab_nom"], 70, 5, 255, 3, True);
        echo "</from>";
        break;
    }
    ?>
<!-- zoneMedic -->
	<!-- fin div bas -->
</div>
<!-- fin div droite -->
</body>