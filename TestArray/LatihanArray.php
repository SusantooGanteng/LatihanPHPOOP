<?php

class LatihanArray
{
    // membuat class LatihanArray
    // Array dibagi menjadi 3
    // 1. Array biasa
    public $numbers = [
        1, 2, 3, 4, 5
    ];

    // Menampilkan / mengeluarkan nilai array biasa 
    public function arrayBiasa()
    {
        foreach ($this->numbers as $key => $value) {
            echo $value . '. ' . $key . '<br>';
        }
        echo '<hr>';
    }
    // 2. Array Asosiasi
    public $user = [
        'Nama' => "Arief",
        'Umur' => 17,
        'Kelas' => 12,
        'Jurusan' => "RPL"
    ];

    // Menampilkan atau mengeluarkan nilai array asosiasi
    public function arrayAsosiasi()
    {
        foreach ($this->user as $key => $value) {
            echo $key . ':' . $value . '<br>';
        }
    }
    // 3. Array Multi Dimensi 
    public $student = [
        'Satu' =>
        [
            'Nama' => 'Hizky',
            'Umur' => 17,
            'Kelas' => 12,
            'Jurusan' => 'RPL'
        ],
        'Dua' =>
        [
            'Nama' => 'Susanto',
            'Umur' => 17,
            'Kelas' => 12,
            'Jurusan' => 'RPL'
        ],
        'Tiga' =>
        [
            'Nama' => 'TeckHeng',
            'Umur' => 17,
            'Kelas' => 12,
            'Jurusan' => 'RPL'
        ]
    ];
    // Menampilkan atau Mengeluarkan nilai Array 
    public function getArray()
    {
        foreach ($this->student as $key => $value) {
            echo 'Nama: ' . $value['Nama'] . '<br>';
            echo 'Umur: ' . $value['Umur'] . '<br>';
            echo 'Kelas: ' . $value['Kelas'] . '<br>';
            echo 'Jurusan: ' . $value['Jurusan'];
            echo '<hr>';
        }
    }
}

$obj = new LatihanArray();
echo $obj->arrayBiasa();
echo $obj->arrayAsosiasi() . '<hr>';
echo $obj->getArray();
/* Output
1. 0
2. 1
3. 2
4. 3
5. 4

Nama:Arief
Umur:17
Kelas:12
Jurusan:RPL

Nama: Hizky
Umur: 17
Kelas: 12
Jurusan: RPL

Nama: Susanto
Umur: 17
Kelas: 12
Jurusan: RPL

Nama: TeckHeng
Umur: 17
Kelas: 12
Jurusan: RPL 
*/