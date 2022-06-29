<header id="header">

<!-- Vendor CSS Files -->
<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet"> -->
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="../assets/img/udsmlogo.jpg" alt="" class="img-fluid rounded-circle">
    </div>

    <nav id="navbar" class="nav-menu navbar">
      <ul>

        <li><a href="index.php" class="nav-link scrollto" style="float:left;"> <i class="fa fa-home">  </i><span>Home</span></a></li>
        <li><a href="<?php
                      if ($_SESSION["userData"]["role"] == 2) {
                        echo "department1.php";
                      } else if ($_SESSION["userData"]["role"] == 3) {
                        echo "index.php";
                      }
                      ?>" class="nav-link scrollto" style="float:left;"><i class="fas fa-thin fa-dna"></i> <span>Course Evaluation</span></a></li>
        <li><a href="alumnirecords.php" class="nav-link scrollto" style="float:left;"><i class="fas fa-thin fa-clipboard"></i><span>Alumni Records</span></a></li>

        <li><a href="<?php
                      if ($_SESSION["userData"]["role"] == 2) {
                        echo "teachingresults.php";
                      } else if ($_SESSION["userData"]["role"] == 3) {
                        echo "Teachingmonitoring.php";
                      }
                      ?>" class="nav-link scrollto" style="float:left;"><i class="fas fa-thin fa-chalkboard"></i> <span>Teaching Monitoring</span></a></li>
                      
        <li><a href="<?php
                      if ($_SESSION["userData"]["role"] == 2) {
                        echo "courseallocation.php";
                      } else if ($_SESSION["userData"]["role"] == 3) {
                        echo "allocationdashboard.php";
                      }
                      ?>" class="nav-link scrollto" style="float:left;">  <i class="fas fa-thin fa-book"></i><span>Course Allocation</span></a></li>
        <li><a href="<?php
                      if ($_SESSION["userData"]["role"] == 2) {
                        echo "examinvigilation.php";
                      } else if ($_SESSION["userData"]["role"] == 3) {
                        echo "invigilationdashboard.php";
                      }
                      ?>" class="nav-link scrollto"style="float:left;"> <i class="fas fa-thin fa-file"></i><span>Exam Invigilation</span></a></li>
        <li><a href="./../logout.php" class="nav-link scrollto" style="float:left;"> <span>Logout</span></a></li>
      
      </ul>
    </nav><!-- .nav-menu -->
  </div>
  <script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
</header>