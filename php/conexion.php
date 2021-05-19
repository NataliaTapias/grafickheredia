<?php

class conexion{
	
	private $conn;
	private $host='localhost';
	private $user='root';
	private $pass='';
	private $database='freddy';
	public function __construct(){
    $this->conn = new mysqli($this->host, $this->user,$this->pass, $this->database);	
	}


	public function get_Con(){
		return $this->conn;
	}
}

?>