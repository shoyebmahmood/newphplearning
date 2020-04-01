<?php
echo "assignment by value";
echo "<br>";
$animal1 = "Cat";
$animal2 = $animal1;
echo $animal1 . " - " . $animal2;
echo "<br>";
$animal2 = "rat";

echo $animal2 . " - " . $animal1;