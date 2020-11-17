<?PHP
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

class UtilisateurC {
function afficherUtilisateur ($utilisateur){
		echo "Id utilisateur: ".$utilisateur->getIdUtilisateur()."<br>";
		echo "Type utilisateur: ".$utilisateur->getTypeUtilisateur()."<br>";
		echo "Nom: ".$utilisateur->getNom()."<br>";
		echo "Prenom: ".$utilisateur->getPrenom()."<br>";
		echo "Date de naissance: ".$utilisateur->getDateDeNaissance()."<br>";
		echo "Mail: ".$utilisateur->getMail()."<br>";
		echo "Entreprise: ".$utilisateur->getEntreprise()."<br>";
		echo "Mot de passe: ".$utilisateur->getMotDePasse()."<br>";
	}

	function ajouterUtilisateur($utilisateur){
		$sql="insert into utilisateur (
		idUtilisateur, type_utilisateur, nom, prenom, date_naissance, mail, entreprise, mot_de_passe) values (:idUtilisateur, :type_utilisateur, :nom, :prenom, :date_naissance, :mail, :entreprise, :mot_de_passe)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $idUtilisateur=$utilisateur->getIdUtilisateur();
        $type_utilisateur=$utilisateur->getTypeUtilisateur();
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $date_naissance=$utilisateur->getDateDeNaissance();
        $mail=$utilisateur->getMail();
        $entreprise=$utilisateur->getEntreprise();
        $mot_de_passe=$utilisateur->getMotDePasse();
		$req->bindValue(':idUtilisateur',$idUtilisateur);
		$req->bindValue(':type_utilisateur',$type_utilisateur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date_naissance',$date_naissance);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':entreprise',$entreprise);
		$req->bindValue(':mot_de_passe',$mot_de_passe);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherUtilisateurs(){
		//$sql="SElECT * From utilisateur e inner join formationphp.utilisateur a on e.idUtilisateur= a.idUtilisateur";
		$sql="SElECT * From utilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerUtilisateur($idUtilisateur){
		$sql="DELETE FROM utilisateur where idUtilisateur= :idUtilisateur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idUtilisateur',$idUtilisateur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierUtilisateur($utilisateur,$idUtilisateur){
		$sql="UPDATE utilisateur SET idUtilisateur=:idUtilisateurn,type_utilisateur=:type_utilisateur, nom=:nom,prenom=:prenom,date_naissance=:date_naissance,mail=:mail, entreprise=:entreprise, mot_de_passe=:mot_de_passe WHERE idUtilisateur=:idUtilisateur";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		$idUtilisateurn=$utilisateur->getIdUtilisateur();
		$type_utilisateur=$utilisateur->getTypeUtilisateur();
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $date_naissance=$utilisateur->getDateDeNaissance();
        $mail=$utilisateur->getMail();
        $entreprise=$utilisateur->getEntreprise();
        $mot_de_passe=$utilisateur->getMotDePasse();
		$datas = array(':idUtilisateurn'=>$idUtilisateurn, ':idUtilisateur'=>$idUtilisateur, ':nom'=>$nom,':nom_restaurant'=>$nom_restaurant,':type'=>$type,':description'=>$description);
		$req->bindValue(':idUtilisateurn',$idUtilisateurn);
		$req->bindValue(':idUtilisateur',$idUtilisateur);
		$req->bindValue(':type_utilisateur',$type_utilisateur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date_naissance',$date_naissance);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':entreprise',$entreprise);
		$req->bindValue(':mot_de_passe',$mot_de_passe);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
	function recupererUtilisateur($idUtilisateur){
		$sql="SELECT * from utilisateur where idUtilisateur=$idUtilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeUtilisateurs($type_utilisateur){
		$sql="SELECT * from utilisateur where type_utilisateur=$type_utilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public function  getutilisateur()
	{
		try{
			$c = new config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM utilisateur ');
			$stmt->execute();
			//$produits=$stmt->fetchAll();
			//var_dump($produits);
			return $stmt;
		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}
}

?>
