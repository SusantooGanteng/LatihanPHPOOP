<?php

// const CHECK_STATUS = 'HADIR';

// const NAMA_GORENGAN = [
// Constant dengan Nilai Array Biasa
// 'TAHU ISI', 'BALA-BALA', 'BAKWAN'
// ];

// const STUDENTS = [
    // Constant dengan Nilai Array Asosiasi
//     'name'      => 'Arief',
//     'age'       => 17,
//     'role'      => 'Students',
//     'is_active' => true
// ];

// const USER = [
    // Const dengan Nilai Multi Dimensi
//     [
//         'name'      => 'Arief',
//         'age'       => 17,
//         'role'      => 'Students',
//         'is_active' => true
//     ],
//     [
//         'name'      => 'TeckHeng',
//         'age'       => 17,
//         'role'      => 'Guru',
//         'is_active' => true
//     ],
//     [
//         'name'      => 'William',
//         'age'       => 17,
//         'role'      => 'Students',
//         'is_active' => false
//     ]
// ];

$index = 1;

// foreach (NAMA_GORENGAN as $key => $value) {
//     echo $key + 1 . '. ' . $value . '<br>';
// }
// var_dump(STUDENTS);
// Check Nilai Seluruh Array
// var_dump(USER[0]);
// foreach (USER as $key => $value) {
//     echo 'No' . '. ' . $index++ . '<br>';
//     echo 'Nama: ' . $value['name'] . '<br>';
//     echo 'Umur: ' . $value['age'] . '<br>';
//     echo 'Role: ' . $value['role'] . '<br>';
//     echo 'Status: ' . $value['is_active'];
//     echo '<hr>';
// }

// Nilai Constant Menggunakan Method Define dengan 1 Nilai
define('CHECK_STATUS', 'Hadir');
define('NAMA_GORENGAN', [
    'BALA-BALA', 'TAHU ISI', 'BAKWAN', 'TEMPE GORENG', true
]);
// Menampilkan Nilai Define
echo CHECK_STATUS . '<hr>';
// Menampilkan Nilai Array Biasa
foreach (NAMA_GORENGAN as $key => $value) {
    echo $key + 1 . '. ' . $value . '<br>';
}
echo '<hr>';
/* Output:
1. BALA-BALA
2. TAHU ISI
3. BAKWAN
4. TEMPE GORENG
5. 1 
*/

define ('STUDENTS' , [
    'name'      => 'Arief',
    'age'       => 17,
    'role'      => 'Students',
    'is_active' => true
]);

foreach (STUDENTS as $key => $value){
    echo $key . ': ' . $value . '<br>';
} 
echo '<hr>';

define('USER' , [
    [
        'nama'      => 'Acun',
        'age'       => 17,
        'role'      => 'Students',
        'is_active' => true
    ],
    [
        'nama'      => 'Jordan',
        'age'       => 45,
        'role'      => 'Coach',
        'is_active' => true,
    ],
    [
        'nama'      => 'Kobe Bryant',
        'age'       => 32,
        'role'      => 'Retired Player',
        'is_active' => false
    ]
]);

foreach (USER as $key => $value) {
    echo 'NO. ' . $index++ . '<br>';
    echo 'Nama: ' . $value['nama'] . '<br>';
    echo 'Umur: ' . $value['age'] . '<br>';
    echo 'Role: ' . $value['role'] . '<br>';
    echo 'Status: ' . $value['is_active'] . '<br>';
    echo '<hr>';
}

/* Output
Hadir  

1. BALA-BALA
2. TAHU ISI
3. BAKWAN
4. TEMPE GORENG
5. 1

name: Arief
age: 17
role: Students
is_active: 1

NO. 1
Nama: Acun
Umur: 17
Role: Students
Status: 1

NO. 2
Nama: Jordan
Umur: 45
Role: Coach
Status: 1

NO. 3
Nama: Kobe Bryant
Umur: 32
Role: Retired Player
Status:
 */