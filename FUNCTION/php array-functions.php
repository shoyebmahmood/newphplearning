<?<?php 
$signal = ['Red', 'Green', 'Blue'];
print_r($signal);
echo PHP_EOL;
//reverse the array
$reverse=array_reverse($signal);

print_r($reverse);
echo PHP_EOL;
print_r($signal);
echo PHP_EOL;
$reversed = array_reverse($signal, $preserve_keys = true);
print_r($reversed);
echo PHP_EOL;
$streets=[
    'sadarroad',
    'banglabazar',
    'BM College Road',
    'C & B Road'
];
sort($streets, SORT_STRING | SORT_FLAG_CASE);
print_r($streets);




; ?>