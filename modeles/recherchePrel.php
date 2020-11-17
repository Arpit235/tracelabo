<?PHP
include "config.php";

function rechercherPrelevements($num_lot) {
    $sql="SELECT z0_filial,code_marche,num_lot,date_prelevement,code_labo FROM sz0010 WHERE num_lot='$num_lot'";
    $db=config::getConnexion();
    try {
        $liste=$db->query($sql);
        return $liste;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

?>