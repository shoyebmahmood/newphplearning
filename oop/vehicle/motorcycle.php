<?php
require_once 'vehicle1.php';
class Motorcycle extends Vehicle
{
    public $noOfWheels = 2;
    public $stroke = 2;
}
$motorCycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');

echo "Vehicle Type: " . get_class($motorCycle) . PHP_EOL;
echo " Make: " . $motorCycle->make . PHP_EOL;
echo " Model: " . $motorCycle->model . PHP_EOL;
echo " Color: " . $motorCycle->color . PHP_EOL;
echo " No of wheels: " . $motorCycle->noOfWheels . PHP_EOL;
echo " No of strokes: " . $motorCycle->stroke . PHP_EOL;