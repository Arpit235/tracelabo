<?PHP
session_start();

include('../../modeles/donneesProfil.php');

if(!isset($_SESSION['idUtilisateur'])) {
  header('Location: connexion.php');
}

$nombreTests = nombreTests($_SESSION['idUtilisateur']);
$donneesPhysio = donneesPhysio($_SESSION['idUtilisateur']);
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <meta http-equiv="Cache-control" content="private" />
  <title>Mon profil</title>
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
    include('menu' . ucfirst($_SESSION['type']) . '.php');
  ?>

    <div id="milieu">
      <h2>Mon profil</h2>

      <?PHP if ($_SESSION['type'] == "pilote") { ?>
      <div id="profil" class="profilRow">
        <div id="gauche">
          <div class="infosGauche">
            <div id="avatarProfil">
              <img src="../img/avatars/<?PHP echo $_SESSION['idUtilisateur']; ?>.png" height="150px">
            </div>
            <p id="changerAvatar">Changer d'avatar</p>
          </div>

          <div class="infosGauche">
              <h4>Nombre de tests effectués</h4>
              <p class="nombre"><?PHP echo htmlspecialchars($nombreTests); ?></p>
          </div>

          <div class="infosGauche">
            <h4>Dernier score obtenu</h4>
            <p class="nombre">x</p>
          </div>

          <div class="infosGauche">
            <h4>Dernier classement</h4>
            <p class="nombre">x</p>
          </div>
        </div>

        <div id="droite">
          <div class="infosDroite">
            <div class="titreBoite">
              <h3>Vos données personnelles</h3>
              <p class="modifier">
                <ion-icon name="create"></ion-icon> Modifier
              </p>
              <p class="annuler">
                <ion-icon name="arrow-round-back"></ion-icon> Annuler
              </p>
            </div>
            <form method="post" action="../../controleurs/modifierProfil.php">
              <div class="info">
                <p class="titre">Nom</p>
                <p class="valeur valeurNormale"><?PHP echo htmlspecialchars($_SESSION['nom']); ?></p>
                <p class="valeur valeurInput"><input type="text" name="perso[nom]" value="<?PHP echo htmlspecialchars($_SESSION['nom']); ?>"></input></p>
              </div>
              <div class="info">
                <p class="titre">Prénom</p>
                <p class="valeur valeurNormale"><?PHP echo htmlspecialchars($_SESSION['prenom']); ?></p>
                <p class="valeur valeurInput"><input type="text" name="perso[prenom]" value="<?PHP echo htmlspecialchars($_SESSION['prenom']); ?>"></input></p>
              </div>
              <div class="info">
                <p class="titre">Entreprise</p>
                <p class="valeur valeurNormale"><?PHP echo htmlspecialchars($_SESSION['entreprise']); ?></p>
                <p class="valeur valeurInput"><input type="text" name="perso[entreprise]" value="<?PHP echo htmlspecialchars($_SESSION['entreprise']); ?>"></input></p>
              </div>

              <div class="btnForm">
                <button type="submit" name="btnConfirmer">Valider</button>
              </div>
            </form>
          </div>

          <div class="infosDroite">
            <div class="titreBoite">
              <h3>Vos données physiologiques</h3>
              <p class="modifier">
                <ion-icon name="create"></ion-icon> Modifier
              </p>
              <p class="annuler">
                <ion-icon name="arrow-round-back"></ion-icon> Annuler
              </p>
            </div>
            <form method="post" action="../../controleurs/modifierProfil.php">
              <div class="info">
                <p class="titre">Poids</p>
                <p class="valeur valeurNormale"><?PHP echo htmlspecialchars($donneesPhysio[0]); ?></p>
                <p class="valeur valeurInput"><input type="text" name="physio[poids]" value="<?PHP echo htmlspecialchars($donneesPhysio[0]); ?>"></p>
              </div>
              <div class="info">
                <p class="titre">Taille</p>
                <p class="valeur valeurNormale"><?PHP echo htmlspecialchars($donneesPhysio[1]); ?></p>
                <p class="valeur valeurInput"><input type="text" name="physio[taille]" value="<?PHP echo htmlspecialchars($donneesPhysio[1]); ?>"></p>
              </div>
              <div class="info">
                <p class="titre">Âge</p>
                <p class="valeur valeurNormale"><?PHP echo htmlspecialchars($donneesPhysio[2]); ?></p>
                <p class="valeur valeurInput"><input type="text" name="physio[age]" value="<?PHP echo htmlspecialchars($donneesPhysio[2]); ?>"></p>
              </div>

              <div class="btnForm">
                <button type="submit" name="btnConfirmer">Valider</button>
              </div>
            </form>            
          </div>

          <div class="infosDroite">
            <div class="titreBoite">
              <h3>Votre compte</h3>
              <p class="modifier">
                <ion-icon name="create"></ion-icon> Modifier
              </p>
              <p class="annuler">
                <ion-icon name="arrow-round-back"></ion-icon> Annuler
              </p>
            </div>
            <form method="post" action="../../controleurs/modifierProfil.php">
              <div class="info">
                <p class="titre">ID Utilisateur</p>
                <p class="valeur"><?PHP echo htmlspecialchars($_SESSION['idUtilisateur']); ?></p>
              </div>
              <div class="info">
                <p class="titre">Rôle</p>
                <p class="valeur"><?PHP echo htmlspecialchars(ucfirst($_SESSION['type'])); ?></p>
              </div>
              <div class="info">
                <p class="titre">Adresse mail</p>
                <p class="valeur valeurNormale"><?PHP echo htmlspecialchars($_SESSION['mail']); ?></p>
                <p class="valeur valeurInput"><input type="text" name="mail" value="<?PHP echo htmlspecialchars($_SESSION['mail']); ?>"></input></p>
              </div>
            </form>

            <div class="btnForm">
              <button type="submit" name="btnConfirmer">Valider</button>
            </div>
          </div>

          <div class="infosDroite">
            <h3>Modifier mon compte</h3>
            <div class="info">
              <p>Changer mon mot de passe</p>
            </div>
            <div class="info">
              <p>Supprimer mon compte</p>
            </div>
          </div>
        </div>
      </div>
      <?PHP }

      else { ?>
      <div id="profil" class="profilCol">
        <div class="infosGauche">
          <div id="avatarProfil">
            <img src="../img/avatars/<?PHP echo htmlspecialchars($_SESSION['idUtilisateur']); ?>.png" height="150px">
          </div>
          <p id="changerAvatar">Changer d'avatar</p>
        </div>

        <div class="infosDroite">
          <div class="titreBoite">
            <h3>Vos données personnelles</h3>
            <p class="modifier">
              <ion-icon name="create"></ion-icon> Modifier
            </p>
            <p class="annuler">
              <ion-icon name="arrow-round-back"></ion-icon> Annuler
            </p>
          </div>
          <form method="post" action="../../controleurs/modifierProfil.php">
            <div class="info">
              <p class="titre">Nom</p>
              <p class="valeur valeurNormale"><?PHP echo htmlspecialchars($_SESSION['nom']); ?></p>
              <p class="valeur valeurInput"><input type="text" name="perso[nom]" value="<?PHP echo htmlspecialchars($_SESSION['nom']); ?>"></input></p>
            </div>
            <div class="info">
              <p class="titre">Prénom</p>
              <p class="valeur valeurNormale"><?PHP echo htmlspecialchars($_SESSION['prenom']); ?></p>
              <p class="valeur valeurInput"><input type="text" name="perso[prenom]" value="<?PHP echo htmlspecialchars($_SESSION['prenom']); ?>"></input></p>
            </div>
            <div class="info">
              <p class="titre">Entreprise</p>
              <p class="valeur valeurNormale"><?PHP echo htmlspecialchars($_SESSION['entreprise']); ?></p>
              <p class="valeur valeurInput"><input type="text" name="perso[entreprise]" value="<?PHP echo htmlspecialchars($_SESSION['entreprise']); ?>"></input></p>
            </div>

            <div class="btnForm">
              <button type="submit" name="btnConfirmer">Valider</button>
            </div>
          </form>
        </div>

        <div class="infosDroite">
          <h3>Modifier mon compte</h3>
          <div class="info">
            <p>Changer mon mot de passe</p>
          </div>
          <div class="info">
            <p>Supprimer mon compte</p>
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
