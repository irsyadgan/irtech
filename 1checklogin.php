<?php
	
	include_once "1database.php";
	
	// Retrieve data from Query String
	$uname = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);

	if ($uname != "" && $password != ""){

		$query = "SELECT count(*) as cntUser FROM user_profile WHERE username='" .$uname. "' and password='" .$password. "'";
		
		$result = mysqli_query($con,$query);
		if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}
		
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['uname'] = $uname;
    }
    
		echo $count;
	}
?>