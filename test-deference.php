<?php
$a = 3;
$b = 8;
if ($a - $b) {
    if ($a > $b) {
        $difference = ($a - $b);
    } else {
        $difference = ($b - $a);
    }
    print("Difference is $difference");
} else {
    print("The numbers are equal");
}