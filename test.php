<link rel="stylesheet" href="css/main.css">
<?php
$num = $_GET["val"];
echo "<table>";
for ($j=1; $j <= $num; $j++) { 
    echo "<tr>";
    for ($i=1; $i <= $num; $i++) { 
        echo "<td>" . $i . " X " . $j . " = " . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";