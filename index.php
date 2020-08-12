<?php

include_once __DIR__ . '/vendor/autoload.php'; 
// use \External\Car as Car2; // w przypadku klasy o takiej samej nazwie uĹĽywamy alias 
use \phpWzorce\Game\Race; 
use \phpWzorce\Game\Weather; 
use \phpWzorce\Game\VehicleFactory; 
use phpWzorce\Game\VehicleBuilder; 
use phpWzorce\Game\ShinyCar; 
$builder = new VehicleBuilder(); 

$weather = Weather::getInstance(); 


echo 'tutaj trzy';

$race = new Race($weather); 

$builder->setType(VehicleBuilder::CAR); 
$builder->setName('Jaguar');
$race->addVehicle(new ShinyCar($builder->build())); 

$builder->setName('Syrena');
$race->addVehicle($builder->build()); 

$builder->setName('Reno');
$race->addVehicle($builder->build()); 

$builder->setType(VehicleBuilder::TRUCK); 
$builder->setName('Mercedes');
$race->addVehicle($builder->build()); 


$builder->setType(VehicleBuilder::MOTOR); 
$builder->setName('Junak');
$race->addVehicle($builder->build()); 
$builder->setName('Honda');
$race->addVehicle($builder->build()); 

$race->run();
echo'<br>';


/*
use \phpWzorce\Speed; 
use \phpWzorce\Cab; 

$speed = new Speed(5.2); 
$cab = new Cab('Syrena', 'Fokus', $speed); 
$car = new Car('Ford', 'Mondeo', $speed); 

//$cab->drive(); 
//$car->drive();
echo 'Car color:' . $car->getColor() ."\n<br>"; 
echo 'Cab color:' . $cab->getColor() ."\n<br>"; 


$car->test('a', 'b', 4);

$car->sits = 4; 
echo 'Sits: ' . $car->sits . "<br>\n";
var_dump($car); 


echo 'color:' . $car->getColor() .'\n<br>'; 

echo 'Speed-to: ' . $car->getSpeed();

*/ 

