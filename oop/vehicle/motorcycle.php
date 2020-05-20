<?php
require_once 'AbstractVehicle.php';
require_once 'DriveInterface.php';
class Motorcycle extends AbstractVehicle implements DriveInterface
{
    public $noOfWheels = 2;
    public $stroke = 2;
    private $hasKey = true;
    private $hasKicked = true;
    public function start()
    {
        if ($this->hasKey && $this->hasKicked) {
            $this->engineStatus = true;
        }
    }
    public function changeSpeed($speed)
    {
        echo "The motorcycle has been accelerated to " . $speed . " kph. " . PHP_EOL;
    }
    public function changeGear($gear)
    {
        echo "Gear shifted to " . $gear . ". " . PHP_EOL;
    }
    public function applyBreak()
    {
        echo "The break applied. " . PHP_EOL;
    }
}
/*
$motorCycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');

echo "Vehicle Type: " . get_class($motorCycle) . PHP_EOL;
echo " Make: " . $motorCycle->make . PHP_EOL;
echo " Model: " . $motorCycle->model . PHP_EOL;
echo " Color: " . $motorCycle->color . PHP_EOL;
echo " No of wheels: " . $motorCycle->noOfWheels . PHP_EOL;
echo " No of strokes: " . $motorCycle->stroke . PHP_EOL;
*/
/*$motorcycle1 = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');
$motorcycle2 = new Motorcycle('Suzuki', 'Gixxer SF', 'Blue', 2, '53WVC14599');
$motorcycle2 = new Motorcycle('Harley Davidson', 'Street 750', 'Black', 2, '53WVC14234');
echo "Available motorcycles are " . Motorcycle::$counter . PHP_EOL;
*/
$motorcycle = new Motorcycle(
    'Kawasaki',
    'Ninja',
    'Orange',
    2,
    '53WVC14598'
);
$motorcycle->start();
echo "The motorcycle is " . ($motorcycle->getEngineStatus() ?
    'running' : 'stopped') . PHP_EOL;
$motorcycle->stop();
echo "The motorcycle is " . ($motorcycle->getEngineStatus() ?
    'running' : 'stopped') . PHP_EOL;
$motorcycle = new Motorcycle('Kawasaki', 'Ninja', 'Orange', 2, '53WVC14598');
$motorcycle->changeSpeed(45);
$motorcycle->changeGear(3);
$motorcycle->applyBreak();