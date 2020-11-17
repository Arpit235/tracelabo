<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="private" />
  <title>InfiniteMeasures</title>
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/index.css">
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
        <h1>Infinite Measures</h1>
        <h4>To Infinity and Beyond</h4>
        <div class="boutonBas">
          <a href="#milieu">
            <ion-icon name="arrow-dropdown-circle"></ion-icon>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="milieu">
    <div class="icones">
      <div class="milieuGauche animer">
        <ion-icon name="pulse" class="icone"></ion-icon>
        <p>Capteur Cardiaque : le rythme cardiaque est un excellent indicateur de stress.
          Un pilote sachant gérer une situation angoissante saura réguler ses réactions physiologiques
          comme par exemple ses battements cardiaques.</p>
      </div>

      <div class="milieuCentre animer">
        <ion-icon name="stopwatch" class="icone"></ion-icon>
        <p>Capteur du temps de réaction : On mesurera le temps que met le pilote à réagir
          à un stimulus sonore ou visuel afin de s’assurer qu’en cas d’urgence il saura prendre une décision à temps.</p>
      </div>

      <div class="milieuDroite animer">
        <ion-icon name="thermometer" class="icone"></ion-icon>
        <p>Thermomètre : Mesurer la température corporelle du pilote permet de
          contrôler son état physique et peut prévenir les risques de réactions dangereuses (malaise, crise d’angoisse etc…)</p>
      </div>
    </div>
  </div>

  <div id="bas">
    <h3 class="animer">Notre Solution</h3>
    <p class="animer">Parce que les pilotes ont des vies entre les mains, il est primordial de s’assurer de leur fiabilité.</p>

    <p class="animer">Plus de 200 passagers (vol long courrier) à transporter sur 15 000 km de distance.</p>

    <p class="animer">Les conducteurs doivent être toujours alertes, concentrés, et savoir faire face à un problème.
    Les enjeux de nos tests : Attester du temps de réaction et de la gestion du stress des futurs pilotes.</p>
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
