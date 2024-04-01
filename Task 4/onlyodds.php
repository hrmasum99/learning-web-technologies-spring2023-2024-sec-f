<?php

echo"Odd numbers between 10 and 100: \r\n";

for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "\r\n";
    }
}

?>
