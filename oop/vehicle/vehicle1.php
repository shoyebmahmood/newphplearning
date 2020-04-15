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
    function getnoOfWheels()
    {
        return $this->noOfWheel;
    }
    function getEngineNumber()
    {
        return $this->engineNumber;
    }
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
    function setnoOfWheels($wheels)
    {
        $this->noOfWheels = $wheels;
    }
    function setEngineNumber($engineNo)
    {
        $this->engineNumber = $engineNo;
    }
}