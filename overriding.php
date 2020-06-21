<?php
    class Produk{

        //properti
        public  $judul,
                $penulis,
                $penerbit,
                $harga;


        //konstrak yang sudah di generalisasi oleh clas child
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
        //methot
        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
    }

    // class inheritens
    class Komik extends Produk {
        public $jmlHalaman;

        public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman=0)
        {
            parent::__construct($judul,$penulis,$penerbit,$harga);
            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfoProduk(){
            $str = "Komik : ". parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
            return $str;
        }
    }

    // class inheritens
    class Game extends Produk {
        public $waktuMain;

        public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$waktuMain=0)
        {
            parent::__construct($judul,$penulis,$penerbit,$harga);
            $this->waktu = $waktuMain;
        }

        public function getInfoProduk(){
            $str = "Game : ". parent::getInfoProduk() . " - {$this->waktu} waktu main.";
            return $str;
        }
    }


    
    class CetakInfoProduk{
        public function cetak ( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
    
        }
    }

$produk1 = new Komik("naruto","masasi","shonen jump",10000,50);
$produk2 = new Game("GTA","san andreas","sony computer",40000,90);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


?>