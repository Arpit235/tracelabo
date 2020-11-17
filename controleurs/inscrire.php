<?php
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

if(isset($_POST['mail'])) {
  $mail = $_POST['mail'];

  $sqlDernierId="SELECT idUtilisateur FROM utilisateur ORDER BY idUtilisateur DESC LIMIT 1";

  $db = config::getConnexion();
	try{
		$dernierId=$db->query($sqlDernierId);
    $tmp = $dernierId->fetch();
    $dernierId = $tmp[0] + 1;
	}
	catch (Exception $e){
		die('Erreur');
	}

  $sql="INSERT INTO utilisateur (idUtilisateur, type_utilisateur, mail) VALUES ($dernierId, 'pilote', '$mail')";

  $db = config::getConnexion();
  $req=$db->prepare($sql);
  try{
    $req->execute();
  }
  catch (Exception $e){
    if ($lang == "fr") {
      header("Location: ../vues/fr/inscrire.php?msg=2");
    }

    elseif ($lang == "en") {
      header("Location: ../vues/en/addUser.php?msg=2");
    }
  }
}

$sujet = 'Inscription';
$message = "Voici votre lien d'inscription : https://infinitemeasures.fr/vues/fr/inscription.php?mail=" . $mail;
$headers = 'De : Infinite Measures';
mail($mail,$sujet,$message,$headers);

if ($lang == "fr") {
  header("Location: ../vues/fr/inscrire.php?msg=1");
}

elseif ($lang == "en") {
  header("Location: ../vues/en/addUser.php?msg=1");
}

?>
