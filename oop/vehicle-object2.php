<?php
require 'vehicle-object1.php';
$vehicle = new machine();
echo "Make: " . $vehicle->getMake() . PHP_EOL;
echo "Model: " . $vehicle->getmodel() . PHP_EOL;