<?php

// http://localhost/Assignment%201/LCMCalculator.php



$num1 = 8;
$num2 = 12;

$lcm = 1;

while ($lcm % $num1 != 0 || $lcm % $num2 != 0) {
    $lcm++;
}

echo "LCM: " . $lcm;

?>