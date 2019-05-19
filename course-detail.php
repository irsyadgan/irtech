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
  <title>TeSchool</title>

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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans+Semi-Bold" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans" />
</head>

<body>
  <!-- ================ Start Header Area ================= -->
  <?php
    include_once 'header.php';
  ?>
  <!-- ================ End Header Area ================= -->

  <!-- ================ start banner Area ================= -->
  <section class=" course-detail-area">
    <div class="container">
      <div class="fullscreen align-items-center course-detail-text">
        <div class="background-biru teks course-detail-navigation">
          <a href="courses.php">Kursus</a> > <a>Dasar</a> > <a>Arduino</a>
        </div>
				<?php
					include_once 'backend/api/config/Database.php';
					include_once 'backend/object/Course.php';
					
					$var_id= "";
					$var_title= "";
					$var_rating_avg= "";
					$var_rating_total= "";
					$var_author= "";
					$var_student = "";
					$var_price = "";
					$var_content = "";
					$var_content_detail = "";
					$var_video_link = "";
					
					if ( isset($_GET["id"]) ) {
						$var_id = htmlspecialchars($_GET["id"]);
						
						$database = new Database();
						$db = $database->getConnection();
						
						// make sure data not empty
						$course = new Course($db);
						//set id
						$course->putDataOneParamID($var_id);
						// select all course
						$stmt = $course->courseSelectOne();
						// Count row
						$num = $stmt->rowCount();
						
						if($num > 0) {
							while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
								global $var_id,
									$var_title,
									$var_rating_avg,
									$var_rating_total,
									$var_author,
									$var_student,
									$var_price,
									$var_content,
									$var_content_detail,
									$var_video_link;
								
								$var_id = $row["id"];
								$var_title= $row["title"];
								$var_rating_avg= $row["rating_avg"];
								$var_rating_total= $row["rating_total"];
								$var_author= $row["author"];
								$var_student = $row["student"];
								$var_price = $row["price"];
								$var_content = $row["content"];
								$var_content_detail = $row["content_detail"];
								$var_video_link = $row["video_link"];
							}
						}
					}
				?>
        <div class="course-detail-banner-left">
					<?php
						echo "<p class=\"background-biru teks course-detail-judul\">";
							echo $var_title;
						echo "</p>";
					?>
          <p class="text-white font-judul course-detail-desc">
            TeSchool merupakan platform untuk Belajar Robotik, dari Indonesia, oleh Indonesia Untuk Indonesia
          </p>
					<?php
						echo "<span class=\"text-white course-detail-rating\">Rating $var_rating_avg ($var_rating_total Rating) Dibuat oleh $var_author";
						echo "</span>";
						echo "<span class=\"text-white course-detail-rating\">$var_student Pendaftar";
						echo "</span>";
					?>
        </div>
        <div class="course-detail-kotak">
          <div class="konten">
            <?php
							echo "<iframe width=\"465px\" height=\"260\" src=\"$var_video_link\" frameborder=\"0\" allowfullscreen></iframe>";
							echo "<h1 class=\"background-biru teks harga\">Rp$var_price</h1>";
						?>
            <button class="background-biru tombol tombol-beli">
              <p class="tombol-teks">Beli Sekarang</p>
            </button>
            <button class="tombol tombol-keranjang">
              <p class="tombol-teks">Tambah ke Keranjang</p>
            </button>
            <h1 class="background-biru teks isi-konten termasuk">
              Termasuk
            </h1>
						<p class="background-biru teks isi-konten">
							<?php
								echo "$var_content";
							?>
						</p>
          </div>
        </div>
        <span class="course-detail-komponen">
          <img src="img/kursus/course-detail-arduino.jpg" width="300px" height="auto">
        </span>
        <span class="course-list-materi">
          <div class="konten">
            <h1 class="background-biru teks yang-akan">
              Yang Akan Dipelajari
            </h1>
            <p class="background-biru teks isi-konten list-konten">
              <?php
								echo $var_content_detail;	
							?>
            </p>
          </div>
        </span>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->

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