<?php

include 'Display.php';
class Handphone implements Display
{
    public $pesan = "Selamat Siang";

    public function tampilkan()
    {
        echo $this->pesan;
    }

    public function turnOffScreen(){
        echo 'Layar Mati';
    }
}

$hp = new Handphone();

echo $hp->tampilkan();

/* Output
Selamat Siang
 */
