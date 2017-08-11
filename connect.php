<?php
	
	$server = "localhost";
	$user = "root";
	$password = "";

	try {
		$conn = new PDO("mysql:host=$server;dbname=microblog", $user, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "failed: " . $e->getMessage(); 
	}
?>