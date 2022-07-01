<?php

class Employe {
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $poste;
    private $salaire;
    private $service;
    
    public function __construct($nom,$prenom,$dateEmbauche,$poste,$salaire,$service ) { 
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->poste = $poste;
        $this->salaire = $salaire;
        $this->service = $service;
    }

    public function dureeEnEntreprise(){
        $date1 = new Datetime($this->dateEmbauche);
        $date2 = new DateTime();

        $dateDiff = $date2->diff($date1)->format("%y");

        return intval($dateDiff);
    }

    public function getprime(){
        $duree = $this->dureeEnEntreprise();
        $primeBase = $this->salaire * 0.05;

        $primeAncien = ($this->salaire * 0.02) * $duree;

        return $primeBase + $primeAncien;
    }


    public function getNomComplet(){
        return $this->nom . " " . $this->prenom;
    }

    public function ordreTransfert(){
        $jourPrime = date("d/m");
        $jourPrime = "30/11";
        if ($jourPrime == "30/11") {
            $transfert = $this->getNomComplet() . ", le transfert de votre prime s'élevant à " . $this->getprime() . " € " . "a été envoyé à la banque";
            return $transfert;
        }
        return $transfert = "Pas de transfert";
    }
}






