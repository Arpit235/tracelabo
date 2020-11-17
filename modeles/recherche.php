<?PHP
include "config.php";

function rechercherUtilisateurs($nom) {
  $sql="SELECT z4_code,z4_filial,z4_utiliza,z4_login FROM sz4010 WHERE z4_utiliza='$nom'";
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
