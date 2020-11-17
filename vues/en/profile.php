<?PHP
session_start();
include('../../modeles/donneesProfil.php');

if(!isset($_SESSION['idUtilisateur'])) {
  header('Location: signin.php');
}

$nombreTests = nombreTests($_SESSION['idUtilisateur']);
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <meta http-equiv="Cache-control" content="private" />
  <title>My profile</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/menuGauche.css">
  <link rel="stylesheet" href="../css/profil.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- barre de navigation -->

  <?php include('nav2.php'); ?>
  <div class="videNav"></div>

  <div class="contenu">

  <?php
  if ($_SESSION['type'] == "gestionnaire") { include("menuManager.php"); }
  elseif ($_SESSION['type'] == "pilote") { include("menuPilot.php"); }
  elseif ($_SESSION['type'] == "admin") { include("menuAdmin.php"); }
  ?>

    <div id="milieu">
      <h2>My profile</h2>

      <?PHP if ($_SESSION['type'] == "pilote") { ?>
      <div id="profil" class="profilRow">
        <div id="gauche">
          <div class="infosGauche">
            <div id="avatarProfil">
              <img src="../img/avatars/<?PHP echo $_SESSION['idUtilisateur']; ?>.png" height="150px">
            </div>
            <p id="changerAvatar">Change my avatar</p>
          </div>

          <div class="infosGauche">
              <h4>Number of tests performed</h4>
              <p class="nombre"><?PHP echo $nombreTests; ?></p>
          </div>

          <div class="infosGauche">
            <h4>Latest score</h4>
            <p class="nombre">x</p>
          </div>

          <div class="infosGauche">
            <h4>Latest ranking</h4>
            <p class="nombre">x</p>
          </div>
        </div>

        <div id="droite">
          <div class="infosDroite">
            <div class="titreBoite">
              <h3>Personal data</h3>
              <p class="modifier">
                <ion-icon name="create"></ion-icon> Edit
              </p>
              <p class="annuler">
                <ion-icon name="arrow-round-back"></ion-icon> Cancel
              </p>
            </div>
            <form method="post" action="../../controleurs/modifierProfil.php">
              <div class="info">
                <p class="titre">Name</p>
                <p class="valeur valeurNormale"><?PHP echo $_SESSION['nom']; ?></p>
                <p class="valeur valeurInput"><input type="text" name="perso[nom]" value="<?PHP echo $_SESSION['nom']; ?>"></input></p>
              </div>
              <div class="info">
                <p class="titre">Surname</p>
                <p class="valeur valeurNormale"><?PHP echo $_SESSION['prenom']; ?></p>
                <p class="valeur valeurInput"><input type="text" name="perso[prenom]" value="<?PHP echo $_SESSION['prenom']; ?>"></input></p>
              </div>
              <div class="info">
                <p class="titre">Company</p>
                <p class="valeur valeurNormale"><?PHP echo $_SESSION['entreprise']; ?></p>
                <p class="valeur valeurInput"><input type="text" name="perso[entreprise]" value="<?PHP echo $_SESSION['entreprise']; ?>"></input></p>
              </div>

              <div class="btnForm">
                <button type="submit" name="btnConfirmer">Confirm</button>
              </div>
            </form>
          </div>

          <div class="infosDroite">
            <div class="titreBoite">
              <h3>Physiological data</h3>
              <p class="modifier">
                <ion-icon name="create"></ion-icon> Edit
              </p>
              <p class="annuler">
                <ion-icon name="arrow-round-back"></ion-icon> Cancel
              </p>
            </div>
            <form method="post" action="../../controleurs/modifierProfil.php">
              <div class="info">
                <p class="titre">Weight</p>
                <p class="valeur valeurNormale">x</p>
                <p class="valeur valeurInput"><input type="text" name="physio[poids]" value="x"></p>
              </div>
              <div class="info">
                <p class="titre">Height</p>
                <p class="valeur valeurNormale">x</p>
                <p class="valeur valeurInput"><input type="text" name="physio[taille]" value="x"></p>
              </div>
              <div class="info">
                <p class="titre">Age</p>
                <p class="valeur valeurNormale">x</p>
                <p class="valeur valeurInput"><input type="text" name="physio[age]" value="x"></p>
              </div>
            </form>

            <div class="btnForm">
              <button type="submit" name="btnConfirmer">Confirm</button>
            </div>
          </div>

          <div class="infosDroite">
            <div class="titreBoite">
              <h3>Your account</h3>
              <p class="modifier">
                <ion-icon name="create"></ion-icon> Edit
              </p>
              <p class="annuler">
                <ion-icon name="arrow-round-back"></ion-icon> Cancel
              </p>
            </div>
            <form method="post" action="../../controleurs/modifierProfil.php">
              <div class="info">
                <p class="titre">User ID</p>
                <p class="valeur"><?PHP echo $_SESSION['idUtilisateur']; ?></p>
              </div>
              <div class="info">
                <p class="titre">Role</p>
                <p class="valeur"><?PHP echo ucfirst($_SESSION['type']); ?></p>
              </div>
              <div class="info">
                <p class="titre">Email address</p>
                <p class="valeur valeurNormale"><?PHP echo $_SESSION['mail']; ?></p>
                <p class="valeur valeurInput"><input type="text" name="mail" value="<?PHP echo $_SESSION['mail']; ?>"></input></p>
              </div>
            </form>

            <div class="btnForm">
              <button type="submit" name="btnConfirmer">Confirm</button>
            </div>
          </div>

          <div class="infosDroite">
            <h3>Edit your account</h3>
            <div class="info">
              <p>Change password</p>
            </div>
            <div class="info">
              <p>Delete this account</p>
            </div>
          </div>
        </div>
      </div>
      <?PHP }

      else { ?>
      <div id="profil" class="profilCol">
        <div class="infosGauche">
          <div id="avatarProfil">
            <img src="../img/avatars/<?PHP echo $_SESSION['idUtilisateur']; ?>.png" height="150px">
          </div>
          <p id="changerAvatar">Changer my avatar</p>
        </div>

        <div class="infosDroite">
          <div class="titreBoite">
            <h3>Personal data</h3>
            <p class="modifier">
              <ion-icon name="create"></ion-icon> Edit
            </p>
            <p class="annuler">
              <ion-icon name="arrow-round-back"></ion-icon> Cancel
            </p>
          </div>
          <form method="post" action="../../controleurs/modifierProfil.php">
            <div class="info">
              <p class="titre">Name</p>
              <p class="valeur valeurNormale"><?PHP echo $_SESSION['nom']; ?></p>
              <p class="valeur valeurInput"><input type="text" name="perso[nom]" value="<?PHP echo $_SESSION['nom']; ?>"></input></p>
            </div>
            <div class="info">
              <p class="titre">Surname</p>
              <p class="valeur valeurNormale"><?PHP echo $_SESSION['prenom']; ?></p>
              <p class="valeur valeurInput"><input type="text" name="perso[prenom]" value="<?PHP echo $_SESSION['prenom']; ?>"></input></p>
            </div>
            <div class="info">
              <p class="titre">Company</p>
              <p class="valeur valeurNormale"><?PHP echo $_SESSION['entreprise']; ?></p>
              <p class="valeur valeurInput"><input type="text" name="perso[entreprise]" value="<?PHP echo $_SESSION['entreprise']; ?>"></input></p>
            </div>

            <div class="btnForm">
              <button type="submit" name="btnConfirmer">Confirm</button>
            </div>
          </form>
        </div>

        <div class="infosDroite">
          <h3>Edit your account</h3>
          <div class="info">
            <p>Change my password</p>
          </div>
          <div class="info">
            <p>Delete my account</p>
          </div>
        </div>
      </div>
      <?PHP } ?>
    </div>

  </div>

  <?php include('footer.php') ?>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
  <script src="../js/profil.js"></script>
</body>
</html>
