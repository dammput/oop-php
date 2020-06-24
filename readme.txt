----------------------------------------------------------------------------------------------------------------------
property (datanya)
----------------------------------------------------------------------------------------------------------------------
-mempresentasikan data keadaan dari sebuah object
-variabel yang ada didalam object
-sama seperti variabel didalam PHP, ditambah dengan visibility didepannya


----------------------------------------------------------------------------------------------------------------------
method (perilakunya)
----------------------------------------------------------------------------------------------------------------------
-mempresentasikan prilaku dari sebuah object
-fungtion yang ada disalam object
-sama seperti variabel didalam PHP, ditambah dengan visibility didepannya


----------------------------------------------------------------------------------------------------------------------
inheriten
----------------------------------------------------------------------------------------------------------------------
-pewarisan class parent
-bisa mendapat attribut yang di punyai parent dan dapat diakses dalam class cild/inheriten
    class Komik extends Produk {
        public function getInfoProduk(){
            $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->halaman} Halaman.";
            return $str;
        }
    }
    class
----------------------------------------------------------------------------------------------------------------------
overriding
----------------------------------------------------------------------------------------------------------------------
-menimpah methot class
public function getInfoProduk(){
$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
menjadi
public function getInfoProduk(){
$str = "Komik : ". parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
----------------------------------------------------------------------------------------------------------------------
        public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman=0)
        {
            parent::__construct($judul,$penulis,$penerbit,$harga);
            $this->jmlHalaman = $jmlHalaman;
        }


----------------------------------------------------------------------------------------------------------------------
visibility 
----------------------------------------------------------------------------------------------------------------------
-konsep yang digunakan untuk mengatur akses dari property dan methot pada suatu objek
-ada 3 keyword visibility : public, protected, dan private
-public: dapat digunakan dimana saja, bahkan diluar kelas.
-protected: hanya dapat digunakan didalam sebuah kelas beserta turunannya.
-private: hanya dapat digunakan didalam sebuah kelas tertentu saja.
pertanyaanya ? kenapa perlu visibility
1.hanya memperlihatkan aspek dari class yang dibutuhkan oleh client
2.menentukan kebutuhan yang jelas untuk object
3.memberikan kendali pada kode untuk menghindari BUG

----------------------------------------------------------------------------------------------------------------------
setter and getter(erat kaitannya sama pembahasan visibility)
----------------------------------------------------------------------------------------------------------------------

----------------------------------------------------------------------------------------------------------------------
static keyword
----------------------------------------------------------------------------------------------------------------------
-member yang terikat dengan class, bukan dengan object
-nilai static akan selalu tetap meskipun object di instansiasi berulang kali
-membuat kode menjadi procerural
-biasanya dipake untuk fungsi bantuan
-atau digunakan di class utility pada framework

----------------------------------------------------------------------------------------------------------------------
constanta
----------------------------------------------------------------------------------------------------------------------
-sama seperti variable tapi nilainya tidak berubah
code menggunakan define()
atau menggunakan const

----------------------------------------------------------------------------------------------------------------------
Abstract class (menggunakan class ini hanya keputusan pembuatan class, bisa dipake bisa juga tidak)
----------------------------------------------------------------------------------------------------------------------
-adalah sebuah class yang nantinya tidak dapat di instansiasi
-kelas Abstract
-mendefinisan insterface untuk turunannya
-berperan sebagai kerangka dasar
-memiliki minimal 1 methot abstrak
-digunakan dalam pewarisa nutuk memaksakan implementasi method abstraak yang sama untuk semua kelas turunannya.


----------------------------------------------------------------------------------------------------------------------
insterface
----------------------------------------------------------------------------------------------------------------------
hanya pemodelan biar rapi ketika membuat konsep OOP


----------------------------------------------------------------------------------------------------------------------
outoloading
----------------------------------------------------------------------------------------------------------------------
-digunakan untuk membedakan file tiap class


----------------------------------------------------------------------------------------------------------------------
namescpace 
----------------------------------------------------------------------------------------------------------------------
untuk mempermudah inisialisasi methot
agar tidak terjadi tabrakan class apabila ada class yang sama
penulisannya pada tag awal 
namespace App\Produk;

pemanggilannya menggunakan inisialisasi
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;


// new App\Produk\User();
new ServiceUser();
echo "<br>";
new ProdukUser();
