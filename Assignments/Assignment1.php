<?php

echo " Greatest and smallest number <br>" ;
$num1 = 25;
$num2 = 10;
$num3 = 40;

if ($num1 >= $num2 && $num1 >= $num3) {
    $greatest = $num1;

} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $greatest = $num2;

} else {
    $greatest = $num3;
}

if ($num1 <= $num2 && $num1 <= $num3) {
    $smallest = $num1;

} elseif ($num2 <= $num1 && $num2 <= $num3) {
    $smallest = $num2;

} else {
    $smallest = $num3;
}

echo "Greatest: $greatest <br>";

echo "Smallest: $smallest";

echo "<hr>"



?>


<?php

echo "divisble 2 and 5 <br>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

echo "<hr>"
?>
<?php




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

echo "<br><hr>"
?>

<?php

echo "HCF <BR>";


$num1 = 18;
$num2 = 24;

$hcf = 1;

for ($i = 1; $i <= $num1 && $i <= $num2; $i++) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }
}

echo "HCF: " . $hcf;
echo " <hr>"
?>

<?php

echo "LCM <br>";


$num1 = 8;
$num2 = 12;

$lcm = 1;

while ($lcm % $num1 != 0 || $lcm % $num2 != 0) {
    $lcm++;
}

echo "LCM: " . $lcm;
echo "<hr>"
?>




<?php




echo "<html><head><title>Multiplication Table</title>";
echo "<style>table { border-collapse: collapse; } td { border: 1px solid #000; padding: 2px 4px; }</style>";
echo "</head><body>";
echo "<h3 style='text-align:center'>Multiplication Table</h3>";
echo "<table>";

for ($i = 1; $i <= 12; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
echo "</body></html>";

echo "<hr>"
?>

<?php

echo " Even and odd <br>";


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

echo "<hr>"
?>

<?php

echo "Prime checker <br>";



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

echo "<hr>"
?>

<?php

echo "Prime Numbers <br>";



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
echo "<hr>"
?>


<?php

echo "Reverse numbers : <br>";

$num = 12345;
$reverse = 0;
echo "Numbers: ".$num."<br>";
for (; $num > 0; $num = (int)($num / 10)) {
    $digit = $num % 10;
    $reverse = $reverse * 10 + $digit;
}

echo "Reversed: " . $reverse;


?>

