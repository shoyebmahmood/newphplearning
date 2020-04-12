<?php
class mySimpleClass
{
    public $name;
    function __construct($username)
    {
        $this->name = $username;
    }
}
$person1 = new mySimpleClass('John Doe');
$person2 = new mySimpleClass('Jane Doe');
echo $person1->name; //prints John Doe
echo PHP_EOL;
echo $person2->name; //prints Jane Doe