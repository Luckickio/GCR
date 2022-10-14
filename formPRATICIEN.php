<?php
require_once 'Include/entete.inc.php';
require_once 'Include/SourceDonnees.inc.php';
require_once 'Include/Bibliotheque01.inc.php';
?>
	<div id="bas" >
		<h1> Praticiens </h1>
		<form name="formListeRecherche" method="post">
			<?php
			$valDefaut = (isset($_REQUEST["lstPrat"])) ? $_REQUEST["lstPrat"] : 0 ;
			echo formSelectDepuisRecordset("Praticien", "lstPrat", "listPraticien", getListePraticiens(), $valDefaut, 1); 
			echo formBoutonSubmit("btnSubmit", "btnSubmit", "Ok", 2);
			?>
		</form>
		<form id="formPraticien">
			<?php
			if (isset($_REQUEST["lstPrat"])) {
				$resultatInfoPraticien = getInfosPraticien($_REQUEST["lstPrat"]);
				$item = $resultatInfoPraticien->fetch(PDO::FETCH_ASSOC);
				echo formInputText("NOM", "txtNom", "txtNom", $item["pra_nom"], 50, 100, 3, True);
				echo formInputText("PRÉNOM", "txtPrenom", "txtPrenom", $item["pra_prenom"], 50, 100, 3, True);
				echo formInputText("ADRESSE", "txtAdresse", "txtAdresse", $item["pra_adresse"], 50, 100, 3, True);
				echo formInputText("VILLE", "txtVille", "txtVille", $item["pra_ville"], 50, 100, 3, True);
				echo formInputText("COEF NOTORIÉTÉ", "txtCoef", "txtCoef", $item["pra_coef"], 50, 100, 3, True);
				echo formInputText("LIEU D'EXERCICE", "txtLieu", "txtLieu", $item["typ_lieu"], 50, 100, 3, True);				
			}
			?>	
		</form>
	</div>
	<!-- fin div bas -->
<?php
require_once 'Include/pied.inc.php';
?>