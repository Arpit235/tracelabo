<?PHP
session_start();

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "pilote") {
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
  <title>Ask a question</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/questionPilote.css">
  <link rel="stylesheet" href="../css/menuGauche.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- barre de navigation -->

  <?php include('nav2.php'); ?>
  <div class="videNav"></div>

  <div class="contenu">

	<?php include('menuPilot.php'); ?>

    <!-- contenu -->

    <div id="milieu">

      <h2>Ask a question</h2>
      <p>An administrator will answer it as soon as possible</p>

      <div class="message">
        <?PHP if($_GET['msg'] == 1): ?>
        <p class="valide">Your question has been sent!</p>

        <?PHP elseif($_GET['msg'] == 2): ?>
        <p class="invalide">Something went wrong.
        Try again.</p>

        <?PHP endif; ?>
      </div>

      <form method="post" action="../../controleurs/poserQuestion.php">
        <div class="formulaire">
          <input type="text" name="questionPosee" placeholder="Enter your question"><br>
        </div>

        <div class="envoyer">
          <input type="submit" name="env" value="Send">
        </div>
      </div>
    </form>

  </div>

  <?php include('footer.php') ?>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
</body>
</html>
