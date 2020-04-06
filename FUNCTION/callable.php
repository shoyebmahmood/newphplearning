<?php
class Nuuha
{
    public function __invoke()
    {
        echo "Hi Baba";
    }
}
$Prottush = new Nuuha();
$Prottush();
echo PHP_EOL;
function foo()
{
}
echo is_callable('foo') ? '"foo" is callable' : '"foo" is NOT a callable', PHP_EOL;