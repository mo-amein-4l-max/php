<?php

// http://localhost/Assignment%201/mtable.php



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
?>