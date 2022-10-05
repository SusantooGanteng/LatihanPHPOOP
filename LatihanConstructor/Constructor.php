<?php

Class Constructor
{
    // deklarasi variable
    public $judul;
    public $level;

    public function __construct($judul, $level)
    {
        $this->judul = $judul;
        $this->level = $level;
    }
}

// inisialisasi objek dan mmeberikan nilai
$obj = new Constructor(judul: "Constructor", level: "medium");

echo "Nama Class: " . $obj->judul . "<br>";
echo "Level: " . $obj->level;
/* Output
Nama Class: Constructor
Level: medium
 */