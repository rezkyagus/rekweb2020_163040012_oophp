<?php 

// static keyword member yang terkait dengan class, bukan dengan object dan nilai static akan selalu tetap meskipun object di-instansiasi berulang kali
// dengan menggunakan static membuat kode menjadi 'procedural'
// biasanya digunakan untuk membuat fungsi bantuan/helper 
// atau digunakan di class-class utility pada framework


//class contohStatic {
//	public static $angka = 1;

//	public static function halo() {
//		return "Halo." . self::$angka++ . " kali.";
//	}
//}



//echo contohStatic::$angka;
//echo "<br>";
//echo contohStatic::halo();
//echo "<hr>";
//echo contohStatic::halo();

class Contoh {
	public static $angka = 1;

	public function halo() {
		return "Halo " . self::$angka++ . " Kali. <br>";
	}
}


$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();


 ?>