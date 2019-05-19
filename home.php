<?php
	session_start();
	// Check user login or not
	if(!isset($_SESSION["uname"])){
		header('Location: login.html');
	}

	// logout
	if(isset($_POST['but_logout'])){
		session_destroy();
		header('Location: login.html');
	}
?>
<!doctype html>
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
  <header class="navigation-header">
      <div class="navigation-bar">
        <div class="navigation-brand">
          <a href="index.html">
            <img class="logo" src="img/kursus/logo.png" alt="logo"/>
          </a>
          <a class="text" href="index.html">
            <h3 class="text-white font-judul">TeSchool</h3>
          </a>
        </div>
        <div class="navigation-nav">
          <div class="dropdown">
            <a class="dropdown-toggle text-white" data-toggle="dropdown">
                Kategori
            </a>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div> 
          <a href="index.html">Beranda</a>
          <a href="index.html">Tentang</a>
          <a href="courses.html">Kursus</a>
          <a class="lnr lnr-magnifier navigation-search" id="navigation-search"></a>
        </div>
      </div>
    </div>
    <div class="navigation-search-input navigation-search-box" id="navigation-search-input-box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="navigation-search-input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="navigation-close-search" title="Close Search"></span>
        </form>
      </div>
    </div>
  </header>
  <!-- ================ End Header Area ================= -->
	
        <h1>Homepage</h1>
				<br/>
        <form method='post' action="">
					<?php
						$var_user = $_SESSION["uname"];
						echo $var_user;
					?>
          <input type="submit" value="Logout" name="but_logout">
        </form>
				
				<br/>
				<div class="course-form-area contact-page-form course-form text-right" id="myForm">
          <div class="form-group col-md-12" id="message"></div>
          <?php
						echo "<div class=\"form-group col-md-12\">";
							echo "<input type=\"hidden\" class=\"form-control login-form\" id=\"username\" value=\"$var_user\">";
						echo "</div>";
					?>
					<a href="mycourses.php">
						<div class="col-lg-12 text-center">
							<button class="login-btn text-uppercase" id="but_submit">My Courses</button>
						</div>
					</a>
        </div>
    </body>
</html>