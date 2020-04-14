<?php
class machine
{
    public $make;
    public $model;
    public $color;
    public $noOfWheels;
    public $engineNumber;
    function __construct(
        $make = 'DefaultMake',
        $model = 'DefaultModel',
        $color = 'DefaultColor',
        $wheels = 4,
        $engineNo = 'XXXXXXXX'
    ) {
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->noOfWheels = $wheels;
        $this->engineNumber = $engineNo;
    }
}
