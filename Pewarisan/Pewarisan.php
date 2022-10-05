<?php
trait Role{
    abstract public function getRole():String;
}
class Babeh{
    // deklarasi variabel
    public $nama;
    public $umur;
    public $marga;
    public static $index;
    public $is_status;

    // membuat construct
    public function __construct($nama, $umur, $is_status = 'Anak')
    {
        $this->nama =$nama;
        $this->umur =$umur;
        $this->marga ='tan';
        self::$index =1;
        $this->is_status =$is_status;
}
public function gerMarga(){
    return $this->marga;
}
public function getName()
{
    return $this->nama;
}
public function getstatus()
{
    return $this->is_status;
}
public function getUmur()
{
    return $this->umur;
}
public function display()
{
    echo 'No' . self::$index++ . '<br>';
    echo 'nama:' .$this->getNAme() . "<br>";
    echo 'marga:' .$this->getNAme() . "<br>";
    echo 'Umur:' .$this->getNAme() . "<br>";
if($this->is_status == "BAPAK"){
    echo 'Status:' . $this->getstatus() . '<br>';
    $this->space() . '<br>';
}else{
    echo 'status:' . $this->getstatus() . '<br>';
}

}
public function space()
{
    echo '<br>';
}
}

class Bocil extends Babeh {
    use Role;

    public $role;
    public function __construct($nama, $umur, $is_status, $role = 'Siswa')
    {
        // $this->is_status;
        parent::__construct($nama, $umur, $is_status);
        $this->nama = $nama;
        $this->umur = $umur;
        $this->role = $role;
    }
 public function getALLDisplay()
 {
    $this->display() . '<br>';
    echo 'Jabatan:' . $this->getRole();
 }
 public function getRole(): string
 {
    return $this->role;
 }
}
// inisialisasi class objek
$babeh = new Babeh("Santo",37,'Anak');

$bocil = new Bocil("Susanto",15,'Rpl');
$bocil1 = new Bocil("susans",17,'Anak');

echo $babeh->display();
echo $bocil->getAllDisplay();