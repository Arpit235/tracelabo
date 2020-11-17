<?php
session_start();
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

$id = $_SESSION['idUtilisateur'];

if(isset($_POST['perso'])) {
  $perso = $_POST['perso'];

  $nom=$perso['nom'];
  $prenom=$perso['prenom'];
  $entreprise=$perso['entreprise'];

  $_SESSION['nom']=$nom;
  $_SESSION['prenom']=$prenom;
  $_SESSION['entreprise']=$entreprise;

  $sql="UPDATE utilisateur SET nom=:nom, prenom=:prenom, entreprise=:entreprise WHERE idUtilisateur='$id'";

  $db = config::getConnexion();

  $req=$db->prepare($sql);

  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':entreprise',$entreprise);

  try{
    $req->execute();
  }
  catch (Exception $e){
    die($e);
  }
}

if (isset($_POST['physio'])) {
  $physio = $_POST['physio'];

  $poids=$physio['poids'];
  $age=$physio['age'];
  $taille=$physio['taille'];

  $sql="UPDATE utilisateur SET poids=:poids, age=:age, taille=:taille WHERE idUtilisateur='$id'";

  $db = config::getConnexion();

  $req=$db->prepare($sql);

  $req->bindValue(':poids',$poids);
  $req->bindValue(':age',$age);
  $req->bindValue(':taille',$taille);

  try{
    $req->execute();
  }
  catch (Exception $e){
    die($e);
  }
}

if (isset($_POST['mail'])) {
  $mail = $_POST['mail'];

  $sql="UPDATE utilisateur SET mail=:mail WHERE idUtilisateur='$id'";

  $db = config::getConnexion();

  $req=$db->prepare($sql);

  $req->bindValue(':mail',$mail);

  try{
    $req->execute();
  }
  catch (Exception $e){
    die($e);
  }
}

if ($lang == "fr") {
  header("Location: ../vues/fr/profil.php");
}

elseif ($lang == "en") {
  header("Location: ../vues/en/profile.php");
}
?>
