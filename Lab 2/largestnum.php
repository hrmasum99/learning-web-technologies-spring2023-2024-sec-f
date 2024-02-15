<?php
    $num1 = 35; 
    $num2 = 20; 
    $num3 = 36; 

    if ($num1 >= $num2 && $num1 >= $num3) {
        echo "The largest number is: " . $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "The largest number is: " . $num2;
    } else {
        echo "The largest number is: " . $num3;
    }
?>