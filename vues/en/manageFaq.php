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
  <title>FAQ</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav2.css">
  <link rel="stylesheet" href="../css/gererFaq.css">
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
      <h2>Manage the FAQs</h2>

      <div id="tableauMobile">
        <?PHP foreach ($faq2 as $question2) { ?>

        <div class="cellule">

          <?PHP if($question2['idQuestion'] == $_GET['idQuestion']): ?>

          <form method="post" id="formToShow" action="../../controleurs/modifierFaq.php">

            <p class="titre">QUESTION ID</p>
            <p class="valeur">
              <input type="text" id="info" value="<?PHP echo $question2['idQuestion'];?>" name="faq[idQuestion]">
            </p>

            <p class="titre">QUESTION</p>
            <p class="valeur">
              <textarea id="info" name="faq[question]"><?PHP echo $question2['question'];?></textarea>
            </p>

            <p class="titre">ANSWER</p>
            <p class="valeur">
              <textarea id="info" name="faq[reponse]"><?PHP echo $question2['reponse'];?></textarea
            </p>

            <p class="titre">CONFIRM</p>
            <p class="valeur">
              <button type="submit" name="btnModifMobile" title="Send"><img src="../img/ok.png"/></button>
            </p>

          </form>

          <?PHP else: ?>

          <p class="titre">QUESTION ID</p>
          <p class="valeur"><?PHP echo $question2['idQuestion']; ?></p>

          <p class="titre">QUESTION</p>
          <p class="valeur"><?PHP echo $question2['question']; ?></p>

          <p class="titre">ANSWER</p>
          <p class="valeur"><?PHP echo $question2['reponse']; ?></p>

          <?PHP endif; ?>

        </div>

        <?PHP } ?>

      </div>

      <table class="tableau" cellspacing="0">
        <thead>
          <tr>
            <th>Question ID</th>
            <th>Question</th>
            <th>Answer</th>
          </tr>
        </thead>
        <tbody>
          <?PHP foreach ($faq as $question) { ?>
            <tr>
              <?PHP if ($question['idQuestion'] == $_GET['idQuestion']): ?>
              <form method="post" action="../../controleurs/modifierFaq.php">
                <td><input type="hidden" name="faq[idQuestion]" value="<?PHP echo $question['idQuestion']; ?>"><?PHP echo $question['idQuestion']; ?></td>
                <td><textarea name="faq[question]"><?PHP echo $question['question']; ?></textarea></td>
                <td><textarea name="faq[reponse]"><?PHP echo $question['reponse']; ?></textarea></td>
              </td>

              <?PHP else: ?>
              <td><?PHP echo $question['idQuestion']; ?></td>
              <td><?PHP echo $question['question']; ?></td>
              <td><?PHP echo $question['reponse']; ?></td>
              <?PHP endif; ?>
            </tr>
            <?PHP } ?>
          </tbody>
        </table>
        <button type="submit" name="btnModif" title="Envoyer"><img src="../img/ok.png"/></button>
        </form>
    </div>

  </div>

  <?php include('footer.php') ?>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
  <script>$("#formToShow").get(0).scrollIntoView();</script>
</body>
</html>
