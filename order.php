<?php
$str = "Your order is : ";
$order = 20;
$additional = 5;
$totalOrder = 0;
//boolean . default false
$complete = false;
//Add additional iteam to order
$totalOrder = $order + $additional;
if ($totalOrder >= 25) {
    //change complete to true in order to finish order
    $complete = true;
    //display total order
    echo $str . $totalOrder;
}