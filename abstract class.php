<?php 

// abstract class ialah
// sebuah kelas yang tidak dapat di instansiasi
// kelas 'abstrak'
// mendefinisikan interface untuk kelas lain yang menjadi turunannya
// berperan sebagai 'kerangka dasar' untuk kelas turunannya
// memiliki minimal 1 method abstrak
// digunakan dalam 'pewarisan' / inheritance untuk memaksakan implementasi method abstrak yang sama untuk semua kelas turunannya

abstract class buah {
	private $warna;

	abstract public function makan();
	
	public function setWarna($warna) {
		$this->warna = $warna;
	}
}

class apel extends buah {
	public function makan() {
		//kunyahh
		//sampai bagian tengahnyaa..
	}
}

class jeruk extends buah {
	public function makan() {
		//kupass
		//kunyahh..
	}
}

//$apel = new apel();
//$apel->makan();

//$buah = new buah();
//$buah->makan();





 ?>