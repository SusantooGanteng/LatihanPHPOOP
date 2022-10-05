<?php

class IfElse{

}
$number1 = 5;
$number2 = 10;

function cobaOperator($number1 , $number2){
    if ($number1 == $number2) 
    {
        echo $number1 . "+" . $number2 . "=" . ($number1 + $number2);
    }
    elseif($number1 >= $number2){
        echo $number1 . "-" . $number2 . "=" . ($number1 - $number2);
    }
    elseif($number1 <= $number2)
    {
        echo $number1 . "*" . $number2 . "=" . ($number1 * $number2);
    }
    else 
    {
        echo "Tidak Sama Tipe";
    }
}

cobaOperator(number1: 5, number2: 10);
/* Output
5*10=50
 */