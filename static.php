<?php

class ContohStatic{
    public static $angka = 1;

    public static function halo(){
        return "halo " . self::$angka++ . " kali. <hr>";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br><br><br>";


echo "contoh tanpa static <hr>";
class Contoh{
    public $angka = 10;

    public function halo(){
        return "Halo " . $this->angka ++ . " Kali. <br>";
    }

}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();

echo "<br><br><br>contoh static<hr>";
class Contoh2{
    public static $angka2 = 10;

    public function halo(){
        return "Halo " . self::$angka2 ++ . " Kali. <br>";
    }

}

$obj3 = new Contoh2;
echo $obj3->halo();
echo $obj3->halo();

echo "<hr>";

$obj4 = new Contoh2;
echo $obj4->halo();
echo $obj4->halo();
?>