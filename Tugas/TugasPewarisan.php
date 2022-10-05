<?php

include 'TugasAbstrak.php';

class TugasPewarisan extends TugasAbstrak{
    public function Nama($name):void
    {
        echo "Nama: $name";
    }
} 
$obj = new TugasPewarisan();
echo $obj->Nama(name: "Andrew") . "<br>";
echo $obj->getHarga();
/* Output
Nama: Andrew
5000
 */