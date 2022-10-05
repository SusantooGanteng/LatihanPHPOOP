<?php
// include "Fuel.php";

interface Fuel{
    public function getType($type);
}
class Kendaraan implements Fuel
{
    // public $type;

    public function __construct(public $type = "Pertalite")
    {
        
    }

    public function getType($type)
    { 
     return $this->type = $type; 
    }
    
}
// inisialisasi class objek
$kendaraan = new Kendaraan();

echo $kendaraan->getType(type: "Solar");
/* Output
Solar
 */