<?PHP
session_start();

if(!isset($_SESSION['idUtilisateur'])) {
  header('Location: connexion.php');
}
?>

<div id="bienvenue">
  <img src="../img/avatars/<?PHP echo $_SESSION['idUtilisateur'] ;?>.png">
  <h1>Welcome, <?PHP echo $_SESSION['prenom']; ?> !</h1>
</div>
