<?php
$a = 15;
$callable = function () use ($a) {
    return $a;
};
$a = 'different';
echo $callable();
//RETURN 15
echo PHP_EOL;
$num = 15;
$callable = function () use (&$num) {
    return $num;
};
$num = "Shoyeb";
//with use keyword we assign & operator so result will be different
echo $callable();
