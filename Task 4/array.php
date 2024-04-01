<?php

    $numbers = [2, 4, 6, 8, 10, 12, 14]; 
    $element = 8; 
    $flag = 1;
    foreach ($numbers as $value) 
    {
        if ($value === $element) 
        {
            $flag = 0;
            break;
        }
        else
        {
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo $element . " is found in the array.";
    } else {
        echo $element . " is not found in the array.";
    }
?>
