<?PHP

include "config.php";

function afficherQuestionsPosees() {
  $sql="SELECT * FROM questionsPosees";
  $db=config::getConnexion();
  try {
    $liste=$db->query($sql);
    return $liste;
  }
  catch (Exception $e){
    die('Erreur: '.$e->getMessage());
  }
}

?>
