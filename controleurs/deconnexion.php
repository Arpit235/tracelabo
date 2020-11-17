<?PHP
  $langueActuelle = substr($_SERVER['HTTP_REFERER'],33,2);

  session_start();
  session_destroy();
  header('Location: ../vues/' . $langueActuelle . '/index.php');
?>
