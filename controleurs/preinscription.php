<?PHP
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

function check($mail){
  $sql="SELECT COUNT(1) FROM utilisateur WHERE mail = '$mail' AND nom IS NULL AND prenom IS NULL";

  $db = config::getConnexion();
  $req = $db -> prepare($sql);

  try {
    $resultatPdo = $db -> query($sql);
    $autorisation = $resultatPdo -> fetch();
		return $autorisation[0];
  }

  catch (Exception $e) {
    die('Erreur: '.$e->getMessage());
  }
}
?>
