<?php
	
	session_start();
	
	$host = "localhost";
	$db_name = "webgaje";
	$user = "root";
	$password = "";

	$table_password = "user_profile";
	
	$con = new mysqli($host, $user, $password, $db_name);
	if($con->connect_error){
	   die("Unable to connect database: " . $con->connect_error);
	}
?>