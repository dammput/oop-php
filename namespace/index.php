<?php
require_once 'App/init.php';

//instansiasi 
// $produk1 = new Komik("naruto","masasi","shonen jump",10000,50);
// $produk2 = new Game("GTA","san andreas","sony computer",40000,90);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;


// new App\Produk\User();
new ServiceUser();
echo "<br>";
new ProdukUser();