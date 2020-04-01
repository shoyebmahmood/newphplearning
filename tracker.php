<?php
$name = "Joe";
$weightkg = 63;
$heightcm = 170.688;
$heightmeter = $heightcm / 100;
echo "Height of " . $name . " is " . $heightmeter . " meter.";
echo PHP_EOL;
$squaremeter = ($heightmeter * $heightmeter);
$bmi = $weightkg / $squaremeter;
echo "Hello " . $name . " your BMI is " . $bmi;