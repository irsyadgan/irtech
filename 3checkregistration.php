<?php
	
	include_once "3database.php";
	
	// Retrieve data from Query String
	$uname = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$information = mysqli_real_escape_string($con,$_POST['information']);

	if ($uname != "" && $password != "" && $information != ""){

		$query = "INSERT INTO user_profile SET username='" .$uname. "'" . " ,password='" .$password. "'". " ,information='" .$information."'";
		
		$result = mysqli_query($con,$query);
		if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}

	    $_SESSION['uname'] = $uname;
	    
		echo 1;
	}
?>