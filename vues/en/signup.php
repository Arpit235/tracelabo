<?PHP
include "../../controleurs/inscription.php";
$autorisation = check($_GET['mail']);
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="private" />
  <title>Sign up</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/inscription.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('nav.php'); ?>
    <div class="videNav"></div>
    <div id="milieu">
      <?PHP if($autorisation == 1): ?>
        <div class="txtMilieu">
          <h1>Create your account</h1>
          <ion-icon name="contact"></ion-icon>
        </div>
          <form action="../controleurs/inscrire.php" method="post">
            <div class="formulaire">
              <ion-icon name="person"></ion-icon>
              <input type="text" name="utilisateur[nom]" placeholder="Name"><br>
            </div>
            <div class="formulaire">
              <ion-icon name="person"></ion-icon>
              <input type="text" name="utilisateur[prenom]" placeholder="Surname"><br>
            </div>
            <div class="formulaire">
              <ion-icon name="mail"></ion-icon>
              <input type="text" name="utilisateur[mail]" value="<?PHP echo $_GET['mail']; ?>"><br>
            </div>
            <div class="formulaire">
              <ion-icon name="calendar"></ion-icon>
              <input type="text" name="utilisateur[date_naissance]" placeholder="Date of birth (format : YYYY-MM-DD)"><br>
            </div>
            <div class="formulaire">
              <ion-icon name="business"></ion-icon>
              <input type="text" name="utilisateur[entreprise]" placeholder="Company"><br>
            </div>
            <div class="formulaire">
              <ion-icon name="lock"></ion-icon>
              <input type="password" name="utilisateur[mdp]" placeholder="Password(minimum 8 characters)"><br><br><br>
            </div>
            <div class="envoyer">
              <input type="submit" name="env" value="Sign Up">
            </div>
          </form>
        <?PHP else: ?>
          <div class="txtMilieu">
            <h1>You can't sign up</h1>
          </div>
        <?PHP endif; ?>
    </div>

    <?php include('footer.php'); ?>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
</body>
</html>
