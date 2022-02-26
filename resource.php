<?php 
	class Abdancell {
		var $host	= "localhost";
		var $user 	= "root";
		var $pass	= "";
		var $db		= "hasna_cell_3";
		var $conn	= "";

		public function __construct(){
			$this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		}
	}
?>