<?php

class Agence{
    public string $nom;
    public string $adresse;
    public int $codePostal;
    public string $ville;
    public string $restaurant;

    public function __construct($nom, $adresse, $codePostal, $ville, $restaurant){
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->restaurant = $restaurant;
    }

    public function modeRestauration(){
        return $this->restaurant;
    }

}
