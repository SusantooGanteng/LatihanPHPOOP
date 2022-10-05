<?php
// 1. Kelas Absract dengan Keyword Abstract
abstract class Produk {
// 2. Bisa Memiliki Atribut
    public $harga = 2000;
// 3. Dapat Memiliki Function dengan Body Code Tanpa Keyword Abstract
public function getHarga(){
    return $this->harga;
}

// 4. Dapat Melakukan Signiture/ Tanda Tangan
abstract public function sayHello($name):void;

// 5. Abstract Dapat Memiliki Variable Static
public static $judul = "Belajar Abstract Class";
}
// Tidak Bisa Diinisialisasi Objek
?>