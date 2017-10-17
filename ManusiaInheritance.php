<?php
	class Manusia{
		protected $nama_saya;
		function berinama($saya){
			$this -> nama_saya = $saya;
		}
	}

	class Teman extends Manusia{
		public $nama_teman;
		function berinamateman($teman){
			$this -> nama_teman = $teman;
		}

		function namasaya($sayalagi){
			$this->nama_saya = $sayalagi;
		}

		function getnamasaya(){
			return $this->nama_saya;
		}
	}

	$malasngoding = new Teman;
	$malasngoding -> berinama("MALAS NGODING");
	$malasngoding -> berinamateman("Bambang");
	//echo "Nama saya " . $malasngoding->nama_saya . "<br/>";
	echo "Nama teman saya: " . $malasngoding->nama_teman . "<br/>";
	$malasngoding->namasaya("SREGEP NGODING");  //AMiiiiiiN
	echo "Nama saya sekarang: " . $malasngoding->getnamasaya();
?>