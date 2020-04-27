<?php
require_once 'vehicle1.php';
$vehicle = new Vehicle();
echo "Make : " . $vehicle->make . PHP_EOL;
echo "Moedel: " . $vehicle->model . PHP_EOL;
echo "Color: " . $vehicle->color . PHP_EOL;
//echo "No of Wheels " . $vehicle->noOfWheels . PHP_EOL;
echo "No of Wheels " . $vehicle->getNoOfWheels() . PHP_EOL;
//echo "Engine No: " . $vehicle->engineNumber . PHP_EOL;
echo "Engine No: " . $vehicle->getEngineNumber() . PHP_EOL;