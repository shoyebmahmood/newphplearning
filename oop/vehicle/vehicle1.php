<?php
//declare the Vehicle class
class Vehicle
{
    /* public $make = 'DefaultMake';
    public $model = 'DefaultModel';
    public $color = 'DefaultColor';
    public $noOfWheels = 4;
    public $engineNumber = 'xxxxxxx';
    */
    public $make;
    public $model;
    public $color;
    public $noOfWheels;
    public $engineNumber;
    function __construct($make = 'DefaultMake', $model = 'DefaultModel', $color = 'DefaultColor', $wheels = 4, $engineNo = 'xxxxxx')
    {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->noOfWheels = $wheels;
        $this->engineNumber = $engineNo;
    }
    //add the following five methods after the attributes section
    /*
    *Here, we have added five getter methods: getMake() returns the company name/make, **getModel() returns the model name, getColor() returns the color name, ***getNoOfWheels() returns the number of wheels the vehicle has, and ****getEngineNumber() returns the engine number. All of these methods are pretty *****straightforward to execute, and they access the attributes using $this to ******return the values.
    */
    function getMake()
    {
        return $this->make;
    }
    function getModel()
    {
        return $this->model;
    }
    function getColor()
    {
        return $this->color;
    }
    function getNoOfWheels()
    {
        return $this->noOfWheels;
    }
    function getEngineNumber()
    {
        return $this->engineNumber;
    }
    /*
    *tO Set the vehicle make, model, color, number of wheels, and engine number, we **need setter methods. Now, let's add the corresponding setter methods after the ***preceding five getters:
    */
    function setMake($make)
    {
        $this->make = $make;
    }
    function setModel($model)
    {
        $this->model = $model;
    }
    function setColor($color)
    {
        $this->color = $color;
    }
    function setNoOfWheels($wheel)
    {
        $this->noOfWheels = $wheel;
    }
    function setEngineNumber($engineNo)
    {
        $this->engineNumber = $engineNo;
    }
}
/*
Now, let's instantiate the class as follows
$object = new Vehicle;
//*Set the class attributes using the setter methods, as follows:
$object->setMake('Honda');
$object->setModel('Civic');
$object->setColor('Blue');
$object->setNoOfWheels(4);
$object->setEngineNumber('ABCD1234');

//*to access the data stored in the Vehicle object handler, $object, we need to //**use*getter methods, as in the following:

echo "Make: " . $object->getMake() . PHP_EOL;
echo "Model: " . $object->getModel() . PHP_EOL;
echo "Color: " . $object->getColor() . PHP_EOL;
echo "Number of Wheels: " . $object->getNoOfWheels() . PHP_EOL;
echo "Engine Number: " . $object->getEngineNumber() . PHP_EOL;
*/