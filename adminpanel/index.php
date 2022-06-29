<!DOCTYPE html>
<html lang="en">

<head>
<?php
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");
    require_once("../includes/db.php");
    require_once("../includes/functions.php");
    require_once("../includes/scripts.php");
    ?>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Coict Digital-Admin panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">CoICT Digital</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Dashboard</a></li>
          <li><a href="students.php">Students</a></li>
          <li><a href="instructors.php">Instructors</a></li>
          <li><a href="alumni.php">Alumni</a></li>
          <li><a href="courses.php">Courses</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-3">
          <h3 class="text-white" data-aos="fade-up">Management Information System</h3>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>This system manages course evaluation by students at the end of the semester, alumni 
            information once they graduate, monitors teaching and learning processes, allocation of courses and exam invigilators to staff in the college </p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="index.php" class="btn-get-started">Dashboard</a>
            <a href="./../logout.php" class="btn-watch-video d-flex align-items-center"><i class="bi bi-door-closed"></i><span>Exit</span></a>
          </div>

        </div>
        <div class="col-xl-1"></div>
        <div class="col-xl-8">
        <div class="row">

<div class="col-lg-3 col-md-6 shadow" data-aos="fade-up" data-aos-delay="100">
  <div class="team-member">
    <div class="member-img">
      <img src="assets/img/students.jpg" class="img-fluid" alt="">
      
    </div>
    <div class="member-info">
    <?php 
          $query ="SELECT COUNT(*) AS number_of_students FROM users WHERE role ='1'";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_students"];
          if($result->num_rows> 0){
    ?>
      <h5>Total students</h5>
      <span><?php echo $count; } ?></span>
    </div>
  </div>
</div><!-- End students -->

<div class="col-lg-3 col-md-6 shadow" data-aos="fade-up" data-aos-delay="200">
  <div class="team-member">
    <div class="member-img">
      <img src="assets/img/alumni.png" class="img-fluid" alt="">
     
    </div>
    <div class="member-info">
    <?php 
          $query ="SELECT COUNT(*) AS number_of_alumni FROM alumni";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_alumni"];
          if($result->num_rows> 0){
    ?>
      <h5>Total alumni</h5>
      <span><?php echo $count; } ?></span>
    </div>
  </div>
</div><!-- End alumni -->

<div class="col-lg-3 col-md-6 shadow" data-aos="fade-up" data-aos-delay="300">
  <div class="team-member">
    <div class="member-img">
      <img src="assets/img/instructors.jpg" class="img-fluid" alt="">
    
    </div>
    <div class="member-info">
    <?php 
          $query ="SELECT Distinct COUNT(instructor) AS number_of_instructors FROM courses WHERE instructor is not null";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_instructors"];
          if($result->num_rows> 0){
    ?>
      <h5>Total instructors</h5>
      <span><?php echo $count; } ?></span>
    </div>
  </div>
</div><!-- End instructors -->

<div class="col-lg-3 col-md-6 shadow" data-aos="fade-up" data-aos-delay="400">
  <div class="team-member">
    <div class="member-img">
      <img src="assets/img/courses.jpg" class="img-fluid" alt="">
     
    </div>
    <div class="member-info">
    <?php 
          $query ="SELECT Distinct COUNT(course_code) AS number_of_courses FROM courses WHERE course_code is not null";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_courses"];
          if($result->num_rows> 0){
    ?>
      <h5>Total courses</h5>
      <span><?php echo $count; } ?></span>
    </div>
  </div>
</div><!-- End courses -->

</div>

<!-- <div class="row pt-5 gy-4 about" data-aos="fade-up">
<h4 class="text-center">Students per year and degree programme</h4>
  <div class="col-6">
  <div class="content">          
                <p><i class="bi bi-check-circle-fill"></i> First year 75</p>
                <p><i class="bi bi-check-circle-fill"></i> Second year 75 </p>
                <p><i class="bi bi-check-circle-fill"></i> Third year 75 </p>
              
            </div>
  </div>
  <div class="col-6">
  <div class="content">             
                <p><i class="bi bi-check-circle-fill"></i> Computer science 75</p>
                <p><i class="bi bi-check-circle-fill"></i> Computer engineering and IT 75</p>
                <p><i class="bi bi-check-circle-fill"></i> Business IT 75</p>
              
            </div>
  </div>

</div>

<div class="row pt-">
 
</div>

<div class="row pt-2">
 
</div> -->


        </div>
      </div>



    </div>
  </section><!-- End Hero Section -->

 
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>