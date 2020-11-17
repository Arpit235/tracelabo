<?PHP include('../../modeles/faqModele.php');

$questions = afficherQuestions();
$reponses = afficherReponses();

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Infinite Measures</title>
  <meta name="description" content="Notre solution a pour but de garantir la fiabilité des pilotes, au travers de divers tests psychotechniques.">
  <meta name="robots" content="index, follow" />
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/faq.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('nav.php') ?>

    <div id="milieu">
      <div id="vide"><p> </p></div>
      <div id="titre">
        <br><strong>FAQ</strong><br><br>
      </div>

      <?PHP for ($i=0 ; $i <= count($questions) ; $i++) { ?>
      <div id="questions">
          <p class="question"><?PHP echo $questions[$i]; ?></p>
          <p class="réponse"><?PHP echo $reponses[$i]; ?></p>
      </div>
      <?PHP } ?>

    </div>

    <?php include('footer.php') ?>

  <script src="../js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/base.js"></script>
</body>
</html>
