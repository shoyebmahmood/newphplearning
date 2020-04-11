<?php


class oopPartOne
{
    public $name = "Shoyeb Mahmod";
    public function age()
    {
        return $this->name;
    }
}

$obj = new oopPartOne;
//echo $obj->name;
echo PHP_EOL;
echo $obj->age();