<?php
    class Produk{
        public  $judul,
                $penulis,
                $penerbit,
                $harga ;

                public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
                    $this->judul = $judul;
                    $this->penulis = $penulis;
                    $this->penerbit = $penerbit;
                    $this->harga = $harga;
                }
                //methot 
                public function getLabel(){
                    return "$this->penulis, $this->penerbit";
                }
    }

    //pembuatan tamplate (object type)
    //hnya pada class produk
class CetakInfoProduk{
    public function cetak ( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;

    }
}

$produk1 = new Produk("naruto","masasi","shonen jump",10000);
$produk2 = new Produk("GTA","san andreas","sony computer",40000);


echo "produk 1 : " . $produk1->getLabel();
echo "<br>";
echo "produk 2 : " . $produk2->getLabel();
echo "<br>";
$infoCetak = new CetakInfoProduk();
echo $infoCetak->cetak($produk1);
echo "<br>";
echo $infoCetak->cetak($produk2);


?>