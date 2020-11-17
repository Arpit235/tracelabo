<?PHP
session_start();
include "../../modeles/questions.php";

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "admin") {
  header('Location: signin.php');
}

$questions=afficherQuestionsPosees();
$questions2=afficherQuestionsPosees();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <meta http-equiv="Cache-control" content="private" />
  <title>Asked questions</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/donnees.css">
  <link rel="stylesheet" href="../css/menuGauche.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>

  <!-- barre de navigation -->

  <?php include('nav2.php'); ?>
  <div class="videNav"></div>

  <div class="contenu">
	<?php include('menuAdmin.php'); ?>

    <!-- contenu -->

    <div id="milieu">
      <h2>Asked questions</h2>

      <div id="tableauMobile">
        <?PHP foreach ($questions2 as $question2) { ?>
        <div class="cellule">
          <p class="titre">QUESTION ID</p>
          <p class="valeur"><?PHP echo $question2['idQuestionPosee']; ?></p>

          <p class="titre">ASKED QUESTION</p>
          <p class="valeur"><?PHP echo $question2['questionPosee']; ?></p>
        </div>
        <?PHP } ?>
      </div>

      <table class="tableau" cellspacing="0">
        <thead>
          <tr>
            <th>Question ID</th>
            <th>Asked question</th>
          </tr>
        </thead>
        <tbody>
          <?PHP foreach($questions as $question){ ?>
            <tr>
              <td><?PHP echo $question['idQuestionPosee']; ?></td>
              <td><?PHP echo $question['questionPosee']; ?></td>
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
  <script src="../js/popup.js"></script>
</body>
</html>
