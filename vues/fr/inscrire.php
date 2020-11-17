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
  <title>Inscrire</title>
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

	<?php include('menuAdmin.php'); ?>

    <!-- contenu -->

    <div id="milieu">

      <h2>Inscrire un utilisateur</h2>
      <p>Entrez l'adresse mail d'un utilisateur pour l'inscrire au site</p>

      <div class="message">
        <?PHP if($_GET['msg'] == 1): ?>
        <p class="valide">L'utilisateur a été inscrit !</p>

        <?PHP elseif($_GET['msg'] == 2): ?>
        <p class="invalide">Une erreur s'est produite.
        Veuillez réessayer.</p>

        <?PHP endif; ?>
      </div>

      <form method="post" action="../../controleurs/inscrire.php">
        <div class="formulaire">
          <input type="text" name="mail" placeholder="Entrez une adresse mail"><br>
        </div>

        <div class="envoyer">
          <input type="submit" name="env" value="Envoyer">
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
