<?php

// http://localhost/Assignment%201/DivisibilityChecker.php



$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo $num . " is divisible by both 3 and 5.";

} 
elseif ($num % 3 == 0) {
    echo "The numb  er is divisible by 3.";
    
} 
elseif ($num % 5 == 0) {
    echo "The number is divisible by 5.";

} 
else {
    echo "The number is not divisible by 3 or 5.";
}

?>