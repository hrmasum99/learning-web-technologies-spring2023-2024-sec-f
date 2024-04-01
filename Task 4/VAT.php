<?php
$amount = 100;
$vat_Rate = 0.15; 
$vat_Amount = $amount * $vat_Rate;
$total_Vat = ($amount + $vat_Amount);
echo("VAT = ".$total_Vat);
?>
