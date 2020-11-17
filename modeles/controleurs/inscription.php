

<?PHP
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

if(isset($_POST['utilisateur']['nom']) && isset($_POST['utilisateur']['prenom']) && isset($_POST['utilisateur']['date_naissance']) && isset($_POST['utilisateur']['entreprise']) && isset($_POST['utilisateur']['mdp'])) {
  $nom = $_POST['utilisateur']['nom'];
  $prenom = $_POST['utilisateur']['prenom'];
  $mail = $_POST['utilisateur']['mail'];
  $date_naissance = $_POST['utilisateur']['date_naissance'];
  $entreprise = $_POST['utilisateur']['entreprise'];
  $mdp = $_POST['utilisateur']['mdp'];
  $hash = password_hash($mdp, PASSWORD_ARGON2I, ['memory_cost' => 1024, 'time_cost' => 2, 'threads' => 2]);

  $sql="UPDATE utilisateur SET nom='$nom', prenom='$prenom', date_naissance='$date_naissance', entreprise='$entreprise', mot_de_passe='$hash' WHERE mail='$mail'";

  $db = config::getConnexion();
  $req=$db->prepare($sql);
  try{
    $req->execute();
  }
  catch (Exception $e){
    print_r($e);
    die('Erreur');
  }
}

if ($lang == "fr") {
  header("Location: ../vues/fr/connexion.php?msg=1");
}

elseif ($lang == "en") {
  header("Location: ../vues/en/signin.php?msg=1");
}
