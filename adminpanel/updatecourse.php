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

    if (isset($_GET["courseId"])) {
        $coue = $_GET["courseId"];
      $result = fetchCourseRow($coue); 
      $courze =  $result;


   
    ?>
</head>

<body class="page-contact">

 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Update Course Details</h2>
       
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
              <div class="row p-2 form-group">
             
                  <input type="hidden" name="course_code" class="form-control" id="course_code" value="<?php echo $courze['course_code']; ?>">
                
                  <input type="text" class="form-control" name="course_title" id="course_code" value="<?php echo $courze['course_title']; ?>">
             
              </div>
              <div class="row p-2">
                <div class="col-md-6 form-group">
                  <input type="text" name="instructor" class="form-control" id="instructor" value="<?php echo $courze['instructor']; ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="assistant" id="assistant" value="<?php echo $courze['assistant']; ?>" >
                </div>
              </div>
              <div class="row p-2">
                <div class="col-md-6 form-group">
                  <input type="text" name="venue" class="form-control" id="venue" value="<?php echo $courze['venue']; ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="class_size" id="class_size" value="<?php echo $courze['class_size']; ?>">
                </div>
              </div>
              <div class="row p-2">
                <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="study_year" id="study_year" value="<?php echo $courze['study_year']; ?>">
                 
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="semester" id="semester" value="<?php echo $courze['semester']; ?>">
                </div>
              </div>
                           
              <div class="text-center">
                <button type="submit" class="btn-get-started" name="updatecourse" value="updatecourse">Update</button>
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