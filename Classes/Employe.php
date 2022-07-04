<?php

class Employe {
    public string $nom;
    public string $prenom;
    public string $dateEmbauche;
    public string $poste;
    public int $salaire;
    public string $service;
    public Agence $agence;
    public array $enfants;
    
    public function __construct($nom,$prenom,$dateEmbauche,$poste,$salaire,$service,$agence, $enfants) { 
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->poste = $poste;
        $this->salaire = $salaire;
        $this->service = $service;
        $this->agence = $agence;
        $this->enfants = $enfants;
    }

    public function dureeEnEntreprise(){
        $date1 = new Datetime($this->dateEmbauche);
        $date2 = new DateTime();

        $dateDiff = $date2->diff($date1)->format("%y");

        return intval($dateDiff);
    }

    public function getSalaire(){
        return $this->salaire;
    }
    public function getService(){
        return $this->service;
    }

    public function getAgence(){
        return $this->agence;
    }

    public function getPrime(){
        $duree = $this->dureeEnEntreprise();
        $primeBase = $this->salaire * 1000 * 0.05;

        $primeAncien = ($this->salaire * 1000 * 0.02) * $duree;

        return $primeBase + $primeAncien;
    }

    public function trierNom(){
        $nomEmployes = array($this->nom, $this->prenom);
        function comparaison($a,$b){
            if ($a == $b) {
                return 0;
            }
            return ($a > $b) ? 1 : -1;
        }
        usort($nomEmployes, "comparaison");
    }


    public function getNom(){
        return $this->nom;
    }

    public function getNomPrenom(){
        return $this->prenom;
    }

    public function getNomComplet(){
        return $this->nom . " " . $this->prenom;
    }

    public function ordreTransfert(){
        $jourPrime = date("d/m");
        $jourPrime = "30/11";
        if ($jourPrime == "30/11") {
            $transfert = $this->getNomComplet() . ", le transfert de votre prime s'élevant à " . $this->getPrime()  . " € " . "a été envoyé à la banque, poste : " . $this->getService();
            return $transfert;
        }
        return $transfert = "Pas de transfert";
    }

    public function verifCheques(){
        if ($this->dureeEnEntreprise() > 1) {
            return true;
        }
        return false;
    }

    public function chequesNoel(){
        var_dump($this->enfants);
        if (empty($this->enfants) || !$this->verifCheques()) {
            return false;
        }
        else{
            $cheques = array();

            foreach ($this->enfants as $enfant) {
                var_dump($enfant);
                if ($enfant >= 0 && $enfant <= 10) {
                    array_push($cheques, 20);
                }
                elseif ($enfant >= 11 && $enfant <= 15) {
                    array_push($cheques, 30);
                }
                elseif ($enfant >= 16 && $enfant <= 18) {
                    array_push($cheques, 50);
                }
                else{
                    array_push($cheques, 0);
                }
            }
            
            var_dump($cheques);
            return $cheques;
        }
    }
}