<?php
class oopConstant
{
    const PI = 3.14;
    function piValue()
    { //INSTEAD OF USING $this operator USE self AND INSTED OF USING -> use:: scope resolution
        return self::PI;
    }
}
echo oopConstant::PI;
echo PHP_EOL;
$obj = new oopConstant;
echo $obj->piValue();