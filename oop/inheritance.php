<?php
class MySimpleClass
{
    public $propertyName = 'base property';
    function methodName()
    {
        echo 'I am a base method. ';
    }
}
class MyNewClass extends MySimpleClass
{
    //class body
}
$object = new MyNewClass();
$object->propertyName; //holds, 'base property'
$object->methodName(); //prints, 'I am a base method. '


;