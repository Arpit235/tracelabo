<?php
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

if(isset($_POST['idPopup'])) {
  $idQuestion = $_POST['idPopup'];

  $sql="DELETE FROM faq WHERE idQuestion = '$idQuestion'";
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
  header("Location: ../vues/fr/listeFaq.php");
}

elseif ($lang == "en") {
  header("Location: ../vues/en/questionsList.php");
}
?>
