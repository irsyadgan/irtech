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

	<template>
  <!-- ================ start banner Area ================= -->
  <section class="banner-area banner">
    <div class="container">
      <div class="row justify-content-center align-items-center">
				
        <div class="col-lg-12 banner-right">
          <div class="owl-carousel popuar-course-carusel carousel-course">
						<div class="single-popular-course">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="img/popular-course/p1.jpg" alt="" />
							</div>
							<div class="details">
								<div class="d-flex justify-content-between mb-20">
									<p class="name">programming language</p>
									<p class="value">$150</p>
								</div>
								<a href="#">
									<h4>Learn Angular JS Course for Legendary Persons</h4>
								</a>
								<div class="bottom d-flex mt-15">
									<ul class="list">
										<li>
											<a href="#"><i class="fa fa-star"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-star"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-star"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-star"></i></a>
										</li>
										<li>
											<a href="#"><i class="fa fa-star"></i></a>
										</li>
									</ul>
									<p class="ml-20">25 Reviews</p>
								</div>
							</div>
						</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->

</template>
  <!-- ================ Start Popular Course Area ================= -->
  <section class="popular-course-area section-gap popular-background">
    <div class="container-fluid">
			<div style="margin-left: 200px;">
				<div class="row justify-content-center title-position">
					<div class="col-lg-12">
						<h4>
							Terakhir dilihat
						</h4>
					</div>
				</div>
				<div class="owl-carousel popuar-course-carusel">
				
				<?php
					include_once 'backend/api/config/Database.php';
					include_once 'backend/object/Course.php';
					
					$database = new Database();
					$db = $database->getConnection();
					
					// make sure data not empty
					$course = new Course($db);
					// select all course
					$stmt = $course->courseSelectAll();
					// Count row
					$num = $stmt->rowCount();
						
					if($num > 0) {
						$var_id= "";
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
									echo "<a href=\"course-detail.php?id=$var_id\">";
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
  <template>
  <!-- ================ Start Registration Area ================= -->
  <section class="registration-area">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-5">
          <div class="section-title text-left text-white">
            <h2 class="text-white">
              Watch Our Trainers <br>
              in Live Action
            </h2>
            <p>
              If you are looking at blank cassettes on the web, you may be
              very confused at the difference in price. You may see some for
              as low as $.17 each.
            </p>
          </div>
        </div>
        <div class="offset-lg-3 col-lg-4 col-md-6">
          <div class="course-form-section">
            <h3 class="text-white">Courses for Free</h3>
            <p class="text-white">It is high time for learning</p>
            <form class="course-form-area contact-page-form course-form text-right" id="myForm" action="mail.html" method="post">
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Name'">
              </div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Phone Number" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Phone Number'">
              </div>
              <div class="form-group col-md-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Email Address'">
              </div>
              <div class="col-lg-12 text-center">
                <button class="btn text-uppercase">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Registration Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <section class="other-feature-area">
      <div class="container">
        <div class="feature-inner row">
          <div class="col-lg-12">
            <div class="section-title text-left">
              <h2>
                Features That <br />
                Can Avail By Everyone
              </h2>
              <p>
                If you are looking at blank cassettes on the web, you may be
                very confused at the difference in price. You may see some for
                as low as $.17 each.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="other-feature-item">
              <i class="ti-key"></i>
              <h4>Lifetime Access</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                  do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                  amet consec tetur adipisicing elit, sed do eiusmod tempor
                  incididunt labore.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt--160">
            <div class="other-feature-item">
              <i class="ti-files"></i>
              <h4>Source File Included</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                  do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                  amet consec tetur adipisicing elit, sed do eiusmod tempor
                  incididunt labore.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt--260">
            <div class="other-feature-item">
              <i class="ti-medall-alt"></i>
              <h4>Student Membership</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                  do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                  amet consec tetur adipisicing elit, sed do eiusmod tempor
                  incididunt labore.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="other-feature-item">
              <i class="ti-briefcase"></i>
              <h4>35000+ Courses</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                  do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                  amet consec tetur adipisicing elit, sed do eiusmod tempor
                  incididunt labore.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt--160">
            <div class="other-feature-item">
              <i class="ti-crown"></i>
              <h4>Expert Mentors</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                  do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                  amet consec tetur adipisicing elit, sed do eiusmod tempor
                  incididunt labore.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt--260">
            <div class="other-feature-item">
              <i class="ti-headphone-alt"></i>
              <h4>Live Supports</h4>
              <div>
                <p>
                  Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                  do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                  amet consec tetur adipisicing elit, sed do eiusmod tempor
                  incididunt labore.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ End Feature Area ================= -->

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Top Products</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
							 required="" type="email">
							<button class="click-btn btn btn-default text-uppercase">subscribe</button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->
</template>
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
</body>

</html>