<?php
	// required headers
	header("Access-Control-Allow-Origin: *");
	header("Content-type: application/x-www-form-urlencoded; charset=UTF-8\r\n" );
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	
	include_once '../config/Database.php';
	include_once '../../object/User.php';
	include_once '../../object/checkInput.php';
	
	$database = new Database();
	$db = $database->getConnection();
	
	$username = "";
	$password = "";
	$email = "";
	
	if (isset($_POST["username"]) && isset($_POST["username"]) && isset($_POST["email"])){
		$username = checkInput($_POST["username"]);
		$password = checkInput($_POST["password"]);
		$email = checkInput($_POST["email"]);
	}
	else {
		// set response code - 400 bad request
		http_response_code(400);
		// return false
		echo 0;
		return;
	}
	
	// make sure data not empty
	if($username != "" && $password != "" && $email != "") {
		$user = new User($db);
		// put User data
		$user->putDataThreeParam($username, $password, $email);
		// check User login
		$stmt = $user->userSignUp();
		
		if($stmt) {
			echo 1;
		}
		else {
			echo 2;
		}
	}
	 
	else {
		// set response code - 400 bad request
		http_response_code(400);
		// return false
		echo 0;
	}
?>
