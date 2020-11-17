<?PHP
session_start();
include "../../modeles/donneesTest.php";

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "pilote") {
  header('Location: connexion.php');
}

// SCORES
$listeScores=recupererScores($_SESSION['idUtilisateur']);
$listeCardiaque=recupererCardiaque($_SESSION['idUtilisateur']);
$listeTemp=recupererTemp($_SESSION['idUtilisateur']);
$listeReaction=recupererReaction($_SESSION['idUtilisateur']);
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">-->
  <meta http-equiv="Cache-control" content="private" />
  <title>Graphs</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/bienvenue.css">
  <link rel="stylesheet" href="../css/graphiques.css">
  <link rel="stylesheet" href="../css/menuGauche.css">
  <link rel="stylesheet" href="../css/footer.css">

  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
  <script src="../js/base.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
</head>
<body>

  <?php
  if($_SESSION['bienvenue']) {
    include('welcome.php');
    $_SESSION['bienvenue'] = false;
  }
  ?>

  <!-- barre de navigation -->

  <?php include('nav2.php'); ?>
  <div class="videNav"></div>

  <div class="contenu">

	<?php include('menuPilot.php'); ?>

    <!-- contenu -->

    <div id="milieu">
      <h2>Graphs</h2>
      <div class="graphique">
        <canvas id="scores"></canvas>
      </div>
      <div class="graphique">
        <canvas id="cardiaque"></canvas>
      </div>
      <div class="graphique">
        <canvas id="temp"></canvas>
      </div>
      <div class="graphique">
        <canvas id="reaction"></canvas>
      </div>

      <script>
        new Chart(document.getElementById("scores"), {
          type: 'line',
          data: {
            labels: <?php echo $listeScores[0]; ?>,
            datasets: [{
              data: <?php echo $listeScores[1]; ?>,
              label: "Score (out of 20)",
              borderColor: "#5d5fc6",
              fill: false
            }]
          },
          options: {
            maintainAspectRatio: true,
            title: {
              display: true,
              text: 'Score vs. Test number'
            }
          }
        });

        new Chart(document.getElementById("cardiaque"), {
          type: 'line',
          data: {
            labels: <?php echo $listeCardiaque[0]; ?>,
            datasets: [{
              data: <?php echo $listeCardiaque[1]; ?>,
              label: "Heart rate (bpm)",
              borderColor: "#5d5fc6",
              fill: false
            }]
          },
          options: {
            maintainAspectRatio: true,
            title: {
              display: true,
              text: 'Heart rate vs. Test number'
            }
          }
        });

        new Chart(document.getElementById("temp"), {
          type: 'line',
          data: {
            labels: <?php echo $listeTemp[0]; ?>,
            datasets: [{
              data: <?php echo $listeTemp[1]; ?>,
              label: "Temperature (°C)",
              borderColor: "#5d5fc6",
              fill: false
            }]
          },
          options: {
            maintainAspectRatio: true,
            title: {
              display: true,
              text: 'Temperature vs. Test number'
            }
          }
        });

        new Chart(document.getElementById("reaction"), {
          type: 'line',
          data: {
            labels: <?php echo $listeReaction[0]; ?>,
            datasets: [{
              data: <?php echo $listeReaction[1]; ?>,
              label: "Reaction time (ms)",
              borderColor: "#5d5fc6",
              fill: false
            }]
          },
          options: {
            maintainAspectRatio: true,
            title: {
              display: true,
              text: 'Reaction time vs. Test number'
            }
          }
        });
      </script>
    </div>
  </div>

  <?php include('footer.php') ?>
</body>
</html>
