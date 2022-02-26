<?php 
	class Abdancell {
		var $host	= "localhost";
		var $user 	= "root";
		var $pass	= "";
		var $db		= "hasna_cell_3";
		var $conn	= "";

		public function __construct(){
			$this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
			if(mysqli_connect_errno()){
				echo "koneksi gagal" . mysqli_connect_errno;
			}
		}

		public function lihat_produk(){
			$sql = mysqli_query($this->conn,"select * from barang");
			while($row = mysqli_fetch_array($sql))
			{
				$result[] = $row;
			}
			return $result;
		}
	}
?>