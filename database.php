<?php
	class database{
		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "sregepngoding";
		var $con;

		function __construct(){
			$this->con = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);

			//Check Connection
			if (mysqli_connect_errno()){
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			} else
				echo "Koneksi berhasil";
		}

		function tampildata(){
			$data = mysqli_query($this->con,"select * from user");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

	}

//$db = new database();
// echo "<prev>";
// var_dump($db->tampil_data());
// echo "<prev>"
?>