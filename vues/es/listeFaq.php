<?PHP
session_start();
include('../../modeles/faqModele.php');

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "admin") {
  header('Location: connexion.php');
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
  <title>InfiniteMeasures</title>
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
      <h2>Liste des questions</h2>

      <div id="tableauMobile">
        <?PHP foreach ($faq2 as $question2) { ?>
        <div class="cellule">
          <p class="titre">ID QUESTION</p>
          <p class="valeur"><?PHP echo htmlspecialchars( question2['idQuestion']); ?></p>

          <p class="titre">QUESTION</p>
          <p class="valeur"><?PHP echo htmlspecialchars($question2['question']); ?></p>

          <p class="titre">RÉPONSE</p>
          <p class="valeur"><?PHP echo htmlspecialchars($question2['reponse']); ?></p>

          <p class="valeur">
            <form method="get" action="gererFaq.php" style="display:inline">
              <input type="hidden" name="idQuestion" value="<?PHP echo htmlspecialchars($question2['idQuestion']); ?>">
              <button type="submit" title="Envoyer"><img src="../img/edit.png"></button>
            </form>

            <button type="submit" name="btnSupp" title="<?PHP echo htmlspecialchars($question2['idQuestion']); ?>"><img src="../img/supp.png"></button>

          </p>
        </div>
        <?PHP } ?>
      </div>

      <table class="tableau" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Question</th>
            <th>Question</th>
            <th>Réponse</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?PHP foreach ($faq as $question) { ?>
            <tr>
              <td><?PHP echo htmlspecialchars($question['idQuestion']) ?></td>
              <td><?PHP echo htmlspecialchars($question['question']); ?></td>
              <td><?PHP echo htmlspecialchars($question['reponse']); ?></td>
              <td class="btnsTableau">
                <form method="get" action="gererFaq.php" style="display:inline">
                  <input type="hidden" name="idQuestion" value="<?PHP echo htmlspecialchars($question['idQuestion']); ?>">
                  <button type="submit" title="<?PHP echo htmlspecialchars($question['idQuestion']); ?>"><img src="../img/edit.png"></button>
                  <button type="button" name="btnSupp" title="<?PHP echo htmlspecialchars($question['idQuestion']); ?>"><img src="../img/supp.png"></button>
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
            <input type="hidden" name="idDerniereQuestion" value="<?PHP echo htmlspecialchars($idDerniereQuestion); ?>">
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
