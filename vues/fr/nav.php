<?php
$langues = array("fr","en","es");
$langueActuelle = array(substr($_SERVER['REQUEST_URI'], 6, 2));
$langues = array_diff($langues, $langueActuelle);
?>

<nav>
  <!--<div class="logoNav">
    <a href="http://infinitemeasures.fr/vues/<?php echo $langueActuelle[0]; ?>">
      <img src="https://i.imgur.com/6CFLqM7.png"></img>
    </a>
  </div>-->
  <div class="contenuNav">
    <a href="index.php">Accueil</a>
    <a href="connexion.php">Connexion</a>
    <a href="faq.php">FAQ</a>
    <a href="index.php#contact">Contact</a>
    <a id="boutonLangues">
      <img class="flag" src="../img/<?php echo $langueActuelle[0] ?>.png"><ion-icon name="arrow-dropdown"></ion-icon>
    </a>
  </div>
  <div id="listeLangues" class="cacherListeLangues">
    <?php foreach($langues as $langue) {?>
    <div class="langue">
      <a href="../<?php echo $langue; ?>/index.php">
        <img class="flag" src="../img/<?php echo $langue ?>.png">
      </a>
    </div>
    <?php } ?>
  </div>

  <!-- Bouton version mobile -->
  <div class="contenuNavMobile">
    <button id="bouton">
      <ion-icon name="menu"></ion-icon>
    </button>
  </div>

  <!-- Menu version mobile -->
  <div id="menuDeroulant" class="cacherMenuDeroulant">
    <p>
      <a href="index.php">Accueil</a>
      <a href="connexion.php">Connexion</a>
      <a href="faq.php">FAQ</a>
      <a href="index.php#contact">Contact</a>
      <div id="listeLanguesMobile">
        <?php foreach($langues as $langue) {?>
          <a href="../<?php echo $langue; ?>/index.php">
            <img class="flag" src="../img/<?php echo $langue ?>.png">
          </a>
        <?php }?>
      </div>
    </p>
  </div>
</nav>
