<?php 

// Constant ialah sebuah indentifier untuk menyimpan nilai
// Variable juga sama tempat untuk menyimpan nilai
// perbedaan dari constant sama variable adalah nilai-nya tidak dapat dirubah 
// nah didalam php ada dua keyword define() dan const
// untuk keyword define() tidak bisa disimpan dalam class
// sedangkan untuk const bisa disimpan dalam class
// di dalam php juga punya 'magic Constant'
//__LINE__ , __FILE__ , __DIR__ , __FUNCTION__ , __CLASS__ , __TRAIT__ , __METHOD__ , __NAMESPACE__
// ini akan otomatis ada isinya tapi tidak bisa dirubah 


               
//define('NAMA', 'Rush 7');


//echo NAMA;

//echo "<br>";

//const UMUR = 21;

//echo UMUR;


//class Coba {
//  const NAMA = 'Rush 7';
//}

//echo Coba::NAMA;


// __LINE__; // akan menampilkan baris dimana constant ini ditulis 
// __FILE__; // kita akan menampilkan alamat file constant nya ada dimana


//function coba() {
//	return __FUNCTION__;
//}

//echo coba();


class coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;




 ?>