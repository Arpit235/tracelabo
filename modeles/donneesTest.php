<?PHP
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

function recupererDonnees($idUtilisateur){
	$sql="SELECT * FROM donnees WHERE Utilisateur_idUtilisateur=$idUtilisateur";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur');
	}
}

function recupererDernieresDonnees($idUtilisateur){
	$sql="SELECT * FROM donnees WHERE Utilisateur_idUtilisateur=$idUtilisateur AND idTest=(SELECT idTest FROM donnees WHERE Utilisateur_idUtilisateur=1 ORDER BY idTest DESC LIMIT 1 )";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur');
	}
}

function nomCapteur($idCapteur) {
	$sql = "SELECT typeCapteur FROM capteur WHERE idCapteur=$idCapteur";
	$db = config::getConnexion();
	try{
		$type = $db->query($sql);
		$resultat = $type->fetch();
		return $resultat[0];
	}
	catch (Exception $e){
		die('Erreur');
	}
}

function recupererScores($idUtilisateur){
	$sql="SELECT score FROM test WHERE Utilisateur_idUtilisateur=$idUtilisateur";
	$db = config::getConnexion();
	try{
		$listeScores=$db->query($sql);
	}
	catch (Exception $e){
		die('Erreur');
	}
	$listeScoresJson = array();
	$nbScores = 0;
	foreach($listeScores as $score) {
	  array_push($listeScoresJson,$score[0]);
	  $nbScores += 1;
	};
	$listeScoresJson = json_encode($listeScoresJson);
	$labelsScoresJson = json_encode(range(1,$nbScores));

	return array($labelsScoresJson,$listeScoresJson);
}

function recupererCardiaque($idUtilisateur){
	$sql="SELECT valeur FROM donnees WHERE Utilisateur_idUtilisateur=$idUtilisateur AND Capteur_idCapteur=1";
	$db = config::getConnexion();
	try{
		$listeCardiaque=$db->query($sql);
	}
	catch (Exception $e){
		die('Erreur');
	}
	$listeCardiaqueJson = array();
	$nbCardiaque = 0;
	foreach($listeCardiaque as $cardiaque) {
		array_push($listeCardiaqueJson,$cardiaque[0]);
		$nbCardiaque += 1;
	};
	$listeCardiaqueJson = json_encode($listeCardiaqueJson);
	$labelsCardiaqueJson = json_encode(range(1,$nbCardiaque));

	return array($labelsCardiaqueJson,$listeCardiaqueJson);
}

function recupererTemp($idUtilisateur){
	$sql="SELECT valeur FROM donnees WHERE Utilisateur_idUtilisateur=$idUtilisateur AND Capteur_idCapteur=2";
	$db = config::getConnexion();
	try{
		$listeTemp=$db->query($sql);
	}
	catch (Exception $e){
		die('Erreur');
	}
	$listeTempJson = array();
	$nbTemp = 0;
	foreach($listeTemp as $temp) {
		array_push($listeTempJson,$temp[0]);
		$nbTemp += 1;
	};
	$listeTempJson = json_encode($listeTempJson);
	$labelsTempJson = json_encode(range(1,$nbTemp));

	return array($labelsTempJson,$listeTempJson);
}

function recupererReaction($idUtilisateur){
	$sql="SELECT valeur FROM donnees WHERE Utilisateur_idUtilisateur=$idUtilisateur AND Capteur_idCapteur=3";
	$db = config::getConnexion();
	try{
		$listeReaction=$db->query($sql);
	}
	catch (Exception $e){
		die('Erreur');
	}
	$listeReactionJson = array();
	$nbReaction = 0;
	foreach($listeReaction as $reaction) {
		array_push($listeReactionJson,$reaction[0]);
		$nbReaction += 1;
	};
	$listeReactionJson = json_encode($listeReactionJson);
	$labelsReactionJson = json_encode(range(1,$nbReaction));

	return array($labelsReactionJson,$listeReactionJson);
}

?>
