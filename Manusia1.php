<?php 
	class Manusia1{
		var $nama;
		var $warna;

		function __construct(){
			echo "Ini adalah isi method construct <br/>";
		}
		function __destruct(){
			echo "Ini adalah isi method destruct <br/>";
		}
	}
	//instansiasi class manusia
	$bambang = new Manusia1();
?>
