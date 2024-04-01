<?php
echo "<table cellpadding='5' cellspacing='0' border='1' height='50px' width='380px'>"; // Modified height and width
echo "<tr>";
echo "<td>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo  "* ";
    }
    echo "<br>";
}
echo "</td>";
echo "<td>";
for ($i =1; $i <= 3; $i++) {
    for ($j = 1; $j <= (4 - $i); $j++) {
        echo $j. " ";
    }
    echo "<br>";
}
echo "</td>";
echo "<td>";
$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char++ . " ";
    }
    echo "<br>";
}
echo "</td>";
echo "</tr>";
echo "</table>";
?>
