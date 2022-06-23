<!DOCTYPE html>
<html lang="en">

<head>
  <?php

  require_once("./../includes/functions.php");
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

<link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->

  <!-- ======= Header ======= -->


 
  <section >
		<div class="container1 align-items-center" id="container">	
			<div class="row shadow">  

      <div class="col-sm-6 coict-image">
			   <div class="coict-text">	
      
					<h4>Welcome!</h4>
      
					<p><?php
               echo $_SESSION["userData"]["name"];
              ?> 
              <br>
              <?php
              echo $_SESSION["userData"]["student_programme"];
              ?>
            </p>
			   </div>
			</div>
	
	
		<div class="col-sm-6 p-5">  
    <div class="profile">
      <img src="../assets/img/udsmlogo.jpg" alt="" class="img-fluid rounded-circle">
    </div>  
			<form action="./../login.php" method="POST">
				<p class="text-center pt-3">Please select course to proceed with evaluation</p>
  
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
				   <button type="submit" class="button" name="proceedEvalutation" value="proceed">Proceed</button>
				</div>
				   <a href="../student/index.php">
					 <p class="text-center text-dark pt-3">Cancel</p>
				   </a>
			  </form>
	</div>
		
		  
		</div>
	</div>
  
		</section>
    <!-- fading evaluation submit after response-->
  <div class="modal fade" id="evaluationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">              
              <div class="modal-body text-center">
                <p>Thankyou, but you have already evaluated this course. </p>
               <button type="submit" class="button"><a href="student/index.php">Cancel</a></button>
              </div>
            </div>
          </div>
        </div>
   
    

        
 
 
  <script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>

   <!-- Vendor JS Files -->
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <?php

  require_once("./../includes/scripts.php");
  ?>

</body>

</html>