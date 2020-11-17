<?php
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

if(isset($_POST['idPopup'])) {
  $id = $_POST['idPopup'];

  $sql = "DELETE FROM utilisateur WHERE idUtilisateur='$id'";

  $db = config::getConnexion();
  $req = $db -> prepare($sql);
  try {
    $req -> execute();
  }
  catch (Exception $e){
    die($e);
  }
}

if ($lang == "fr") {
  header("Location: ../vues/fr/listeUtilisateurs.php");
}

elseif ($lang == "en") {
  header("Location: ../vues/en/usersList.php");
}
?>
