<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CoICT Digital-Already Filled</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <?php
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");
    require_once("../includes/db.php");
    require_once("../includes/functions.php");
    require_once("../includes/scripts.php");

    if (isset($_GET["studentId"])) {
      $id = $_GET["studentId"];
      $result = fetchStudentRow($id); 
      $student =  $result;
    }

   
    ?>
</head>

<body class="call-to-action">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">CoICT Digital</h1>
      </a>


    </div>
  </header><!-- End Header -->

 

  <main id="main">


    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" >
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
           
            <p>Are you sure you want to delete this student?</p>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
           <center> <form action="changes.php" method="POST">
           <input type="hidden" name="id" value="<?php echo $id; ?>"> 
            <button type="submit" class="btn-get-started mb-3" name="deletestudent" value="deletestudent">Delete</button>
            </form>
            <a href="students.php" class="btn-watch-video pt-2 align-items-center"><i class="bi bi-x-square"></i><span>Cancel</span></a>
            </center>
          </div>

          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->



  </main><!-- End #main -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

   
  <script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>

  <?php

  require_once("./../includes/scripts.php");
  ?>

</body>

</html>