<?php
	// required headers
	header("Access-Control-Allow-Origin: *");
	header("Content-type: application/x-www-form-urlencoded; charset=UTF-8\r\n" );
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	
	include_once '../config/Database.php';
	include_once '../../object/Course.php';
	
	$database = new Database();
	$db = $database->getConnection();
	
	$search = "";
	
	if ( isset($_POST["search"]) ){
		$search = checkInput($_POST["search"]);
	}
	else {
		// set response code - 400 bad request
		http_response_code(400);
		// return false
		echo 0;
		return;
	}
	
	// make sure data not empty
	$course = new Course($db);
	// search string
	$course->search
	// Search
	$stmt = $course->courseSearch();
	// Count row
	$num = $stmt->rowCount();
		
	if($num > 0) {
		$var_username = "";
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$var_username = $row["username"];
		}
	}
	
	else {
		// set response code - 400 bad request
		http_response_code(400);
		// return false
		echo 0;
	}
?>
