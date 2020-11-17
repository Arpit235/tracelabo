<?PHP
session_start();
include "../../modeles/donneesTest.php";


if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "pilote") {
  header('Location: connexion.php');
}

$listeDonnees=recupererDernieresDonnees($_SESSION['idUtilisateur']);
$listeDonnees2=recupererDernieresDonnees($_SESSION['idUtilisateur']);
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">-->
  <meta http-equiv="Cache-control" content="private" />
  <title>Données récentes</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/bienvenue.css">
  <link rel="stylesheet" href="../css/donnees.css">
  <link rel="stylesheet" href="../css/menuGauche.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

  <?php
  if($_SESSION['bienvenue']) {
    include('bienvenue.php');
    $_SESSION['bienvenue'] = false;
  }
  ?>

  <!-- barre de navigation -->

  <?php include('nav2.php'); ?>
  <div class="videNav"></div>

  <div class="contenu">

	<?php include('menuPilote.php'); ?>

    <!-- contenu -->

    <div id="milieu">
      <h2>Vos données récentes</h2>

      <div id="tableauMobile">
        <?PHP foreach ($listeDonnees2 as $row) { ?>
        <div class="cellule">
          <p class="titre">ID TEST</p>
          <p class="valeur"><?PHP echo $row['idTest']; ?></p>

          <p class="titre">TEMPS</p>
          <p class="valeur"><?PHP echo $row['idTemps']; ?></p>

          <p class="titre">CAPTEUR</p>
          <p class="valeur"><?PHP echo nomCapteur($row['Capteur_idCapteur']); ?></p>

          <p class="titre">VALEUR</p>
          <p class="valeur"><?PHP echo $row['valeur']; ?></p>
        </div>
        <?PHP } ?>
      </div>

      <table class="tableau" cellspacing="0">
        <thead>
          <tr>
            <th>Numéro du test</th>
            <th>Temps</th>
            <th>Capteur</th>
            <th>Valeur</th>
          </tr>
        </thead>
        <tbody>
          <?PHP foreach($listeDonnees as $row){ ?>
            <tr>
              <td><?PHP echo $row['idTest']; ?></td>
              <td><?PHP echo $row['idTemps']; ?></td>
              <td><?PHP echo nomCapteur($row['Capteur_idCapteur']); ?></td>
              <td><?PHP echo $row['valeur']; ?></td>
            </tr>
            <?PHP } ?>
          </tbody>
        </table>
    </div>

  </div>

  <?php include('footer.php') ?>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
</body>
</html>
