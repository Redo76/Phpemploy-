<?php 

require_once("./Classes/Employe.php");

class Directeur extends Employe{
    
    public function getPrimeDir(){
        $duree = $this->dureeEnEntreprise();
        $primeBase = $this->salaire * 1000 * 0.07;

        $primeAncien = ($this->salaire * 1000 * 0.03) * $duree;

        return $primeBase + $primeAncien;
    }

    public function ordreTransfert(){
        $jourPrime = date("d/m");
        $jourPrime = "30/11";
        if ($jourPrime == "30/11") {
            $transfert = $this->getNomComplet() . ", le transfert de votre prime s'élevant à " . $this->getPrimeDir()  . " € " . "a été envoyé à la banque, poste : " . $this->getService();
            return $transfert;
        }
        return $transfert = "Pas de transfert";
    }
}
