<style>
body {
    background: black;
    color: green;
</style>
}
<center><?php
        for ($x = 1; $x <= 15; $x++) {
            for ($y = 1; $y <= $x; $y++) {
                echo "* ";
            }
            //echo PHP_EOL;
            echo "<br>";
        }
        for ($x = 1; $x <= 5; $x++) {
            echo "****" . "<br>";
        }
        ?>
</center>