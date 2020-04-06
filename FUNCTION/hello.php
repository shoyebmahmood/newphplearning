<?php
echo substr('Hello World', 0, 5);
echo PHP_EOL;
echo substr('Hello World', 5);
echo PHP_EOL;
echo substr('Hello World', -4, 3);
echo PHP_EOL;
class dog
{
    public function __invoke()
    {
        echo 'Bark';
    }
}
$Sparky = new dog();
$Sparky;