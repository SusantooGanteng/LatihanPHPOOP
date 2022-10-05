<?php

Class TugasMembuatClassObjek
{
    public $name;
    public $umur;
    public $kelas;
    public $jurusan;

    public function __construct($name, $umur, $kelas, $jurusan)
    {
        $this->name = $name;
        $this->umur = $umur;
        $this->kelas = $kelas;
        $this->jurusan = $jurusan;
    }
}

$obj1 = new TugasMembuatClassObjek(name: "Andrew Pakpahan", umur: "17", kelas: "12", jurusan: "Rekayasa Perangkat Lunak");
$obj2 = new TugasMembuatClassObjek(name: "TeckHeng", umur: "17", kelas: "12", jurusan: "Akuntansi");
$obj3 = new TugasMembuatClassObjek(name: "Hizky Panjaitan", umur: "17", kelas: "12", jurusan: "Mencari Cinta");
$obj4 = new TugasMembuatClassObjek(name: "Ferdyansah", umur: "17", kelas: "12", jurusan: "Mencari Masalah");
$obj5 = new TugasMembuatClassObjek(name: "Jason Ganteng", umur: "17", kelas: "12", jurusan: "RPL");

echo "Nama: " . $obj1->name . "<br>";
echo "Umur: " . $obj1->umur . "<br>";
echo "Kelas: " . $obj1->kelas . "<br>";
echo "Jurusan: " . $obj1->jurusan . "<hr>";

echo "Nama: " . $obj2->name . "<br>";
echo "Umur: " . $obj2->umur . "<br>";
echo "Kelas: " . $obj2->kelas . "<br>";
echo "Jurusan: " . $obj2->jurusan . "<hr>";

echo "Nama: " . $obj3->name . "<br>";
echo "Umur: " . $obj3->umur . "<br>";
echo "Kelas: " . $obj3->kelas . "<br>";
echo "Jurusan: " . $obj3->jurusan . "<hr>";

echo "Nama: " . $obj4->name . "<br>";
echo "Umur: " . $obj4->umur . "<br>";
echo "Kelas: " . $obj4->kelas . "<br>";
echo "Jurusan: " . $obj4->jurusan . "<hr>";

echo "Nama: " . $obj5->name . "<br>";
echo "Umur: " . $obj5->umur . "<br>";
echo "Kelas: " . $obj5->kelas . "<br>";
echo "Jurusan: " . $obj5->jurusan;
/* Output
Nama: Andrew Pakpahan
Umur: 17
Kelas: 12
Jurusan: Rekayasa Perangkat Lunak

Nama: TeckHeng
Umur: 17
Kelas: 12
Jurusan: Akuntansi

Nama: Hizky Panjaitan
Umur: 17
Kelas: 12
Jurusan: Mencari Cinta

Nama: Ferdyansah
Umur: 17
Kelas: 12
Jurusan: Mencari Masalah

Nama: Jason Ganteng
Umur: 17
Kelas: 12
Jurusan: RPL 
*/