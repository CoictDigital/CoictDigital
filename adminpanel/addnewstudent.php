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
</head>

<body class="page-contact">

 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Add New Student</h2>
       
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
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Student Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="reg_no" id="reg_no" placeholder="Student Registration Number" required>
                </div>
              </div>
              <div class="row p-2">
                <div class="col-md-6 form-group">
                <select class="form-select" aria-label="Default select example" name="study_year" required>
					 <option>Study Year</option>
					 <option>1</option>   
                     <option>2</option> 
                     <option>3</option>  
				   </select>
                 
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <select class="form-select" aria-label="Default select example" name="student_programme" required>
					 <option>Student Programme</option>
					 <option>BSC IN CS</option>   
                     <option>BSC IN CEIT</option> 
                     <option>BSC IN BIT</option>  
				   </select>
                </div>
              </div>
              <div class="row p-2">
              <div class="form-group mt-3">
              <input type="text" name="password" class="form-control" id="password" placeholder="Set Password" required>
              </div>
              </div>
             
              <div class="text-center">
                <button type="submit" class="btn-get-started" name="addnewstudent" value="addnewstudent">Add</button>
            </div>
            </form>

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