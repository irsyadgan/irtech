<!DOCTYPE html>
<html>
    <head>
			<!-- Mobile Specific Meta -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
			<!-- Favicon -->
			<link rel="shortcut icon" href="img/fav.png" />
			<!-- Author Meta -->
			<meta name="author" content="colorlib" />
			<!-- Meta Description -->
			<meta name="description" content="" />
			<!-- Meta Keyword -->
			<meta name="keywords" content="" />
			<!-- meta character set -->
			<meta charset="UTF-8" />
			<!-- Site Title -->
			<title>User</title>

			<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
			<!--
					CSS
					=============================================
				-->
			<link rel="stylesheet" href="css/linearicons.css" />
			<link rel="stylesheet" href="css/font-awesome.min.css" />
			<link rel="stylesheet" href="css/bootstrap.css" />
			<link rel="stylesheet" href="css/magnific-popup.css" />
			<link rel="stylesheet" href="css/owl.carousel.css" />
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/hexagons.min.css" />
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
			<link rel="stylesheet" href="css/main.css" />
			<link rel="stylesheet" href="css/irsyad.css" />
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans" >

			<script type = "text/javascript" 
				src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
			</script>
				
			<script src="functional_js/user_page.js">
				
			</script>
		</head>
    
    <body>
			<!-- ================ Start Header Area ================= -->
			<?php
				include_once 'header.php';
			?>
			<!-- ================ End Header Area ================= -->
	
			<h1>Homepage</h1>
			<br/>
			<?php
				$var_user = $_SESSION["uname"];
			?>
			
			<br/>
			<div class="course-form-area contact-page-form course-form text-right" id="myForm">
				<div class="form-group col-md-12" id="message"></div>
				<?php
					echo "<div class=\"form-group col-md-12\">";
						echo "<input type=\"hidden\" class=\"form-control login-form\" id=\"username\" value=\"$var_user\">";
					echo "</div>";
				?>
			</div>
	</body>
</html>