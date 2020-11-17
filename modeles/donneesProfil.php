<?PHP
include "config.php";

function nombreTests($id) {
  $sql="SELECT COUNT(*) FROM test WHERE Utilisateur_idUtilisateur='$id';";
  $db=config::getConnexion();
  try {
    $nb=$db->query($sql);
    return $nb->fetch()[0];
  }
  catch (Exception $e){
    die('Erreur: '.$e->getMessage());
  }
}

function donneesPhysio($id) {
  $sql="SELECT poids,taille,age FROM utilisateur WHERE idUtilisateur='$id';";
  $db=config::getConnexion();
  try {
    $donneesPhysio=$db->query($sql);
    return $donneesPhysio->fetch();
  }
  catch (Exception $e){
    die('Erreur: '.$e->getMessage());
  }
}
?>
