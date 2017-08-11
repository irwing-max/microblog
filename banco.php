<?php

class Banco
{
	private $servidor;
	private $user;
	private $password;
	private $conn;

	public function __construct($servidor, $user, $password){
		$this->servidor = $servidor;
		$this->user = $user;
		$this->password = $password;
	}

	public function connect(){
		try {
			$this->conn = new PDO("mysql:host=$this->servidor;dbname=microblog", $this->user, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			echo "failed: " . $e->getMessage(); 
		}

		return $this->conn;
	}

	public function getConn(){
		return $this->conn;
	}
}





