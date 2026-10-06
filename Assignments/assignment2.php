<html>
<head>
<title>PHP Assignment 2</title>
<style>
  body { font-family: Arial; }
  .block { border: 2px solid black; padding: 15px; margin-bottom: 20px; }
  table { border-collapse: collapse; }
  td, th { border: 1px solid black; padding: 6px 12px; text-align: center; }
  th { background: lightgray; }
  .gray { background: gray; color: white; }
</style>
</head>
<body>

<div class="block">
<h2>Question 1: One-dimensional array</h2>
<?php
// Question 1: One-dimensional array
$arr = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

echo "Array elements: ";
foreach ($arr as $x) {
    echo $x . ", ";
}
echo "<br><br>";

$total = 0;
$even = 0;
$odd = 0;
foreach ($arr as $x) {
    $total = $total + $x;
    if ($x % 2 == 0) {
        $even = $even + $x;
    } else {
        $odd = $odd + $x;
    }
}
echo "Total of all elements = $total <br>";
echo "Total of even elements = $even <br>";
echo "Total of odd elements = $odd <br><br>";

$min = $arr[0];
$max = $arr[0];
foreach ($arr as $x) {
    if ($x < $min) {
        $min = $x;
    }
    if ($x > $max) {
        $max = $x;
    }
}

echo "Minimum element = $min at positions: ";
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $min) {
        echo $i . " ";
    }
}
echo "<br>";

echo "Maximum element = $max at positions: ";
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $max) {
        echo $i . " ";
    }
}
?>
</div>

<div class="block">
<h2>Question 2: Colors table</h2>
<?php
// Question 2: Colors table
$colors = array(
    "Light"  => array("Red" => "Light Red",  "Green" => "Light Green",  "Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
    "Dark"   => array("Red" => "Dark Red",   "Green" => "Dark Green",   "Blue" => "Dark Blue")
);

echo "<table>";
echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";
foreach ($colors as $rowName => $row) {
    echo "<tr>";
    echo "<th>$rowName</th>";
    echo "<td>" . $row["Red"] . "</td>";
    echo "<td>" . $row["Green"] . "</td>";
    echo "<td>" . $row["Blue"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</div>

<div class="block">
<h2>Question 3: Square array (3 x 3)</h2>
<?php
// Question 3: Square array
$a = array(
    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6)
);

$odd = 0;
$even = 0;
$all = 0;
$row = array(0, 0, 0);
$col = array(0, 0, 0);
$diag1 = 0;
$diag2 = 0;

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $x = $a[$i][$j];

        $all = $all + $x;
        $row[$i] = $row[$i] + $x;
        $col[$j] = $col[$j] + $x;

        if ($x % 2 == 0) {
            $even = $even + $x;
        } else {
            $odd = $odd + $x;
        }

        if ($i == $j) {
            $diag1 = $diag1 + $x;
        }
        if ($i + $j == 2) {
            $diag2 = $diag2 + $x;
        }
    }
}

$min = $a[0][0];
$max = $a[0][0];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($a[$i][$j] < $min) {
            $min = $a[$i][$j];
        }
        if ($a[$i][$j] > $max) {
            $max = $a[$i][$j];
        }
    }
}

$minPos = "";
$maxPos = "";
$minCount = 0;
$maxCount = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($a[$i][$j] == $min) {
            $minPos = $minPos . "[$i,$j] ";
            $minCount++;
        }
        if ($a[$i][$j] == $max) {
            $maxPos = $maxPos . "[$i,$j] ";
            $maxCount++;
        }
    }
}

echo "<table>";
echo "<tr><td colspan='5'>Total odd elements = $odd</td></tr>";
echo "<tr><td colspan='5'>Total even elements = $even</td></tr>";

echo "<tr>";
echo "<td class='gray'>$diag1</td>";
echo "<td>$col[0]</td><td>$col[1]</td><td>$col[2]</td>";
echo "<td class='gray'>$diag2</td>";
echo "</tr>";

for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    echo "<td>$row[$i]</td>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $a[$i][$j] . "</td>";
    }
    echo "<td>$row[$i]</td>";
    echo "</tr>";
}

echo "<tr>";
echo "<td class='gray'>$diag2</td>";
echo "<td>$col[0]</td><td>$col[1]</td><td>$col[2]</td>";
echo "<td class='gray'>$diag1</td>";
echo "</tr>";

echo "<tr><td colspan='5'>Total all elements = $all</td></tr>";
echo "<tr><td colspan='5'>Min element is: $min in $minCount positions:<br>$minPos</td></tr>";
echo "<tr><td colspan='5'>Maximum element is: $max in $maxCount positions:<br>$maxPos</td></tr>";
echo "</table>";
?>
</div>

<div class="block">
<h2>Question 4: Students table</h2>
<?php
// Question 4: Students table
$students = array(
    "CA221" => array("Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"),
    "CA223" => array("Name" => "Ahmed Abdi Jama", "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
    "CA225" => array("Name" => "Amina Nur Adan", "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley")
);

echo "<table>";
echo "<tr><th></th><th>Name</th><th>Phone</th><th>Address</th></tr>";
foreach ($students as $id => $s) {
    echo "<tr>";
    echo "<th>$id</th>";
    echo "<td>" . $s["Name"] . "</td>";
    echo "<td>" . $s["Phone"] . "</td>";
    echo "<td>" . $s["Address"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</div>

<div class="block">
<h2>Question 5: Student transcript</h2>
<?php
// Question 5: Student transcript
$transcript = array(
    "Semester 1" => array(
        array("subject1", 9, 26, 10, 40, 85, "Pass"),
        array("subject2", 9, 26, 10, 40, 85, "Pass"),
        array("subject3", 9, 26, 10, 40, 85, "Pass")
    ),
    "Semester 2" => array(
        array("subject1", 9, 26, 10, 0, 45, "Fail"),
        array("subject2", 9, 26, 10, 40, 85, "Pass"),
        array("subject3", 9, 26, 10, 40, 85, "Pass")
    )
);

echo "<table>";
echo "<tr><th>Semester</th><th>Course</th><th>CW1</th><th>MidTerm</th><th>CW2</th><th>Final</th><th>Total</th><th>Status</th></tr>";
foreach ($transcript as $semester => $courses) {
    $first = true;
    foreach ($courses as $c) {
        echo "<tr>";
        if ($first == true) {
            echo "<td rowspan='3'>$semester</td>";
            $first = false;
        }
        echo "<td>$c[0]</td>";
        echo "<td>$c[1]</td>";
        echo "<td>$c[2]</td>";
        echo "<td>$c[3]</td>";
        echo "<td>$c[4]</td>";
        echo "<td>$c[5]</td>";
        echo "<td>$c[6]</td>";
        echo "</tr>";
    }
}
echo "</table>";
?>
</div>

</body>
</html>
