<?php


$number1 = 5;
$number2 = 10;
if ($number1 = $number2) {
echo " [{$number1}] Sama dengan {$number2}";
}elseif ($number1 >= $number2) {
    echo "[{$number1}] lebih besar dari {$number2}";
}elseif ($number1 <= $number2) 
    {
        echo " [ {$number1}] lebih kecil dari [ {$number2}] "; 
    }
/* Output
[10] Sama dengan 10
 */