<html>
<head>
	<title>formulaire PRATICIEN</title>
	<link rel="stylesheet" href="Styles/gcr.css">
	<script language = "javascript">
		function chercher($pNumero) {  
			var xhr_object = null; 	    
			if(window.XMLHttpRequest) // Firefox 
				xhr_object = new XMLHttpRequest(); 
			else if(window.ActiveXObject) // Internet Explorer 
					xhr_object = new ActiveXObject("Microsoft.XMLHTTP"); 
				else { // XMLHttpRequest non supporté par le navigateur 
					alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
					return; 
				}   
			//traitement à la réception des données
		   xhr_object.onreadystatechange = function() { 
			if(xhr_object.readyState == 4 && xhr_object.status == 200) { 
				 var formulaire = document.getElementById("formPraticien");
				formulaire.innerHTML=xhr_object.responseText;			} 
		   }
		   //communication vers le serveur
		   xhr_object.open("POST", "cherchePraticien.php", true); 
		   xhr_object.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
		   var data = "pratNum=" + $pNumero ;
		   xhr_object.send(data); 
		   
	   }
	</script>
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
		<h1> Praticiens </h1>
		<form name="formListeRecherche" >
			<select name="lstPrat" class="titre" onClick="chercher(this.value);">
				<option>Choisissez un praticien</option>
				<option value="1">Notini</option>
				<option value="2">Gosselin</option>
				<option value="3">Delahaye</option>
			</select>	
		</form>
		<form id="formPraticien">	
		</form>
	</div>
	<!-- fin div bas -->
</div>
<!-- fin div droite -->
</body>
</html>