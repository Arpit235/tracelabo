<?PHP
class Utilisateur{
	private $idUtilisateur;
	private $type_utilisateur;
	private $nom;
	private $login;
	private $mot_de_passe;
	function __construct($z4_code,$z4_filial,$z4_utiliza,$z4_login,$z4_motpass){
		$this->idUtilisateur=$z4_code;
		$this->type_utilisateur=$z4_filial;
		$this->nom=$z4_utiliza;
		$this->login=$z4_login;
		$this->mot_de_passe=$z4_motpass;
	}
	
	function getIdUtilisateur(){
		return $this->idUtilisateur;
	}
	function getTypeUtilisateur(){
		return $this->type_utilisateur;
	}
	function getNom(){
		return $this->nom;
	}


	function getLogin(){
		return $this->login;
	}

	function getMotDePasse(){
		return $this->mot_de_passe;
	}

	function setTypeUtilisateur($z4_filial){
		$this->type_utilisateur=$z4_filial;
	}
	function setNom($nom){
		$this->nom=$nom;
	}

	function setLogin($login){
		$this->login=$login;
	}

	function setMotDePasse($z4_motpass){
		$this->mot_de_passe=$z4_motpass;
	}
	
}

?>