<?php

include 'ParentClass.php';
class Buku extends ParentClass
{
    public static $title;
    public static $harga;

    public function __construct($title = "Erere" , $harga = 5000)
    {
        self::$title = $title;
        self::$harga = $harga;
    }

    public function childDisplay() 
    {
        parent::display();
        echo "Judul: " . self::$title . "<br>";
    }
    
    public function Ehek()
    {
        echo "Harga: " . self::$harga;
    }           
}

$buku = new Buku();

$buku->childDisplay() . "<br>";
$buku->Ehek();
/* Output
Nama : Ini Class Produk
Nama : Ini Class Produk
Judul: Erere
Harga: 5000
 */