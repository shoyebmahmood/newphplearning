<?php
require_once 'vehicle1.php';


$vehicle = new Vehicle();
echo "Make: " . $vehicle->make . PHP_EOL;
echo "Model: " . $vehicle->model . PHP_EOL;
echo "Color: " . $vehicle->color . PHP_EOL;
echo "No of wheels: " . $vehicle->noOfWheel . PHP_EOL;
echo "Engine No: " . $vehicle->engineNumber . PHP_EOL;

$vehicle1 = new Vehicle('Honda', 'Civic', 'Red', 4, '23CJ4567');
echo "Make: " . $vehicle1->getMake() . PHP_EOL;
echo "Model: " . $vehicle1->getModel() . PHP_EOL;
echo "Color: " . $vehicle1->getColor() . PHP_EOL;
echo "No of wheels: " . $vehicle1->getNoOfWheels() . PHP_EOL;
echo "Engine No: " . $vehicle1->getEngineNumber() . PHP_EOL;