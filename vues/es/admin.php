<?PHP
session_start();

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "admin") {
  header('Location: connexion.php');
}
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <meta http-equiv="Cache-control" content="private" />
  <title>InfiniteMeasures</title>
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/bienvenue.css">
  <link rel="stylesheet" href="../css/admin.css">
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

	<?php include('menuAdmin.php'); ?>

    <!-- contenu -->

    <div id="milieu">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>

  </div>

  <?php include('footer.php') ?>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="../js/base.js"></script>
</body>
</html>
