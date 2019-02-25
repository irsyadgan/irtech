<!DOCTYPE html>
<html lang="zxx" class="no-js">

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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans" >

  <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
    
      <script type="text/javascript">
        $(document).ready(function(){

          $("#but_submit").click(function(){
            var username = $("#username").val().trim();
            var password = $("#password").val().trim();
            var information = $("#information").val().trim();

            if( username != "" && password != "" && information != ""){
              $.ajax({
                url:'3checkregistration.php',
                type:'post',
                data:{username:username,password:password,information:information},
                  success:function(response){
                    var msg = "";
                    if(response == 1){
                      window.location = "1home.php";
                      msg = "response 1";
                    }else if(response == 0) {
                      alert("invalid username and password");
                      msg = "Invalid username and password!";
                    }
                    else {
                      alert("something not rihgt");
                      msg = "something not right";
                    }
                    //$("#message").html(msg);
                    $("#message").html(response);
                  }
              });
            }
            
            else {
              alert("Please fill the username and password");
              $("#message").html("Please fill the username and password")
                .css("font-style", "italic")
                .css("color", "red");
            }
          });

        });
      </script>
</head>

<body>
  <!-- ================ Start Registration Area ================= -->
  <section class="registration-area login-area">
    <div class="container">
      <div class="row align-items-end">
        <div class="offset-lg-3 col-lg-4 col-md-6">
          <div class="course-form-section login-section">
            <h1 class="font-judul login-title">SIGN UP</h1>
            <p class="login-welcome">SIGN UP</p>
            <form class="course-form-area contact-page-form course-form text-right" id="myForm" method="post">
              <div class="form-group col-md-12" id="message"></div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control login-form" id="username" name="username" placeholder="Username" onfocus="this.placeholder = '' " onblur="this.placeholder = 'Username'">
              </div>
              <div class="form-group col-md-12">
                <input type="password" class="form-control login-form" id="password" name="password" placeholder="Password" onfocus="this.placeholder = '' " onblur="this.placeholder = 'Password'">
              </div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control login-form" id="information" name="information" placeholder="Information" onfocus="this.placeholder = '' " onblur="this.placeholder = 'Information'">
              </div>
              <div class="col-lg-12 text-center">
                <input type="button" class="login-btn text-uppercase" value="SIGN UP" id="but_submit"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Registration Area ================= -->

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