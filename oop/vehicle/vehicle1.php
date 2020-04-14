<?php
class Vehicle
{
    public $make;
    public $model;
    public $color;
    public $noOfWheel;
    public $engineNumber;
    function __construct(
        $make = 'DefaultMake',
        $model = 'DefaultModel',
        $color = 'DefaultColor',
        $noOfWheels = 4,
        $engineNumber = 'xxxxxx'
    ) {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->noOfWheel = $noOfWheels;
        $this->engineNumber = $engineNumber;
    }
}