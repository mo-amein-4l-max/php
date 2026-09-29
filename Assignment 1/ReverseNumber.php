<?php

// http://localhost/Assignment%201/ReverseNumber.php


$num = 12345;
$reverse = 0;

for (; $num > 0; $num = (int)($num / 10)) {
    $digit = $num % 10;
    $reverse = $reverse * 10 + $digit;
}

echo "Reverse: " . $reverse;

?>