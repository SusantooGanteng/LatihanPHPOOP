<?php

class ClassObjek
{
    // mendeklarasi propherties / data member/ atribute
    public $name;
    public $age;
}

// inisialisasi class objek
$obj = new ClassObjek();
$obj->name = "Bot";
$obj->age = 10;

// memberi nilai hardcore
echo "Nama: " . $obj->name . "<br>";
echo "Umur: " . $obj->age;
/* Output
Nama: Bot
Umur: 10
 */