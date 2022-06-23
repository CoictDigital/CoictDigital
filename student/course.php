<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CoICT Digital</title>
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

require_once("../includes/functions.php");
require_once("../includes/headerContent.php");
require_once("../includes/sessionStuffs.php");
require_once("../includes/db.php");



if (isset($_SESSION["evaluationFilled"])) {
  unset($_SESSION['evaluationFilled']);
} else {
}

$programId = fetchProgramId($_SESSION["userData"]["student_programme"]);
// $programId = $programId["id"];
$_SESSION["userData"]["programme_id"] = $programId;
$programId = $programId["id"];

?>


</head>

<body class="page-contact">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <h1 class="d-flex align-items-center">CoICT Digital</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/course.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">
      <ol>
          <li><a href="index.php">Home</a></li>
          <li>Evaluation</li>
        </ol>
        <h3 class="text-white">Welcome! <span class="info-item"><?php echo $_SESSION["userData"]["name"]; ?></span> </h3>
        <p class="text-white">Please select course to proceed with evaluation.</p>
       

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Course Selection ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">


<div class="row course">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">

              <form action="./../login.php" method="POST">
  
				<div class="mb-3">
         <!----------------- computer science first year courses------------------------------------>
         <?php
             if ($_SESSION["userData"]["student_programme"] == "BSC IN CS" && $_SESSION["userData"]["study_year"] == "1") {
                      
                     
                      $query ="SELECT distinct programme_course.course_code 
                      FROM programme_course
                      INNER JOIN courses ON courses.course_code=programme_course.course_code WHERE programme_course.id_programme=1 AND courses.study_year=1";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                      }
          ?>
				   <select class="form-select" aria-label="Default select example" name="course_code" required>
					 <option>Course code</option>
						  <?php 
						  foreach ($options as $option) {
						  ?>
					 <option><?php echo $option['course_code']; ?> </option>
              <?php 
						  	}
					    ?>    
				   </select>
           <?php 
							}
						  ?>
              <!----------------- computer science second year courses------------------------------------>
              <?php
             if ($_SESSION["userData"]["student_programme"] == "BSC IN CS" && $_SESSION["userData"]["study_year"] == "2") {
                      
                     
                      $query ="SELECT distinct programme_course.course_code 
                      FROM programme_course
                      INNER JOIN courses ON courses.course_code=programme_course.course_code WHERE programme_course.id_programme=1 AND courses.study_year=2";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                      }
          ?>
				   <select class="form-select" aria-label="Default select example" name="course_code" required>
					 <option>Course code</option>
						  <?php 
						  foreach ($options as $option) {
						  ?>
					 <option><?php echo $option['course_code']; ?> </option>
              <?php 
						  	}
					    ?>    
				   </select>
           <?php 
							}
						  ?>
          <!----------------- computer science third year courses------------------------------------>
          <?php
             if ($_SESSION["userData"]["student_programme"] == "BSC IN CS" && $_SESSION["userData"]["study_year"] == "3") {
                      
                     
                      $query ="SELECT distinct programme_course.course_code 
                      FROM programme_course
                      INNER JOIN courses ON courses.course_code=programme_course.course_code WHERE programme_course.id_programme=1 AND courses.study_year=3";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                      }
          ?>
				   <select class="form-select" aria-label="Default select example" name="course_code" required>
					 <option>Course code</option>
						  <?php 
						  foreach ($options as $option) {
						  ?>
					 <option><?php echo $option['course_code']; ?> </option>
              <?php 
						  	}
					    ?>    
				   </select>
           <?php 
							}
						  ?> 
           <!----------------- computer engineering first year courses------------------------------------>
           <?php
             if ($_SESSION["userData"]["student_programme"] == "BSC IN CEIT" && $_SESSION["userData"]["study_year"] == "1") {
                      
                     
                      $query ="SELECT distinct programme_course.course_code 
                      FROM programme_course
                      INNER JOIN courses ON courses.course_code=programme_course.course_code WHERE programme_course.id_programme=2 AND courses.study_year=1";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                      }
          ?>
				   <select class="form-select" aria-label="Default select example" name="course_code" required>
					 <option>Course code</option>
						  <?php 
						  foreach ($options as $option) {
						  ?>
					 <option><?php echo $option['course_code']; ?> </option>
              <?php 
						  	}
					    ?>    
				   </select>
           <?php 
							}
						  ?> 
           <!----------------- computer engineering SECOND year courses------------------------------------>
           <?php
             if ($_SESSION["userData"]["student_programme"] == "BSC IN CEIT" && $_SESSION["userData"]["study_year"] == "2") {
                      
                     
                      $query ="SELECT distinct programme_course.course_code 
                      FROM programme_course
                      INNER JOIN courses ON courses.course_code=programme_course.course_code WHERE programme_course.id_programme=2 AND courses.study_year=2";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                      }
          ?>
				   <select class="form-select" aria-label="Default select example" name="course_code" required>
					 <option>Course code</option>
						  <?php 
						  foreach ($options as $option) {
						  ?>
					 <option><?php echo $option['course_code']; ?> </option>
              <?php 
						  	}
					    ?>    
				   </select>
           <?php 
							}
						  ?> 
         <!----------------- computer engineering THIRD year courses------------------------------------>
         <?php
             if ($_SESSION["userData"]["student_programme"] == "BSC IN CEIT" && $_SESSION["userData"]["study_year"] == "3") {
                      
                     
                      $query ="SELECT distinct programme_course.course_code 
                      FROM programme_course
                      INNER JOIN courses ON courses.course_code=programme_course.course_code WHERE programme_course.id_programme=2 AND courses.study_year=3";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                      }
          ?>
				   <select class="form-select" aria-label="Default select example" name="course_code" required>
					 <option>Course code</option>
						  <?php 
						  foreach ($options as $option) {
						  ?>
					 <option><?php echo $option['course_code']; ?> </option>
              <?php 
						  	}
					    ?>    
				   </select>
           <?php 
							}
						  ?>  
     <!----------------- BIT first year courses------------------------------------>
     <?php
             if ($_SESSION["userData"]["student_programme"] == "BSC IN BIT" && $_SESSION["userData"]["study_year"] == "1") {
                      
                     
                      $query ="SELECT distinct programme_course.course_code 
                      FROM programme_course
                      INNER JOIN courses ON courses.course_code=programme_course.course_code WHERE programme_course.id_programme=3 AND courses.study_year=1";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                      }
          ?>
				   <select class="form-select" aria-label="Default select example" name="course_code" required>
					 <option>Course code</option>
						  <?php 
						  foreach ($options as $option) {
						  ?>
					 <option><?php echo $option['course_code']; ?> </option>
              <?php 
						  	}
					    ?>    
				   </select>
           <?php 
							}
						  ?>  
         <!----------------- BIT second year courses------------------------------------>
     <?php
             if ($_SESSION["userData"]["student_programme"] == "BSC IN BIT" && $_SESSION["userData"]["study_year"] == "2") {
                      
                     
                      $query ="SELECT distinct programme_course.course_code 
                      FROM programme_course
                      INNER JOIN courses ON courses.course_code=programme_course.course_code WHERE programme_course.id_programme=3 AND courses.study_year=2";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                      }
          ?>
				   <select class="form-select" aria-label="Default select example" name="course_code" required>
					 <option>Course code</option>
						  <?php 
						  foreach ($options as $option) {
						  ?>
					 <option><?php echo $option['course_code']; ?> </option>
              <?php 
						  	}
					    ?>    
				   </select>
           <?php 
							}
						  ?>
       <!----------------- BIT third year courses------------------------------------>
     <?php
             if ($_SESSION["userData"]["student_programme"] == "BSC IN BIT" && $_SESSION["userData"]["study_year"] == "3") {
                      
                     
                      $query ="SELECT distinct programme_course.course_code 
                      FROM programme_course
                      INNER JOIN courses ON courses.course_code=programme_course.course_code WHERE programme_course.id_programme=3 AND courses.study_year=3";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                      }
          ?>
				   <select class="form-select" aria-label="Default select example" name="course_code" required>
					 <option>Course code</option>
						  <?php 
						  foreach ($options as $option) {
						  ?>
					 <option><?php echo $option['course_code']; ?> </option>
              <?php 
						  	}
					    ?>    
				   </select>
           <?php 
							}
						  ?>
          
				</div>      
  
				<div class="text-center">
				   <button class="btn-get-started" type="submit" name="proceedEvalutation" value="proceed">Proceed</button>                   
				</div>
                
				   <a href="index.php">
					 <p class="text-center text-dark pt-3">Cancel</p>
				   </a>
			  </form>
        </div>

        <div class="col-sm-4">
          <p></p>
        </div>
            </div>

       

       <!-- End Course selection -->

        </div>

      </div>
    </section><!-- End Contact Section -->

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

</body>

</html>