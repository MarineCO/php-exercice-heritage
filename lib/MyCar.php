<?php

class MyCar extends Car {

	public function __construct($nbWheels, $name, $km, $available, $available2, $nbDoor) {
		parent::setWheels($nbWheels);
		parent::setManufacturer($name);
		parent::setKilometrage($km);
		parent::setAirbag($available);
		parent::setAbs($available2);
		parent::setDoors($nbDoor);
	}
}