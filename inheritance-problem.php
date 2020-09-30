<?php 

// jualan produk
// komik
// game
class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;

 // __construct ini adalah metode khusus yang akan dijalankan secara otomatis setiap kita membuat instan dari sebuah kelas

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ){

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}


	public function getLabel(){
		return "$this->penulis, $this->penerbit"; 
	}

	public function getInfoLengkap(){

		//Komik : Naruto | Masashi Kishimoto, Shonen Jump, (Rp. 30000) - 100 halaman
		//Game : Uncharted | Neil Druckmann, Sony Computer (Rp.250000) ~ 50 jam

		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} ( Rp.{$this->harga} )";
		if($this->tipe == "Komik" ){
			$str .= " - {$this->jmlHalaman} halaman.";
		} else if($this->tipe == "Game" ){
			$str .= " ~ {$this->waktuMain} jam.";
		}
		return $str;
	}

}

class CetakInfoProduk{
	public function cetak( produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
		return $str;
	}
}







$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0,"Komik" );

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer",  250000, 0, 50,"Game" );


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



?>