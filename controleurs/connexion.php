<?PHP
session_start();
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

if (isset($_POST['z4_login'])) {
  $login = htmlspecialchars($_POST['z4_login']);
}
if (isset($_POST['z4_motpass'])) {
  $mdp = htmlspecialchars($_POST['z4_motpass']);
}

//$login = htmlspecialchars($_POST['z4_login']);
//$mdp = htmlspecialchars($_POST['z4_motpass']);

if (isset($login) && isset($mdp)) {


  $sql = "SELECT COUNT(1) FROM sz4010 WHERE z4_login='$login'";
  $db = config::getConnexion();

  try {
    $req = $db -> query($sql);
    $reqFetch = $req -> fetch();
    $existe = $reqFetch[0];
  }

  catch (Exception $e) {
    die('Erreur: '.$e->getMessage());
  }

  if ($existe == 0) {
    if ($lang == "fr") {
      header("Location: ../vues/fr/connexion.php?msg=2");
    }

    elseif ($lang == "en") {
      header("Location: ../vues/en/signin.php?msg=2");
    }
  }

  else {
    $sql = "SELECT z4_motpass FROM sz4010 WHERE z4_login='$login'";
    $db = config::getConnexion();

    try {
      $req = $db -> query($sql);
      $reqFetch = $req -> fetch();
      $hash = $reqFetch[0];
    }

    catch (Exception $e) {
      die('Erreur: '.$e->getMessage());
    }

    if (password_verify($mdp, $hash)) {
      $sql = "SELECT z4_code, z4_filial, z4_utiliza, z4_login FROM sz4010 WHERE z4_login='$login'";
      $db = config::getConnexion();

      try {
        $req = $db -> query($sql);
        $reqFetch = $req -> fetch();
        $id = $reqFetch[0];
        $type = $reqFetch[1];
        $nom = $reqFetch[2];
        $login = $reqFetch[3];
      }

      catch (Exception $e) {
        die('Erreur: '.$e->getMessage());
      }

      $_SESSION['z4_code'] = $id;
      $_SESSION['z4_filial'] = $type;
      $_SESSION['z4_utiliza'] = $nom;
      $_SESSION['z4_login'] = $login;
      $_SESSION['bienvenue'] = true;



      if ($type === '01') {
          header("Location: ../vues/fr/gestionnaire.php");
      }
      /*elseif ($type === 'pilote') {
        if ($lang == "fr") {
          header("Location: ../vues/fr/donnees.php");
        }

        elseif ($lang == "en") {
          header("Location: ../vues/en/data.php");
        }
      }
      elseif ($type === 'admin') {
        header("Location: ../vues/" . $lang . "/admin.php");
      }*/
    }

    else {
      if ($lang == "fr") {
        header("Location: ../vues/fr/connexion.php?msg=2");
      }

      elseif ($lang == "en") {
        header("Location: ../vues/en/signin.php?msg=2");
      }
    }
  }
}

else
{
    header("Location: ../vues/fr/connexion.php?msg=2");
}
?>
