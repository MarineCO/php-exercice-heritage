<?php
	require 'lib/Car.php';
	require 'lib/MyCar.php';

	$car = new MyCar('5', 'Tesla', '5000', 'true', 'true', '5');

	//récupération des inputs

	$wheels = $_POST['wheels'];
	$manufacturer = $_POST['manufacturer'];
	$km = $_POST['km'];
	$airbag = $_POST['airbag'];
	$abs = $_POST['abs'];
	$doors = $_POST['doors'];


	/* Modification des propriétés grâce aux setters précédemment créés pour affichage du contenu des inputs, le tout sans nouvelle instanciation */

	if ($car) {
		$car->setWheels($wheels);
	}
	if ($car) {
		$car->setManufacturer($manufacturer);
	}
	if ($car) {
		$car->setKilometrage($km);
	}
	if ($car) {
		$car->setAirbag($airbag);
	}
	if ($car) {
		$car->setAbs($abs);
	}
	if ($car) {
		$car->setDoors($doors);
	}

	// $car = new MyCar($wheels, $manufacturer, $km, $airbag, $abs, $doors);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Voiture</title>
</head>
<body>
	<h1>My Car</h1>

	<form method="POST" action="index.php">
		
		<label for="wheels">Nombre de roue</label>
		<input id="wheels" name="wheels" type="text">

		<label for="manufacturer">Marque</label>
		<input id="manufacturer" name="manufacturer" type="text">

		<label for="km">Kilométrage</label>
		<input id="km" name="km" type="text">

		<select name="airbag" id="airbag">
				<option value="Avec airbag">Avec Airbag</option>
				<option value="Sans airbag">Sans Airbag</option>
		</select>

		<select name="abs" id="abs">
				<option value="Avec abs">Avec Abs</option>
				<option value="Sans abs">Sans Abs</option>
		</select>

		<label for="doors">Nombre de portes</label>
		<input id="doors" name="doors" type="text">

		<input type="submit" value="Valider">

	</form>

	<p><?= $car->getWheels() ?></p>
	<p><?= $car->getManufacturer() ?></p>
	<p><?= $car->getKilometrage() ?></p>
	<p><?= $car->getAirbag() ?></p>
	<p><?= $car->getAbs() ?></p>
	<p><?= $car->getDoors() ?></p>

	
</body>
</html>