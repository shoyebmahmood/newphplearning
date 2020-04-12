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
echo PHP_EOL;
class test
{
    public $name;
    public function __construct($username)
    {
        $this->name = $username;
    }
}
$obj1 = new test('Shoyeb Mahmood');
$obj2 = new test('Prottush');
echo $obj1->name;
echo PHP_EOL;
echo $obj2->name;
echo PHP_EOL;
//destructor method;
class Person
{
    function __destruct()
    {
        echo " The ohject has been removed.";
    }
}
$obj = new Person;
//if we use  unset() the object handler variable to destroy the object instance, as follows, the destructor should be called automatically:
//unset($Person);

//Also, the destructor method is invoked automatically if no object is found in the memory, as follows:
$obj == NULL;