<?php

    // jual Produk
    // komik
    // game

    class Produk{
        public  $judul = "judul",
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;

                //methot
                public function getLabel(){
                    return "$this->judul, $this->penerbit";
                }
    }

    // // instan class
    // $produk1 = new Produk();
    // $produk1 ->judul = "naruto";
    // var_dump($produk1);
    // echo "<br>";
    // $produk2 = new Produk();
    // $produk2 ->judul = "sasuke";
    // $produk2 ->judulBaru = "dada";
    // var_dump($produk2);

    $produk3 = new Produk();
    $produk3->judul = "naruto";
    $produk3->penulis = "masasi";
    $produk3->penerbit = "gramedia";
    $produk3->harga = 20000;
    
    $produk4 = new Produk();
    $produk4->judul = "GTA";
    $produk4->penulis = "san andreas";
    $produk4->penerbit = "sony computer";
    $produk4->harga = 110000;
    
    echo "Komik : " . $produk3->getLabel();
    echo "<br>";
    echo "Game : " . $produk4->getLabel();
?>