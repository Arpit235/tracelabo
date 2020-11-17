<?PHP
session_start();
include('../../modeles/faqModele.php');

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "admin") {
  header('Location: signin.php');
}

$faq = afficherFAQ();
$faq2 = afficherFAQ();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <meta http-equiv="Cache-control" content="private" />
  <title>Questions list</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/listeFaq.css">
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
      <h2>Question list</h2>

      <div id="tableauMobile">
        <?PHP foreach ($faq2 as $question2) { ?>
        <div class="cellule">
          <p class="titre">QUESTION ID</p>
          <p class="valeur"><?PHP echo $question2['idQuestion']; ?></p>

          <p class="titre">QUESTION</p>
          <p class="valeur"><?PHP echo $question2['question']; ?></p>

          <p class="titre">ANSWER</p>
          <p class="valeur"><?PHP echo $question2['reponse']; ?></p>

          <p class="valeur">
            <form method="get" action="manageFaq.php" style="display:inline">
              <input type="hidden" name="idQuestion" value="<?PHP echo $question2['idQuestion']; ?>">
              <button type="submit" title="Envoyer"><img src="../img/edit.png"></button>
            </form>

            <button type="submit" name="btnSupp" title="<?PHP echo $question2['idQuestion']; ?>"><img src="../img/supp.png"></button>

          </p>
        </div>
        <?PHP } ?>
      </div>

      <table class="tableau" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Question ID</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?PHP foreach ($faq as $question) { ?>
            <tr>
              <td><?PHP echo $question['idQuestion'] ?></td>
              <td><?PHP echo $question['question']; ?></td>
              <td><?PHP echo $question['reponse']; ?></td>
              <td class="btnsTableau">
                <form method="get" action="manageFaq.php" style="display:inline">
                  <input type="hidden" name="idQuestion" value="<?PHP echo $question['idQuestion']; ?>">
                  <button type="submit" title="<?PHP echo $question['idQuestion']; ?>"><img src="../img/edit.png"></button>
                  <button type="button" name="btnSupp" title="<?PHP echo $question['idQuestion']; ?>"><img src="../img/supp.png"></button>
                </form>
              </td>
            </tr>
            <?PHP
              $nombreQuestions += 1;
              $idDerniereQuestion = $question['idQuestion'];
              }
            ?>
          </tbody>
        </table>
        <div class="btnAjouter">
          <form method="post" action="../../controleurs/ajouterFaq.php">
            <input type="hidden" name="idDerniereQuestion" value="<?PHP echo $idDerniereQuestion; ?>">
            <button type="submit" title="Ajouter"><img src="../img/add.png"/></button>
          </form>
        </div>
    </div>

  </div>

  <?php include('footer.php') ?>

  <script src="../js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
  <script src="../js/popupFaq.js"></script>
</body>
</html>
