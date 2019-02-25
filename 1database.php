<?php
	
	session_start();
	
	$host = "localhost";
	$db_name = "webgaje";
	$user = "root";
	$password = "";

	$table_password = "user_profile";
	
	try {
    	$con = new PDO("mysql:host={$host};dbname={$db_name}", $user, $password);
	}catch(PDOException $exception){
		echo "Connection error: " . $exception->getMessage();
	}
?>