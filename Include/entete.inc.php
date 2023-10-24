<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>GSB : Suivi de la Visite médicale</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Styles/gcr.css" />
  </head>
  <body>
    <script src="JavaScript/GCRAjax.js"></script>
    <div id="haut">
      <h1>
        <img
          src="Images/logo.jpg"
          alt="Logo GCR"
          width="100"
          height="60"
        />Gestion des visites
      </h1>
    </div>
    <!-- fin div haut -->
    <div id="gauche">
      <?php
      // require_once "SourceDonnees.inc.php";
      // require_once "Securite.inc.php"; 
      // echo $_SESSION["UtilPrenom"];
      // echo "<br/>";
      // echo $_SESSION["UtilNom"];
      // echo "<br/>";
      // echo $_SESSION["UtilRole"];
      // echo "<br/>";
      // echo $_SESSION["UtilRegion"];
      // ?>
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
    <div id="droite">