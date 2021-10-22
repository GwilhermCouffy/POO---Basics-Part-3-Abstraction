<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

/*
//on s'occupe du vélo
$bike = new Bicycle("blue", 1);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


//on passe à la voiture
$twingo = new Car("red", 4, "fuel");

echo $twingo->start() . '<br>';

echo $twingo->forward();
echo '<br> Vitesse du véhicule : ' . $twingo->getCurrentSpeed() . ' km/h' . '<br>';
echo $twingo->brake();
echo '<br> Vitesse du véhicule : ' . $twingo->getCurrentSpeed() . ' km/h' . '<br>';
echo $twingo->brake();


//var_dump(Car::ALLOWED_ENERGIES);

//et maintenant le gros camion
$grosCamion = new Truck("pink", 3, "fuel", 1);


$grosCamion->setChargement(1);
echo '</br></br>currently, the truck is: ' . $grosCamion->isEmpty() . '<br>';

echo $grosCamion->forward();
echo '<br> Vitesse du Camion : ' . $grosCamion->getCurrentSpeed() . ' km/h' . '<br>';
echo $grosCamion->brake();
echo '<br> Vitesse du Camion : ' . $grosCamion->getCurrentSpeed() . ' km/h' . '<br>';
echo $grosCamion->brake();
*/

$bike = new Bicycle("blue", 1);
$twingo = new Car("red", 4, "fuel");
$grosCamion = new Truck("pink", 3, "fuel", 1);

//on passe aux root
//tout marche sur les routes résidentielles !
$residentialWay = new ResidentialWay();
$residentialWay->addVehicle($twingo);
$residentialWay->addVehicle($grosCamion);
$residentialWay->addVehicle($bike);

var_dump($residentialWay->getCurrentVehicle());

//on ajoute une voiture et un camion sur l'autoroute, et ça ne marche pas avec le vélo
$motorWay = new MotorWay();
$motorWay->addVehicle($twingo);
$motorWay->addVehicle($grosCamion);
$motorWay->addVehicle($bike);

var_dump($motorWay->getCurrentVehicle());

//ici, seul les vélos peuvent rouler !
$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($grosCamion);
$pedestrianWay->addVehicle($twingo);

var_dump($pedestrianWay->getCurrentVehicle());

//echo $residentialWay->$currentVehicle[0];