<?php
// %d expects a number, while %s accepts anything that can be cast to a string.
$format = "You have used the maximum amount of %d credits you are allowed to spend in a %s. You will have to wait %d days before new credits become available.";

printf($format, 1000, 'month', 9);