<?php

class Fungsi
{
    public function __construct(public $name , public $numb)
    {
        
    }
    // 1. Membuat Fungsi Void Tanpa Parameter
    public function title():void
    {
        echo "Belajar Fungsi";
    }
    // 2. Membuat Fungsi Void dengan Parameter
    public function getParameter($testParameter)
    {
        echo $testParameter;
    } 
    // 3. Membuat Fungsi Dengan Mengembalikkan Nilai
    public function getName()
    {
        return $this->name;
    }
    // 4. Membuat Fungsi Dengan Parameter dan Mengembalikkan Nilai
    public function Perkalian($numb_a , $numb_b)
    {
        return $numb_a * $numb_b;
    }
}

$obj = new Fungsi("Robin Cibai" , numb: "17");
echo $obj->name . "<br>";
echo $obj->numb . "<br>";
echo $obj->title() . "<br>";
echo $obj->getName() . "<br>";
echo $obj->getParameter(testParameter: "Ehek") . "<br>";
echo $obj->Perkalian(5 , 6);
/* Output
Robin Cibai
17
Belajar Fungsi
Robin Cibai
Ehek
30 
*/
