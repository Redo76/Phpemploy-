<?php
	require_once("Voiture.php");
	
	$car1=new Car("diesel",300);
	
	$car2= new Car("essence",400);
	
	print $car1->getNbkms();
	echo "<br>";
	$car1->rouler(50);
	print $car1->getNbkms();
	echo "<br>";
	//$car1->setMotorisation("essence");
	print $car1->getMotorisation();
	//print_r($car2);
	
	
	
	

?>