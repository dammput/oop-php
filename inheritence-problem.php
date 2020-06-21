<?php
    class Produk{
        public  $judul,
                $penulis,
                $penerbit,
                $harga,
                $halaman,
                $waktu,
                $type;

                public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0, $waktu=0, $halaman=0, $type="type"){
                    $this->judul = $judul;
                    $this->penulis = $penulis;
                    $this->penerbit = $penerbit;
                    $this->harga = $harga;
                    $this->halaman = $halaman;
                    $this->waktu = $waktu;
                    $this->type = $type;
                }
                //methot 
                public function getLabel(){
                    return "$this->penulis, $this->penerbit";
                }

                public function getInfoLengkap(){
                    $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
                    if($this->type == "komik"){
                        $str .= " - {$this->halaman} halaman.";
                    }else if($this->type == "game"){
                        $str .= " - {$this->waktu} waktu main.";
                    }

                    return $str;
                }
    }

    class CetakInfoProduk{
        public function cetak ( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
    
        }
    }

$produk1 = new Produk("naruto","masasi","shonen jump",10000,0,50,"komik");
$produk2 = new Produk("GTA","san andreas","sony computer",40000,90,0,"game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


?>