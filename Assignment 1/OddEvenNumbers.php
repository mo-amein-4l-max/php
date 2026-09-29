<?php

// http://localhost/Assignment%201/OddEvenNumbers.php


echo "Odd numbers between 2 and 20: <br>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br>";
echo "<br>";


echo "Even numbers between 35 and 7: <br>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

?>