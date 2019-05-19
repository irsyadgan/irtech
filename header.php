<header class="navigation-header">
  <div class="navigation-bar">
    <div class="navigation-brand">
      <a href="index.php">
        <img class="logo" src="img/kursus/logo.png" alt="logo"/>
      </a>
      <a class="text" href="index.php">
        <h3 class="text-white font-judul">TeSchool</h3>
      </a>
    </div>
    <div class="navigation-nav">
      <div class="dropdown">
        <a class="dropdown-toggle text-white" data-toggle="dropdown">
            Kategori
        </a>
        <div class="dropdown-content">
          <a href="public-courses.php">Arduino</a>
          <a href="#">STM32 F4</a>
        </div>
      </div>
      <a href="index.php">Beranda</a>
      <a href="index.php">Tentang</a>
      <a class="lnr lnr-magnifier navigation-search" id="navigation-search"></a>
      
      <?php
        // Check session has been started or not
        if(session_status() == PHP_SESSION_NONE){
          session_start();
        }
        // Check user login or not
        if(!isset($_SESSION["uname"]))
        {
          echo '<a href="login.html">Log In</a>
          <a href="signup.html">Sign Up</a>';
          
        }
        else if(isset($_SESSION["uname"]))
        {
          echo '
          <a href="mycourses.php">Kursus Saya</a>
          <a href="home.php">Profile</a>
          <a href="index.php?but_logout=1">Logout</a>';
        }

        // logout
        if(isset($_GET['but_logout'])){
          session_destroy();
          header('Location: index.php');
        }

      ?>
    </div>
  </div>
  <div class="navigation-search-input navigation-search-box" id="navigation-search-input-box">
    <div class="container">
      <form action="publiccourses.php" class="d-flex justify-content-between" method="post">
        <input name="searchInput" type="text" class="form-control" id="navigation-search-input" placeholder="Search Here" />
        <button type="submit" class="btn"></button>
        <span class="lnr lnr-cross" id="navigation-close-search" title="Close Search"></span>
      </form>
    </div>
  </div>
</header>

<script src="js/irsyad.js"></script>