<?php

require_once 'ApaKabar.php';
require_once 'SelamatPagi.php';
class Pesan
{
    use ApaKabar, SelamatPagi;
        

    // public function displayClass()
    // {
    //     echo static::class . ' dari function displayClass';
    // }
}

// Inisialisasi class objek
$pesan = new Pesan();
echo $pesan->apaKabar();
// echo $pesan->displayClass();
/* Output
Pesan dari apa kabar?
 */