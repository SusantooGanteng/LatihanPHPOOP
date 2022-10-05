<?php

// require_once 'Produk/User.php';
// require_once 'Produk/Salam.php';
// require_once 'Service/User.php';


spl_autoload_register(function($className){
    // output: ini dari class User
    $extendtion = '.php';

    $className = explode('\\' , $className);

    $className = end($className);

    require_once __DIR__ . '/Produk/' . $className . $extendtion;
    
    require_once __DIR__ . '/Service/' . $className . $extendtion;
});