<?PHP
session_start();
include "../../modeles/utilisateur.php";
include "../../modeles/recherche.php";

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "gestionnaire") {
  header('Location: signin.php');
}

$resultatsRecherche=rechercherUtilisateurs($_POST['nom']);
$resultatsRecherche2=rechercherUtilisateurs($_POST['nom']);
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <meta http-equiv="Cache-control" content="private" />
  <title>Search results</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/resultatsRecherche.css">
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
	<?php include('menuManager.php'); ?>

    <!-- contenu -->

    <div id="milieu">
        <!--<div class="recherche">
            <input class="search-text" type = "text" name="" placeholder="Tapez un nom...">
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
        </div>-->
      <h2>Search results</h2>
      <?PHP if (rechercherUtilisateurs($_POST['nom'])->fetch()): ?>

      <div id="tableauMobile">
        <?PHP foreach ($resultatsRecherche2 as $row2) { ?>
        <div class="cellule">
          <p class="titre">USER ID</p>
          <p class="valeur"><?PHP echo $row2['idUtilisateur']; ?></p>

          <p class="titre">USER TYPE</p>
          <p class="valeur"><?PHP echo $row2['type_utilisateur']; ?></p>

          <p class="titre">NAME</p>
          <p class="valeur"><?PHP echo $row2['nom']; ?></p>

          <p class="titre">SURNAME</p>
          <p class="valeur"><?PHP echo $row2['prenom']; ?></p>
          <p class="titre">EMAIL ADDRESS</p>
          <p class="valeur"><?PHP echo $row2['mail']; ?></p>
        </div>
        <?PHP } ?>
      </div>


      <table class="tableau" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>User ID</th>
            <th>User Type</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email address</th>
          </tr>
        </thead>
        <tbody>
          <?PHP foreach($resultatsRecherche as $row) { ?>
            <tr>
              <td><?PHP echo $row['idUtilisateur']; ?></td>
              <td><?PHP echo $row['type_utilisateur']; ?></td>
              <td><?PHP echo $row['nom']; ?></td>
              <td><?PHP echo $row['prenom']; ?></td>
              <td><?PHP echo $row['mail']; ?></td>
            </tr>
            <?PHP } ?>
          </tbody>
        </table>

        <?PHP else: ?>
        <p>No results for : "<?PHP echo $_POST['nom']; ?>"</p>
        <?PHP endif; ?>
    </div>

  </div>

  <?php include('footer.php') ?>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
</body>
</html>
