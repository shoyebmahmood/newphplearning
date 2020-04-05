<?php
$number = 1;
while ($number <= 10) {
    echo $number . " " . PHP_EOL;
    if ($number === 8) {
        echo "end of the loop";
        break;
    }
    $number++;
}