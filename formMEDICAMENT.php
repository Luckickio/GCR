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
            <li><a href="formRAPPORT_VISITE.php">Nouveaux</a></li>
            <li>Consulter</li>
          </ul>
        </li>
        <li>Consulter</li>
        <li>
          <ul>
            <li><a href="formMEDICAMENT.php">Médicaments</a></li>
            <li><a href="formPRATICIEN.php">Praticiens</a></li>
            <li><a href="formVISITEUR.php">Autres visiteurs</a></li>
          </ul>
        </li>
      </ul>
</div>
<!-- fin div gauche -->
<div id="droite" >
	<div id="bas" >
	<form name="formMEDICAMENT" method="post" action="recupMEDICAMENT.php">
		<h1> Pharmacopee </h1>
		<label class="titre">DEPOT LEGAL :</label><input type="text" size="10" name="MED_DEPOTLEGAL" class="zoneMEDIC" />
		<label class="titre">NOM COMMERCIAL :</label><input type="text" size="25" name="MED_NOMCOMMERCIAL" class="zoneMEDIC" />
		<label class="titre">FAMILLE :</label><input type="text" size="3" name="FAM_CODE" class="zoneMEDIC" />
		<label class="titre">COMPOSITION :</label><textarea rows="5" cols="50" name="MED_COMPOSITION" class="zoneMEDIC" ></textarea>
		<label class="titre">EFFETS :</label><textarea rows="5" cols="50" name="MED_EFFETS" class="zoneMEDIC" ></textarea>
		<label class="titre">CONTRE INDIC. :</label><textarea rows="5" cols="50" name="MED_CONTREINDIC" class="zoneMEDIC" ></textarea>
		<label class="titre">PRIX ECHANTILLON :</label><input type="text" size="7" name="MED_PRIXECHANTILLON" class="zoneMEDIC" />
		<label class="titre">&nbsp;</label><input class="zoneMEDIC" type="button" value="<"></input><input class="zoneMEDIC" type="button" value=">"></input>
	</form>
	</div>
	<!-- fin div bas -->
</div>
<!-- fin div droite -->
</body>
</html>