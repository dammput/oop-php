<?php
    class Produk{

        //properti
        public  $judul,
                $penulis,
                $penerbit,
                $harga,
                $halaman,
                $waktu;


        //methot 
                public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0, $waktu=0, $halaman=0){
                    $this->judul = $judul;
                    $this->penulis = $penulis;
                    $this->penerbit = $penerbit;
                    $this->harga = $harga;
                    $this->halaman = $halaman;
                    $this->waktu = $waktu;

                }
                //methot 
                public function getLabel(){
                    return "$this->penulis, $this->penerbit";
                }

                public function getInfoProduk(){
                    $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
                    return $str;
                }
    }

    class Komik extends Produk {
        public function getInfoProduk(){
            $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->halaman} Halaman.";
            return $str;
        }
    }
    class Game extends Produk {
        public function getInfoProduk(){
            $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktu} waktu main.";
            return $str;
        }
    }


    
    class CetakInfoProduk{
        public function cetak ( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
    
        }
    }

$produk1 = new Komik("naruto","masasi","shonen jump",10000,0,50);
$produk2 = new Game("GTA","san andreas","sony computer",40000,90,0);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


?>