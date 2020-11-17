<?PHP
session_start();

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "gestionnaire") {
  header('Location: signin.php');
}
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <meta http-equiv="Cache-control" content="private" />
  <title>Run a test</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/test.css">
  <link rel="stylesheet" href="../css/menuGauche.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- barre de navigation -->

  <?php include('nav2.php'); ?>
  <div class="videNav"></div>

  <div class="contenu">
	<?php include('menuManager.php'); ?>

    <!-- contenu -->

      <div id="milieu">
        <div class="test">
          <div class="txtTest">
            <h1>Run a test</h1>
            <p>Enter the pilot's ID, select which sensors you want to use and run the test.</p>
            <p>The test may take 1 to 2 minutes.</p>
          </div>

          <div class="formulaire">
            <ion-icon name="person"></ion-icon>
            <input type="text" name="user" placeholder="Pilot's ID"><br>
          </div>

          <div class="option">
            <input type="checkbox" name="check">
            <label for="check">
              <ion-icon name="pulse"></ion-icon>
              Heart rate
            </label>
          </div>

          <div class="option">
            <input type="checkbox" name="check">
            <label for="check">
              <ion-icon name="stopwatch"></ion-icon>
              Response time
            </label>
          </div>

          <div class="option">
            <input type="checkbox" name="check">
            <label for="check">
              <ion-icon name="thermometer"></ion-icon>
              Body temperature
            </label>
          </div>

          <div class="envoyer">
            <input type="submit" name="env" value="Run the test">
          </div>

        </div>
      </div>

  </div>

  <?php include('footer.php'); ?>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
</body>
</html>
