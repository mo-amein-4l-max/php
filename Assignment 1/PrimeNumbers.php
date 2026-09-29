<?php

// http://localhost/Assignment%201/PrimeNumbers.php




echo "Prime numbers between 10 and 50: <br>";
for ($num = 10; $num <= 50; $num++) {

    $prime = true;

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $prime = false;
            break;
        }
    }

    if ($prime) {

        echo  $num . " ";
    }
}

?>