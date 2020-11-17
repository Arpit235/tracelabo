<?PHP
session_start();

if(!isset($_SESSION['z4_code'])) {
  header('Location: connexion.php');
}
?>

<div id="bienvenue">
  <img src="../img/avatars/<?PHP echo $_SESSION['z4_code'] ;?>.png">
  <h1>Bienvenue, <?PHP echo $_SESSION['z4_utiliza']; ?> !</h1>
</div>
