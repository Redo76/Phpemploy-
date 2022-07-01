<?php
require_once("Employe.php");

$employe1 = new Employe("Camacho", "Denise","2019-07-13","employé", 1800, "Commercial");
$employe2 = new Employe("Cortes", "Alyssa ","2018-04-13","employé", 1800, "Commercial");
$employe3 = new Employe("Terrell", "Dustin","2020-01-10","employé", 1800, "Commercial");
$employe4 = new Employe("Oconnor", "Omari ","2017-01-01","employé", 1800, "Commercial");
$employe5 = new Employe("Knox", "Brook ","2019-12-23","employé", 1800, "Commercial");

$employes = array($employe1, $employe2, $employe3, $employe4, $employe5);

foreach ($employes as $employe) {
    print $employe->ordreTransfert();
    echo "<br>";
}

print $employe1->dureeEnEntreprise();
echo "<br>";
print $employe1->getprime();
