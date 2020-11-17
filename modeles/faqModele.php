<?PHP
include "../../config.php";

function afficherFAQ() {
  $sql="SELECT * FROM faq";
  $db=config::getConnexion();
  try {
    $all=$db->query($sql);
    return $all;
  }
  catch (Exception $e){
    die('Erreur: '.$e->getMessage());
  }
}


function afficherQuestions() {
  $sql="SELECT question FROM faq";
  $db=config::getConnexion();
  try {
    $questions=$db->query($sql);
    $liste = array();
    foreach($questions as $question) {
      array_push($liste, $question[0]);
    }
    return $liste;
  }
  catch (Exception $e){
    die('Erreur: '.$e->getMessage());
  }
}

function afficherReponses() {
  $sql="SELECT reponse FROM faq";
  $db=config::getConnexion();
  try {
    $reponses=$db->query($sql);
    $liste = array();
    foreach($reponses as $reponse) {
      array_push($liste, $reponse[0]);
    }
    return $liste;
  }
  catch (Exception $e){
    die('Erreur: '.$e->getMessage());
  }
}

?>
