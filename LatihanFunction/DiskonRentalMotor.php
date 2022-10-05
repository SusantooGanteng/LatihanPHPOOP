<?php

class DiskonRentalMotor
{
    public function __construct(private $harga = 5000, private $diskon1 = 5, private $diskon2 = 10)
    {
        $this->harga = $harga;
        $this->diskon1 = $diskon1;
        $this->diskon2 = $diskon2;
    }
    public function pesan()
    {
        return "Tidak Ada Diskon";
    }
    public function perkalian($JumlahJam)
    {

        if ($JumlahJam <= 9) {
            return $JumlahJam * $this->harga;
        } elseif ($JumlahJam >= 10 && $JumlahJam <= 15) {
            return $JumlahJam * $this->harga - $JumlahJam * $this->harga * $this->diskon1 / 100;
        } elseif ($JumlahJam >= 20 && $JumlahJam <= 24) {
            return $JumlahJam * $this->harga - $JumlahJam * $this->harga * $this->diskon2 / 100;
        } else {
            return $this->pesan();
        }
    }
}

$obj = new DiskonRentalMotor();
echo "Harga: " . $obj->perkalian(JumlahJam: 7);
/* Output
Harga: 35000
 */