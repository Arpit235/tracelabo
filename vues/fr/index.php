<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="private" />
  <title>Trace Labo</title>
  <meta name="description" content="Notre solution a pour but de garantir la fiabilité des pilotes, au travers de divers tests psychotechniques.">
  <meta name="robots" content="index, follow" />
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/index2.css">
  <link rel="stylesheet" href="../css/backtotop.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>
  <?php include('nav.php'); ?>

  <div id="haut">
    <div class=videNav></div>
    <div class="imgtop">
      <!--<img src="https://i.imgur.com/ODax3Pw.jpg"></img>-->
      <div class="imgTexte">
        <h1>Trace Labo</h1>
        <h4>To Infinity and Beyond</h4>
        <div class="boutonBas">
          <a href="#milieuImg">
            <ion-icon name="arrow-dropdown-circle"></ion-icon>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="milieuImg">
    <img class="imgSlideLeft" src="../img/avion.png">
    <div class="texteDroite">
      <p>Parce que les pilotes ont des vies entre les mains, il est primordial de s’assurer de leur fiabilité.
        Plus de <b>200 passagers</b> (vol long courrier) à transporter sur 15 000 km de distance.</p>
      <p>Les conducteurs doivent être toujours <b>alertes, concentrés</b>, et savoir faire face à un problème.
        Les enjeux de nos tests : attester du <b>temps de réaction</b> et de la <b>gestion du stress</b> des futurs pilotes.</p>
    </div>
  </div>

  <div id="milieu">
    <div class="icones">
      <div class="milieuGauche animer">
        <ion-icon name="pulse" class="icone"></ion-icon>
        <p><b>Rythme cardiaque</b></p>
        <p>Le rythme cardiaque est un excellent indicateur de stress. Un pilote sachant gérer une situation angoissante saura également réguler ses réactions physiologiques.</p>
      </div>

      <div class="milieuCentre animer">
        <ion-icon name="thermometer" class="icone"></ion-icon>
        <p><b>Température</b></p>
        <p>Mesurer la température corporelle du pilote permet de contrôler son état physique et peut prévenir les risques de réactions dangereuses (malaise, crise d’angoisse, etc.).</p>
      </div>

      <div class="milieuDroite animer">
        <ion-icon name="stopwatch" class="icone"></ion-icon>
        <p><b>Temps de réaction</b></p>
        <p>Mesurer le temps que met le pilote à réagir à un stimulus sonore ou visuel permet de s’assurer qu’en cas d’urgence, il saura prendre une décision à temps.</p>
      </div>
    </div>
  </div>

  <div id="bas">
    <div class="texteGauche">
      <p>Les résultats des tests seront consultables en ligne à tout moment.
        Seuls le pilote concerné et les gestionnaires y auront accès.
        Les données personnelles du pilote resteront strictement confidentielles.
      </p>
      <p>L'historique des données permettra un meilleur suivi de l'évolution des résultats, avec la possibilité de tracer différents graphiques.

      </p>
    </div>
    <img class="imgSlideRight1" src="../img/tableau-fr.png">
    <img class="imgSlideRight2" src="../img/courbe-fr.png">
  </div>

  <div id="contact">
    <h3 class="animer">Contact</h3>
    <div class="rs"><!-- réseaux sociaux -->
      <div class="fb animer">
        <a href="https://www.facebook.com/InfiniteMeasuresFr" target = "_blank"><ion-icon name="logo-facebook"></ion-icon></a>
        <p>InfiniteMeasuresFr</p>
      </div>

      <div class="email animer">
        <a href="mailto:infinitemeasuresfr@gmail.com" target = "_blank"><ion-icon name="mail"></ion-icon></a>
        <p>infinitemeasuresfr@gmail.com</p>
      </div>

      <div class="insta animer">
        <a href="https://www.instagram.com/infinite_measures/" target = "_blank"><ion-icon name="logo-instagram"></ion-icon></a>
        <p>infinite_measures</p>
      </div>

    </div>
  </div>


  <?php include('backtotop.php'); ?>

  <?php include('footer.php'); ?>

  <!--<script src="js/script.js"></script>-->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="../js/index.js"></script>
  <script src="../js/base.js"></script>
</body>
</html>
