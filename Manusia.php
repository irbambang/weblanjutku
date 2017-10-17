<?php 
	class Manusia{
		var $nama;
		var $warna;

		function tampilkan_nama(){
			return "Nama saya....<br/>";
		}
		function warna_kulit(){
			return "Warna kulit saya hitam <br/>";
		}
	}
	//instansiasi class manusia
	$bambang = new Manusia();
	echo $bambang -> tampilkan_nama();
	echo $bambang -> warna_kulit();

 ?>
