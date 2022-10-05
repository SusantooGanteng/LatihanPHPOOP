<?php

class Ehek
{
    public function cariNilaiGanjilGenap($inputnilai){
        if ($inputnilai %= 2) {
            echo "{$inputnilai} ADALAH BILANGAN GANJIL"; 
        }else{
            echo "{$inputnilai} ADALAH BILANGAN GENAP";
        }
    }
}

$obj = new Ehek();
echo $obj->cariNilaiGanjilGenap(inputnilai: 5);
/* Output
1 ADALAH BILANGAN GANJIL
 */