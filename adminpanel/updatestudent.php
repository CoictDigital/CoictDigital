<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CoICT Digital-Admin Panel</title>
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


   
    ?>
</head>

<body class="page-contact">

 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">

      <div class="container position-relative d-flex flex-column align-items-center">          
        <h2>Update Student Details</h2>       
      </div>
    </div><!-- End Breadcrumbs -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="250">
</div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
          

            <form action="changes.php" method="post" role="form">
              <div class="row p-2">
              <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" value="<?php echo $student['name']; ?>" >
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="reg_no" id="reg_no" value="<?php echo $student['reg_no']; ?>" >
                </div>
              </div>
              <div class="row p-2">              
                <div class="col-md-6 form-group">
                <input type="text" name="study_year" class="form-control" id="study_year" value="<?php echo $student['study_year']; ?>" >
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="student_programme" id="student_programme" value="<?php echo $student['student_programme']; ?>">
                </div>
              </div>
              <div class="row p-2">
              <div class="form-group mt-3">              
              <input type="text" name="password" class="form-control" id="password" value="<?php echo $student['password']; ?>" >
              </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn-get-started" name="updatestudent" value="updatestudent">Update</button>
            </div>
            </form>
<?php  } ?>
          </div><!-- End Contact Form -->

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="250">
</div>

        </div>

      </div>
    </section><!-- End Contact Section -->

</main>


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