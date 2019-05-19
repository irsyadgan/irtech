<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/kursus/logo.png" />
  <!-- Author Meta -->
  <meta name="author" content="colorlib" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Kursus Saya</title>

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
</head>

<body>
	<!-- ================ Start Header Area ================= -->
  <?php
    include_once 'header.php';
  ?>
  <!-- ================ End Header Area ================= -->
	
  <!-- ================ Start Popular Course Area ================= -->
  <section class="popular-course-area section-gap popular-background-polos">
    <div class="container-fluid">
			<div style="margin-left: 200px;">
				<div class="owl-carousel popuar-course-carusel">
				
				<?php
					include_once 'backend/api/config/Database.php';
					include_once 'backend/object/Course.php';
					
					$database = new Database();
					$db = $database->getConnection();
					
					$search = $_POST['searchInput'];
					
					// make sure data not empty
					$course = new Course($db);
					// set username
					$course->putSearch($search);
					// select all course
					$stmt = $course->courseSearch();
					// Count row
					$num = $stmt->rowCount();
						
					if($num > 0) {
						$var_id = "";
						$var_image_link = "";
						$var_title = "";
						$var_price = "";
						$var_review = "";
						while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
							$var_id = $row["id"];
							$var_image_link = $row["course_image_link"];
							$var_title = $row["title"];
							$var_price = $row["price"];
							$var_review = $row["review"];
							
							echo "<div class=\"single-popular-course\">";
								echo "<div class=\"thumb\">";
									echo "<img class=\"f-img img-fluid mx-auto\" src=\"$var_image_link\" alt=\"\" />";
								echo "</div>";
								echo "<div class=\"details\">";
									echo "<div class=\"d-flex justify-content-between mb-20\">";
										echo "<p class=\"name\">programming language</p>";
										echo "<p class=\"value\">$var_price</p>";
									echo "</div>";
									echo "<a href=\"course-details.php\">";
										echo "<h4>$var_title</h4>";
									echo "</a>";
									echo "<div class=\"bottom d-flex mt-15\">";
										echo "<ul class=\"list\">";
											echo "<li>";
												echo "<a href=\"#\"><i class=\"fa fa-star\"></i></a>";
											echo "</li>";
											echo "<li>";
												echo "<a href=\"#\"><i class=\"fa fa-star\"></i></a>";
											echo "</li>";
											echo "<li>";
												echo "<a href=\"#\"><i class=\"fa fa-star\"></i></a>";
											echo "</li>";
											echo "<li>";
												echo "<a href=\"#\"><i class=\"fa fa-star\"></i></a>";
											echo "</li>";
											echo "<li>";
												echo "<a href=\"#\"><i class=\"fa fa-star\"></i></a>";
											echo "</li>";
										echo "</ul>";
										echo "<p class=\"ml-20\">$var_review</p>";
									echo "</div>";
								echo "</div>";
							echo "</div>";
						}
					}
					
					else {
						// set response code - 400 bad request
						http_response_code(400);
						// return false
						echo 0;
					}
					
				?>
				
				</div>
			</div>
    </div>
  </section>
  <!-- ================ End Popular Course Area ================= -->
  
  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/hexagons.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/main.js"></script>
	<script src="js/irsyad.js"></script>
</body>

</html>