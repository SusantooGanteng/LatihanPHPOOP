<?php
/* 
CATATAN
Pertemuan belajar overloading
Overloading = menggunakan method / function / properthies berulang - ulang
Didalam class itu sendiri atau diluar class

This merupakan referensi dari sebuah properties / function yang ada
*/

/* Jenis - jenis variable
    1. Default
    2. Local
    3. Global
    4. Static 
*/

class ParentClass
{
    public static $title;

    public function __construct($title)
    {
        self::$title = $title;
    }

    public function display()
    {
        echo "Nama : " . self::$title . "<br>";
    }
}

$produk = new ParentClass("Ini Class Produk");

echo $produk->display();
/* Output
Nama : Ini Class Produk
 */