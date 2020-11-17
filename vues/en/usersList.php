<?PHP
session_start();
include "../../modeles/utilisateur.php";
include "../../controleurs/utilisateurC.php";

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "admin") {
  header('Location: signin.php');
}

$utilisateur1C=new UtilisateurC();
$listeUtilisateurs=$utilisateur1C->afficherUtilisateurs();
$listeUtilisateurs2=$utilisateur1C->afficherUtilisateurs();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <meta http-equiv="Cache-control" content="private" />
  <title>Users list</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/listeUtilisateurs.css">
  <link rel="stylesheet" href="../css/popup.css">
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
  <?php include('popup.php'); ?>

    <!-- contenu -->

    <div id="milieu">
      <h2>Users List</h2>

      <div id="tableauMobile">
        <?PHP foreach ($listeUtilisateurs2 as $row) { ?>
        <div class="cellule">
          <p class="titre">USER ID</p>
          <p class="valeur"><?PHP echo $row['idUtilisateur']; ?></p>

          <p class="titre">USER TYPE</p>
          <p class="valeur"><?PHP echo $row['type_utilisateur']; ?></p>

          <p class="titre">NAME</p>
          <p class="valeur"><?PHP echo $row['nom']; ?></p>

          <p class="titre">SURNAME</p>
          <p class="valeur"><?PHP echo $row['prenom']; ?></p>

          <p class="titre">DATE OF BIRTH</p>
          <p class="valeur"><?PHP echo $row['date_naissance']; ?></p>

          <p class="titre">EMAIL ADDRESS</p>
          <p class="valeur"><?PHP echo $row['mail']; ?></p>

          <p class="titre">COMPANY</p>
          <p class="valeur"><?PHP echo $row['entreprise']; ?></p>

          <p class="titre">ACTIONS</p>
          <p class="valeur">
            <form method="post" action="manageUsers.php" style="display:inline">
              <input type="hidden" name="idUtilisateur" value="<?PHP echo $row['idUtilisateur']; ?>">
              <button type="submit" name="btnModif" title="Envoyer"><img src="../img/edit.png"></button>
            </form>

            <button type="submit" name="btnSupp" title="<?PHP echo $row['idUtilisateur']; ?>"><img src="../img/supp.png"></button>

          </p>
        </div>
        <?PHP } ?>
      </div>

      <table class="tableau" cellspacing="0">
        <thead>
          <tr>
            <th>User ID</th>
            <th>User Type</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Date of birth</th>
            <th>Email Address</th>
            <th>Company</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?PHP foreach($listeUtilisateurs as $row){ ?>
            <tr>
              <td><?PHP echo $row['idUtilisateur']; ?></td>
              <td><?PHP echo $row['type_utilisateur']; ?></td>
              <td><?PHP echo $row['nom']; ?></td>
              <td><?PHP echo $row['prenom']; ?></td>
              <td><?PHP echo $row['date_naissance']; ?></td>
              <td><?PHP echo $row['mail']; ?></td>
              <td><?PHP echo $row['entreprise']; ?></td>
              <td class="btnsTableau">
                <form method="post" action="manageUsers.php" style="display:inline">
                  <input type="hidden" name="idUtilisateur" value="<?PHP echo $row['idUtilisateur']; ?>">
                  <button type="submit" name="btnModif" title="Envoyer"><img src="../img/edit.png"></button>
                </form>

                <button type="submit" name="btnSupp" title="<?PHP echo $row['idUtilisateur']; ?>"><img src="../img/supp.png"></button>

              </td>
            </tr>
            <?PHP } ?>
          </tbody>
        </table>
    </div>

  </div>

  <?php include('footer.php'); ?>

  <script src="../js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
  <script src="../js/popupUser.js"></script>
</body>
</html>
