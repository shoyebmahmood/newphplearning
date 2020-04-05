<?php
$professions = ["Doctor", "Teacher", "Lawyer", "Programmer", " Athlete"];
$subjects = ["Mathematica", "Computer Programming", "Buissiness Engilsh"];
foreach ($professions as $profession) {
    echo "The profession is $profession." . PHP_EOL;
    if ($profession == "Teacher") {
        foreach ($subjects as $name) {
            echo "$name" . PHP_EOL;
        }
    }
}