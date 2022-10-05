<?php

include 'Produk.php';

class Buku extends Produk{
    public function judul(){}
    public function sayHello($name):void
    {
        echo "HELLO SAYA ADALAH {$name}";
    }
}
// Inisialisasi Objek
$obj = new Buku();
echo $obj->sayHello(name: "Anjas Kelas") . "<br>";
echo Buku::$judul;

/* Output
HELLO SAYA ADALAH Anjas Kelas
Belajar Abstract Class */
