<?php
for ($number = 1; $number <= 10; ++$number) {
    if ($number == 8) {
        continue;
    }
    print $number . PHP_EOL;
}