<?php
//declare global count variable
$count = 0;
/*
* THIS FUNCTION INCREMENTS THE GLOBAL
*$count VARIABLE EACH TIME IT CALLED
*/
function countMe()
{
    $GLOBALS['count']++;
}
// call the function countMe once
countMe();
//and twice
countMe();
//print global $count
echo $count;
echo PHP_EOL;
function [identifier] ([[typeHint][…] [&]$parameter1[…][= defaultValue]][, [&]$p2, ..$pn]])[: [?]returnType|void]
{
    // function body, any number of statements
    [global $someVariable [, $andAnother]] // bad idea, but possible
    [return something;]
}
//The function keyword tells the PHP parser that what comes next is a function.
//The identifier represents the name of the function.
// type hinting is used to specify the expected data type of an argument.
// Like function createOutOfCreditsWarning(int $maxCredits, string $period, int $waitDays)
//The spread operator (…) is optional and indicates that the parameter has to be an array that only contains elements of the hinted type
//