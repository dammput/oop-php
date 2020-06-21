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
                    return "$this->judul, $this->penerbit";
                }
    }

    $produk1 = new Produk("naruto","masasi","shonen jump",10000);
    $produk2 = new Produk("sasuke");


    echo "produk 1 : " . $produk1->getLabel();
    echo "<br>";
    echo "produk 2 : " . $produk2->getLabel();
    var_dump($produk2);
?>