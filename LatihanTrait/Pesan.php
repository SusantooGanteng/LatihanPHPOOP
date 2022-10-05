<?php 
trait Apakabar{
    public function apakabar(){
        echo static::class . 'Apa kabar';
    }
}

trait selamatPagi{
    public function apaKabar(){
        echo static::class . ' selamat pagi';
    }
}

class pesan{
    use ApaKabar,Selamatpagi {
        ApaKabar::apakabar insteadof SelamatPagi;
        SelamatPagi::apakabar as ApakabarDariTraitSelamatPagi;
    }
}
// inisialisasi calss objek
$pesan = new Pesan();
echo $pesan->ApakabarDariTraitSelamatpagi();
// out put 