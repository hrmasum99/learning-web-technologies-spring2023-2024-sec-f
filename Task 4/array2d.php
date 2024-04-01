<?php
echo "<table cellpadding='5' cellspacing='0' border='1' height='100px' width='380px'>"; // Modified height and width
$array2d = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo "<tr>";
echo "<td>The array to declare</td>";
echo "<td>Shapes to print</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<table cellpadding='3' cellspacing='0' border='1' height='50px' width='120px'>"; // Modified height and width
echo "<tr>";
foreach( $array2d as $r ) 
{
    echo "<tr>";
    foreach( $r as $element ) 
    {
        echo "<td>";
        print($element." ");
        echo "</td>";
    }
    echo "</tr>";
    //print("\n");
}
echo "</tr>";
echo "</table>";
    echo "</td>";

    echo "<td>";
    echo "<table align='center' cellpadding='3' cellspacing='0' border='1' height='50px' width='200px'>"; // Modified height and width

    echo "<tr>";
    echo "<td>";
    for ($i = 3; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
    echo "</td>";

    echo "<td>";
    $letter = 'A';
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $letter++ . " ";
        }
        echo "<br>";
    }
    echo "</td>";
    echo "</td>";
    echo "</tr>";
    echo "</tr>";


echo "</table>";
?>
