<?php 
	class ManusiaPrivate{
		
		private $nama = "malas ngoding";

		public function tampilkan_nama(){
			return "Nama saya " .$this->nama;
		}
	}
	//instansiasi class manusia
	$bambang = new ManusiaPrivate();
	echo $bambang -> tampilkan_nama();
	echo $bambang -> nama;  //eror karena aksesnnya private
?>
