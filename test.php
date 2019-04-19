<?php
	include_once 'backend/api/config/Database.php';
	include_once 'backend/object/User.php';
	include_once 'backend/object/checkInput.php';
	
	$database = new Database();
	$db = $database->getConnection();
	
	$username = "test";
	$password = "1234";
	
	/*if (isset($_POST["username"]) && isset($_POST["username"])){
		$username = checkInput($_POST["username"]);
		$password = checkInput($_POST["password"]);
	}
	else {
		// set response code - 400 bad request
		http_response_code(400);
		// return false
		echo 0;
		return;
	}*/
	
	// make sure data not empty
	if($username != "" && $password != "") {
		$user = new User($db);
		// put User data
		$user->putDataTwoParam($username, $password);
		// check User login
		$stmt = $user->userSignIn();
		// Count row
		$num = $stmt->rowCount();
		
		echo "test";
		
		if($num > 0) {
			$var_username = "";
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$var_username = $row["username"];
			}
			
			echo $var_username;
			
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
