<?php
//visibility control
class visibility
{
    public $name = 'Shoyeb Mahmood';
    private $account = 50000;
    protected $land = '100 acre';
}
$obj = new visibility;
echo $obj->name;