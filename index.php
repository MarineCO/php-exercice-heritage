<?php
	require 'lib/Car.php';
	require 'lib/MyCar.php';

	$car = new MyCar('4', 'Tesla', '5000', 'true', 'true', '5');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voiture</title>
</head>
<body>
	<h1>My Car</h1>
	<p><?= $car->getWheels() ?></p>
	<p><?= $car->getManufacturer() ?></p>
	<p><?= $car->getKilometrage() ?></p>
	<p><?= $car->getAirbag() ?></p>
	<p><?= $car->getAbs() ?></p>
	<p><?= $car->getDoors() ?></p>
	
</body>
</html>