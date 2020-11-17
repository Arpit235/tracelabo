<?php

include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

if(isset($_POST['idDerniereQuestion'])) {
  $id = $_POST['idDerniereQuestion'] + 1;

  $sql="INSERT INTO faq (idQuestion, question, reponse) VALUES ('$id', NULL, NULL)";

  $db = config::getConnexion();
  $req=$db->prepare($sql);
  try{
    $req->execute();
  }
  catch (Exception $e){
    die('Erreur');
  }
}

if ($lang == "fr") {
  header("Location: ../vues/fr/gererFaq.php?idQuestion=$id");
}

elseif ($lang == "en") {
  header("Location: ../vues/en/manageFaq.php?idQuestion=$id");
}

?>
