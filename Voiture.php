<?php

class Car {
	/* Propriétés */
	
	private $motorisation="";
	private $nbkms=200;
	
	public function __construct($motorisation="",$nbkms="") {
		$this->motorisation=$motorisation;
		$this->nbkms=$nbkms;
	}
	
	/* méthodes */
	
	public function rouler($nbkmsparcourus=0) {
		$this->nbkms+=$nbkmsparcourus;
	}
	
	public function getMotorisation() {
			return $this->motorisation;
	}
	
	public function setMotorisation($motorisation="") {
			$this->motorisation=$motorisation;
	}
	
	public function getNbkms() {
		return $this->nbkms;
	}
	
	
}


?>