<?php
class  User{
    public $gorengan = [
        'Tempe Goreng' , 'Pisang Goreng' , 'Molen' , 'Risol' , 'Godok - Godok'
    ];

    public $anjas = [
    [
        'id'        => 1,
        'name'      => 'Suryadi',
        'address'   => 'Penuin',
        'age'       => 19
    ],
    [
        'id'        => 2,
        'name'      => 'Andrew',
        'address'   => 'Teratai',
        'age'       => 17
    ],
    [
        'id'        => 3,
        'name'      => 'Robin Cibai',
        'address'   => 'Baloi Permai',
        'age'       => 18
    ]
    ];
    
    public $isFound;
    public $index = 1;
    
    
    public function getId(){
        foreach ($this->anjas as $users => $value) {
            echo $value . "<br>";
        }
    }
    // public function getGorengan($name){ 
    //   $index = 1;
    //   echo 'Data didalam gorengan' . '<br>';
    //   foreach ($this->gorengan as $item) {
    //     echo $this->index++ .  
    //      }
    // }

//     public function getGorengan(){
//         // melakukan perulangan
//         $index = 1;
//         foreach ($this->gorengan as $item) {
//             echo $index++ . '. ' . $item . '<br>';
//         }
//     }
}

// Inisialisasi class objek
$user = new User();

echo $user->getId();

// echo $user->getGorengan() . '<br>';
// echo $user->getGorengan();