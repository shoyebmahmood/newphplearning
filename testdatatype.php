<?php
$data = 2.50;
switch (gettype($data)) {
    case 'integer';
    case 'double';
        echo " The data type is Number";
        break;
    case 'boolean';
        echo " The data type is boolean";
        break;
    case 'string';
        echo " the data type is string";
        break;
    case 'array';
        echo " the data type is array";
    default;
        echo " the data is not any file type";
}