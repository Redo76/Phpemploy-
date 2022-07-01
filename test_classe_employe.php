<?php
require_once("Employe.php");

$employe1 = new Employe("Camacho", "Denise","2019-07-13","employé", 18, "Commercial");
$employe4 = new Employe("Oconnor", "Omari ","2017-01-01","employé", 10, "Commercial");
$employe2 = new Employe("Camacho", "Alyssa ","2018-04-13","employé", 17, "Commercial");
$employe3 = new Employe("Terrell", "Dustin","2020-01-10","employé", 13, "Developpeur");
$employe5 = new Employe("Knox", "Brook ","2019-12-23","employé", 13, "RH");

$employes = array($employe1, $employe2, $employe3, $employe4, $employe5);

$masseSalariale = 0;

// function sortEmploye($a, $b){
//     if ($a == $b) {
//         return 0;
//     }
//     return ($a < $b) ? -1 : 1;
// }

// usort($employes, "sortEmploye");

foreach ($employes as $employe) {
    $masseSalariale += $employe->getprime() + $employe->getSalaire();
    print $employe->ordreTransfert();
    echo "<br><br>";
    var_dump($masseSalariale);


}



print "L'entreprise contient " . count($employes) . " employés";
echo "<br>";
print $employe1->dureeEnEntreprise()." ans";
echo "<br>";
print $employe1->getPrime() . " €";
