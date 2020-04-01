<?php
//associative array
$name = ['shoyeb', 'nuuha', 'prottush', 'kaniz'];
print_r($name);
echo PHP_EOL;
$heroInfo = [
    [
        'heroName' => 'Spiderman',
        'weapon' => 'spider web',
    ],
    [
        'heroName' => 'Captain America',
        'weapon' => 'Shield',
    ],
    [
        'heroName' => 'Thor',
        'weapon' => 'Hammer',
    ]
];

print_r($heroInfo);
echo PHP_EOL;
echo 'The weapon of choice of ' . $heroInfo[0]['heroName'] . ' is ' . $heroInfo[0]['weapon'];
echo PHP_EOL;
echo 'The weapon of choice of ' . $heroInfo[1]['heroName'] . ' is ' . $heroInfo[1]['weapon'];
echo PHP_EOL;
echo $heroInfo[2]['heroName'] . ' likes ' . $heroInfo[2]['weapon'];
echo PHP_EOL;
echo $heroInfo[2]['heroName'] . ' and ' . $heroInfo[1]['heroName'] . ' like ' . $heroInfo[2]['weapon'] . ' and ' . $heroInfo[1]['weapon'];