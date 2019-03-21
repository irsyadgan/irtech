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
	
	if (isset($_POST["username"]) && isset($_POST["username"])){
		$username = checkInput($_POST["username"]);
		$password = checkInput($_POST["password"]);
	}
	else {
		// set response code - 400 bad request
		http_response_code(400);
		// return false
		echo 0;
		return;
	}
	
	// make sure data not empty
	if($username != "" && $password != "") {
		$user = new User($db);
		// put User data
		$user->putDataTwoParam($username, $password);
		// check User login
		$stmt = $user->checkLogin();
		// Count row
		$num = $stmt->rowCount();
		
		if($num > 0) {
			$var_username = "";
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$var_username = $row["username"];
			}
			
			session_start();
			$_SESSION["uname"] = $var_username;
			$_SESSION["start"] = time();
			$_SESSION["expire"] = $_SESSION["start"] + (30 * 60);
			
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
