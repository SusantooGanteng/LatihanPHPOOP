<?php

include 'Handphone.php';
class User
{
    public function __construct(public Handphone $handphone)
    {
        
    }
    public function tekanTombol(Handphone $handphone){
        return $handphone->tampilkan();
    }
}

$user = new User($realme);

$realme = new Handphone();
$user->tekanTombol($realme);
// echo $user->turnOffScreen();