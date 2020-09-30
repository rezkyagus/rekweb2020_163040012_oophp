<?php 

// jualan produk
// komik
// game
class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

 // __construct ini adalah metode khusus yang akan dijalankan secara otomatis setiap kita membuat instan dari sebuah kelas

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit"; 
	}



}

class CetakInfoProduk{
	public function cetak( produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000 );

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer",  250000 );



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);


?>