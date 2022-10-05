<?php

abstract class TugasAbstrak{
    public $harga = 5000;

    public function getHarga(){
        return $this->harga;
    }

    abstract public function Nama($nama):void;
}