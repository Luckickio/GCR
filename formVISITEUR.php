<html>
<head>
	<title>formulaire VISITEUR</title>
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
	<form name="formVISITEUR" method="post" action="recupVISITEUR.php">
		<h1> Visiteurs </h1>
		<select name="lstDept" class="titre"><option value="">Département</option><option value="01">Ain</option></select>
		<select name="lstVisiteur" class="zoneVISIT"><option value="a131">Villechalane</option></select>
		<label class="titre">NOM :</label><input type="text" size="25" name="VIS_NOM" class="zoneVISIT" />
		<label class="titre">PRENOM :</label><input type="text" size="50" name="Vis_PRENOM" class="zoneVISIT" />
		<label class="titre">ADRESSE :</label><input type="text" size="50" name="VIS_ADRESSE" class="zoneVISIT" />
		<label class="titre">CP :</label><input type="text" size="5" name="VIS_CP" class="zoneVISIT" />
		<label class="titre">VILLE :</label><input type="text" size="30" name="VIS_VILLE" class="zoneVISIT" />
		<label class="titre">SECTEUR :</label><input type="text" size="1" name="SEC_CODE" class="zoneVISIT" />
		<label class="titre">&nbsp;</label><input class="zoneVISIT"type="button" value="<"></input><input class="zoneVISIT"type="button" value=">"></input>
	</form>
	</div>
	<!-- fin div bas -->
</div>
<!-- fin div droite -->
</body>
</html>