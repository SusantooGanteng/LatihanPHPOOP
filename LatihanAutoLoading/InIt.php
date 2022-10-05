<?php

// require_once 'Objek\A.php';
// require_once 'Objek\B.php';
// require_once 'Objek\C.php';
// require_once 'Objek\User.php';

spl_autoload_register (function ($classname ) {
    require_once 'produk/' . $classname . 'php';

});   
