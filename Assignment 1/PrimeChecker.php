<?php

// http://localhost/Assignment%201/PrimeChecker.php



$num = 17;
$prime = true;

if ($num < 2) {
    $prime = false;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $prime = false;
        break;
    }
}

if ($prime) {
    echo $num . " is prime.";
} else {
    echo $num . " is not prime.";
}

?>