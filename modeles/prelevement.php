<?php


class prelevement
{
    private $z0_filial;
    private $code_marche;
    private $num_lot;
    private $designation_lot;
    private $date_prelevement;
    private $heure;
    private $code_labo;
    private $unite_labo;
    function __construct($z0_filial,$z0_marche,$z0_prelev,$z0_design,$z0_date,$z0_heure,$z0_codelabo,$z0_unilabo){
        $this->z0_filial=$z0_filial;
        $this->code_marche=$z0_marche;
        $this->num_lot=$z0_prelev;
        $this->designation_lot=$z0_design;
        $this->date_prelevement=$z0_date;
        $this->heure=$z0_heure;
        $this->code_labo=$z0_codelabo;
        $this->unite_labo=$z0_unilabo;
    }

    function getZ0Filial(){
        return $this->z0_filial;
    }
    function getCodeMarche(){
        return $this->code_marche;
    }
    function getNumLot(){
        return $this->num_lot;
    }
    function getDesignationLot(){
        return $this->designation_lot;
    }
    function getDatePrelevement(){
        return $this->date_prelevement;
    }
    function getHeure(){
        return $this->heure;
    }
    function getCodeLabo(){
        return $this->code_labo;
    }
    function getUniteLabo(){
        return $this->unite_labo;
    }


    function setCodeMarche($z0_marche){
        $this->code_marche=$z0_marche;
    }
    function setNumLot($z0_prelev){
        $this->num_lot=$z0_prelev;
    }
    function setDesignationLot($z0_design){
        $this->designation_lot=$z0_design;
    }
    function setDatePrelevement($z0_date){
        $this->date_prelevement=$z0_date;
    }
    function setHeure($z0_heure){
        $this->heure=$z0_heure;
    }
    function setMotDePasse($z0_codelabo){
        $this->mot_de_passe=$z0_codelabo;
    }

    function setUniteLabo($z0_unilabo){
        $this->unite_labo=$z0_unilabo;
    }


}

?>