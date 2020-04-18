<?php
require_once 'vehicle1.php';

class Car extends Vehicle
{
    public $doors = 4;
    public $passengerCapacity = 5;
    public $steeringWheel = true;
    public $transmission = 'Manual';
}
$car = new Car('Honda', 'Civic', 'Red', 4, '23CJ4567');
echo "Vehicle type " . get_class($car) . PHP_EOL;
echo "Make: " . $car->getMake() . PHP_EOL;
echo "Model: " . $car->getModel() . PHP_EOL;
echo "Color: " . $car->getColor() . PHP_EOL;
echo "No of wheels: " . $car->getNoOfWheels() . PHP_EOL;
echo "Engine No: " . $car->getEngineNumber() . PHP_EOL;
echo "Car doors: " . $car->doors . PHP_EOL;
echo "Passenger Capacity: " . $car->passengerCapacity . PHP_EOL;
echo "Steering Wheel: " . $car->steeringWheel . PHP_EOL;
echo "Transmission: " . $car->transmission . PHP_EOL;