<?PHP
session_start();
include "../../modeles/donneesTest.php";

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "pilote") {
  header('Location: connexion.php');
}

// SCORES
$listeScores=recupererScores($_SESSION['idUtilisateur']);
$nbScores = 0;

$listeScoresJson = array();
foreach($listeScores as $score) {
  array_push($listeScoresJson,$score[0]);
  $nbScores += 1;
};

$listeScoresJson = json_encode($listeScoresJson);
$labelsScoresJson = json_encode(range(1,$nbScores));
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">-->
  <meta http-equiv="Cache-control" content="private" />
  <title>InfiniteMeasures</title>
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
      <h2>Graphiques</h2>
      <div class="graphique">
        <canvas id="scores" style="min-height:240px"></canvas>
      </div>
      <!--
      <div class="graphique">
        <canvas id="scores"></canvas>
      </div>
-->
      <script>
        new Chart(document.getElementById("scores"), {
          type: 'line',
          data: {
            labels: <?php echo $labelsScoresJson; ?>,
            datasets: [{
              data: <?php echo $listeScoresJson; ?>,
              label: "Score",
              borderColor: "#5d5fc6",
              fill: false
            }]
          },
          options: {
            title: {
              maintainAspectRatio: true,
              display: true,
              text: 'Scores au fil des tests'
            }
          }
        });
      </script>
    </div>
  </div>

  <?php include('footer.php') ?>
</body>
</html>
