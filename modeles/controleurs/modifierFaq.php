<?php
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

$faq = $_POST['faq'];
if(isset($faq)) {


  $idQuestion=$faq['idQuestion'];
  $question=$faq['question'];
  $reponse=$faq['reponse'];

  $sql="UPDATE faq SET question=:question, reponse=:reponse WHERE idQuestion=:idQuestion";

  $db = config::getConnexion();
  $db->exec("SET CHARACTER SET utf8");

  $req=$db->prepare($sql);

  $req->bindValue(':question',$question);
  $req->bindValue(':reponse',$reponse);
  $req->bindValue(':idQuestion',$idQuestion);

  try{
    $req->execute();
  }
  catch (Exception $e){
    print_r($e);
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
