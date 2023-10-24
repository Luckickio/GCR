<html><head>
	<title>formulaire RAPPORT_VISITE</title>
	<link rel="stylesheet" href="Styles/gcr.css">
	<script language="javascript">
		function selectionne(pValeur, pSelection,  pObjet) {
			//active l'objet pObjet du formulaire si la valeur sélectionnée (pSelection) est égale à la valeur attendue (pValeur)
			if (pSelection==pValeur) 
				{ formRAPPORT_VISITE.elements[pObjet].disabled=false; }
			else { formRAPPORT_VISITE.elements[pObjet].disabled=true; }
		}
	</script>
	 <script language="javascript">
        function ajoutLigne( pNumero){//ajoute une ligne de produits/qté à la div "lignes"     
			//masque le bouton en cours
			document.getElementById("but"+pNumero).setAttribute("hidden","true");	
			pNumero++;										//incrémente le numéro de ligne
            var laDiv=document.getElementById("lignes");	//récupère l'objet DOM qui contient les données
			var titre = document.createElement("label") ;	//crée un label
			laDiv.appendChild(titre) ;						//l'ajoute à la DIV
			titre.setAttribute("class","titre") ;			//définit les propriétés
			titre.innerHTML= "   Produit : ";
			var liste = document.createElement("select");	//ajoute une liste pour proposer les produits
			laDiv.appendChild(liste) ;
			liste.setAttribute("name","PRA_ECH"+pNumero) ;
			liste.setAttribute("class","zoneRAP");
			//remplit la liste avec les valeurs de la première liste construite en PHP à partir de la base
			liste.innerHTML=formRAPPORT_VISITE.elements["PRA_ECH1"].innerHTML;
			var qte = document.createElement("input");
			laDiv.appendChild(qte);
			qte.setAttribute("name","PRA_QTE"+pNumero);
			qte.setAttribute("size","2"); 
			qte.setAttribute("class","zoneRAP");
			qte.setAttribute("type","text");
			var bouton = document.createElement("input");
			laDiv.appendChild(bouton);
			//ajoute une gestion évenementielle en faisant évoluer le numéro de la ligne
			bouton.setAttribute("onClick","ajoutLigne("+ pNumero +");");
			bouton.setAttribute("type","button");
			bouton.setAttribute("value","+");
			bouton.setAttribute("class","zoneRAP");	
			bouton.setAttribute("id","but"+ pNumero);				
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
		<form name="formRAPPORT_VISITE" method="post" action="recupRAPPORT_VISITE.php">
			<h1> Rapport de visite </h1>
			<label class="titre">NUMERO :</label><input type="text" size="10" name="RAP_NUM" class="zoneRAP" />
			<label class="titre">DATE VISITE :</label><input type="text" size="10" name="RAP_DATEVISITE" class="zoneRAP" />
			<label class="titre">PRATICIEN :</label><select  name="PRA_NUM" class="zoneRAP" ></select>
			<label class="titre">COEFFICIENT :</label><input type="text" size="6" name="PRA_COEFF" class="zoneRAP" />
			<label class="titre">REMPLACANT :</label><input type="checkbox" class="zoneRAP" checked="false" onClick="selectionne(true,this.checked,'PRA_REMPLACANT');"/><select name="PRA_REMPLACANT" disabled="disabled" class="zoneRAP" ></select>
			<label class="titre">DATE :</label><input type="text" size="19" name="RAP_DATE" class="zoneRAP" />
			<label class="titre">MOTIF :</label><select  name="RAP_MOTIF" class="zoneRAP" onClick="selectionne('AUT',this.value,'RAP_MOTIFAUTRE');">
											<option value="PRD">Périodicité</option>
											<option value="ACT">Actualisation</option>
											<option value="REL">Relance</option>
											<option value="SOL">Sollicitation praticien</option>
											<option value="AUT">Autre</option>
										</select><input type="text" name="RAP_MOTIFAUTRE" class="zoneRAP" disabled="disabled" />
			<label class="titre">BILAN :</label><textarea rows="5" cols="50" name="RAP_BILAN" class="zoneRAP" ></textarea>
			<label class="titre" ><h3> Eléments présentés </h3></label>
			<label class="titre" >PRODUIT 1 : </label><select name="PROD1" class="zoneRAP"></select>
			<label class="titre" >PRODUIT 2 : </label><select name="PROD2" class="zoneRAP"></select>
			<label class="titre">DOCUMENTATION OFFERTE :</label><input name="RAP_DOC" type="checkbox" class="zoneRAP" checked="false" />
			<label class="titre"><h3>Echanitllons</h3></label>
			<div class="titre" id="lignes">
				<label class="titre" >Produit : </label>
				<select name="PRA_ECH1" class="zoneRAP"><option>Produits</option></select><input type="text" name="PRA_QTE1" size="2" class="zoneRAP"/>
				<input type="button" id="but1" value="+" onclick="ajoutLigne(1);" class="zoneRAP" />			
			</div>		
			<label class="titre">SAISIE DEFINITIVE :</label><input name="RAP_LOCK" type="checkbox" class="zoneRAP" checked="false" />
			<label class="titre"></label><div class="zoneRAP"><input type="reset" value="annuler"></input><input type="submit"></input>
		</form>
	</div>
	<!-- fin div bas -->
</div>
<!-- fin div droite -->
</body>
</html>