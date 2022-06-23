<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Coict Digital-Admin panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <?php
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");
    require_once("../includes/db.php");
    require_once("../includes/functions.php");
    require_once("../includes/scripts.php");
    ?>
    
</head>

<body class="page-services">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">CoICT Digital</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" >Dashboard</a></li>
          <li><a href="students.php">Students</a></li>
          <li><a href="instructors.php">Instructors</a></li>
          <li><a href="alumni.php" class="active">Alumni</a></li>
          <li><a href="courses.php">Courses</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Alumni</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Alumni</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">


        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-laptop" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Computer Science</a></h4>
              <?php 
          $query ="SELECT COUNT(*) AS number_of_students FROM users WHERE student_programme ='BSC IN CS'";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_students"];
          if($result->num_rows> 0){
    ?>
              <p class="description"><?php echo $count; } ?> total alumni</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-motherboard" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Computer Engineering and IT</a></h4>
              <?php 
          $query ="SELECT COUNT(*) AS number_of_students FROM users WHERE student_programme ='BSC IN CEIT'";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_students"];
          if($result->num_rows> 0){
    ?>
              <p class="description"><?php echo $count; } ?> total alumni</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Business in IT</a></h4>
              <?php 
          $query ="SELECT COUNT(*) AS number_of_students FROM users WHERE student_programme ='BSC IN BIT'";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_students"];
          if($result->num_rows> 0){
    ?>
              <p class="description"><?php echo $count; } ?> total alumni</p>
            </div>
          </div><!-- End Service Item -->

         
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Cards Section ======= -->
    <section id="services-cards" class="services-cards">
      <div class="container">

        <div class="row gy-4">
        <div class="p-4">
        <h4 class="text-center">List of all alumni</h4>
      
 <!----------------Alumni List-------------------------->  
<script>
      $(document).ready(function () {
      $('#myTable4').DataTable();
  });
    </script>  
<div class="p-4">
       <div class="row">
        <div class="card">
        <div class="">
            
            <div class="card-body">
      
     <table id="myTable4" class="table table-sm" cellspacing="0" width="100%">
  <thead class="table-secondary">
    <tr>
    <th class="th-lg">Name</th>
    <th class="th-lg">Email</th>
    <th class="th-lg">Action</th>
</tr>
  </thead>
  <tbody>
  <?php   
              
                $query ="select * from alumni";
                $result = $conn->query($query);
                 if($result->num_rows> 0){
                $alumnis= mysqli_fetch_all($result, MYSQLI_ASSOC);   
                 
                ?>
                  <tr>
                  <?php 
                      foreach ($alumnis as $alumni) {

                    ?>
                  <td ><?php echo $alumni['alumni_name']; ?></td>
                  <td ><?php echo $alumni['email']; ?></td>
                  <!-----crud icons ------->
                  <td>                    
                  <a href="updatealumni.php?<?php echo "alumniId=" . $alumni['id']; ?>" data-toggle="modal" data-target="#editModal"><i class="bi bi-pencil-square" style="color: #1335f5;"></i></a>  
                    <a href="#editModal" data-toggle="modal" data-target="#editModal"><i class="bi bi-trash" style="color: #d90769;"></i></a> 
                                      
                  </td>
                  </tr> 
                  <?php }
                        }
                 ?> 
                </tbody>
</table>
</div>
       </div>
       </div>
       </div>

       </div>
  

        </div>

      </div>
    </section><!-- End Services Cards Section -->



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