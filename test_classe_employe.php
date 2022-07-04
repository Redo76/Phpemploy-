<?php
require_once("./classes/Employe.php");
require_once("./Classes/Agence.php");

$agence1 = new Agence("PremièreAgence", "AdresseAuPif", 77777, "villeAuPif","Restaurant d'entreprise");
$agence2 = new Agence("DeuxièmeAgence", "AdresseAuPif", 12345, "villeAuPif","Tickets Restaurants");

$employe1 = new Employe("Camacho", "Denise","2019-07-13","employé", 18, "Comptabilité", $agence1, [15,22,7]);
$employe2 = new Employe("Oconnor", "Omari ","2022-01-01","employé", 10, "Technicien", $agence2, [10,17]);
$employe3 = new Employe("Camacho", "Alyssa ","2018-04-13","employé", 17, "Commercial", $agence1, [12,0]);
$employe4 = new Employe("Terrell", "Dustin","2022-01-10","employé", 13, "Developpeur", $agence2, []);
$employe5 = new Employe("Knox", "Brook ","2019-12-23","employé", 13, "RH", $agence2, [4]);

$employes = array($employe1, $employe2, $employe3, $employe4, $employe5);

$masseSalariale = 0;

foreach ($employes as $employe) {
    $masseSalariale += $employe->getprime() + $employe->getSalaire() * 1000;
    print $employe->ordreTransfert();

    echo"<br>";

    print "Cette employé(e) se trouve dans l'agence " . $employe->getAgence()->nom ." et dispose du mode de restauration suivant : " . $employe->agence->modeRestauration();

    echo "<br>";

    $employe->verifCheques() ? 
    print "Cette employé(e) a le droit aux chèques vacances"
    :
    print "Cette employé(e) n'a pas le droit aux chèques vacances";

    echo "<br>";

    if ($employe->chequesNoel()) {
        foreach ($employe->chequesNoel() as $cheque) {
            if ($cheque == 0) {
                $cheque = "Pas de cheque";
            } 
            print $cheque;
            echo "<br>";
        }
    }
    else{
        print "";
    }

    echo "<br><br>";
}


// Trier par ordre alphabétique sur le nom et le prénom
// array_multisort(array_column($employes, "nom"),SORT_ASC, array_column($employes , "prenom"), SORT_ASC, $employes);

// Trier par ordre alphabétique de service, nom et prénom
array_multisort(array_column($employes, "service"),SORT_ASC,array_column($employes, "nom"),SORT_ASC, array_column($employes , "prenom"), SORT_ASC, $employes);


$employe1->chequesNoel();
echo "<br>";



print "L'entreprise contient " . count($employes) . " employés";
echo "<br>";
print "Le montant de la masse salariale est de " . $masseSalariale . " €";
echo "<br>";
print $employe1->dureeEnEntreprise()." ans";
echo "<br>";
print $employe1->getPrime() . " €";
