<?php
    class Produk{

        //properti
        private $judul,
                $penulis,
                $penerbit,
                $harga;

        protected $diskon=0;



        //konstrak yang sudah di generalisasi oleh clas child
        public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;

        }

        public function setJudul( $judul ){
            // if( !is_string($judul)){
            //     throw new Exception("judul Harus String");
            // }
            $this->judul = $judul;
        }

        public function getJudul(){
            return $this->judul;
        }

        public function setPenulis( $penulis ){
            $this->penulis = $penulis;
        }

        public function getPenulis(){
            return $this->penulis;
        }

        public function setPenerbit( $penerbit ){
            $this->penerbit = $penerbit;
        }

        public function getPenerbit(){
            return $this->penerbit;
        }

        public function setDiskon( $diskon ){
            $this->diskon = $diskon;
        }

        public function getDiskon(){
            return $this->diskon;
        }

        public function setHarga( $harga ){
            $this->harga = $harga;
        }

        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
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
echo "<hr>";

// $produk2->diskon = 90;
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

// $produk3 = new Produk("barangbaru");
$produk1->setPenulis("judulBaru");
echo $produk1->getPenulis();


?>