<?php

// menggunakan define tidak bisa di gunakan didalam class
define('NAMA', 'adam ahmad');
echo NAMA;
echo "<br>";

// bisa digunakan/disimpan didalam class
const UMUR = 23;
echo UMUR;
echo "<br>";

// percobaan
class Coba {
    // define('NAMA','adam ahmad');
    const NAMA = 'Adam Ahmad';
}

// memanggil difin menggunakan cara static 
echo Coba::NAMA;
echo "<br>";
echo "<br>";



//magic constance
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";

function Coba2(){
    return __FUNCTION__;
}
echo "<br>";
echo Coba2();
echo "<br>";

class Coba3{
    public $kelas =  __CLASS__;
}
$obj = new Coba3;
echo $obj->kelas;
?>