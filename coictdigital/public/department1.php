<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once("../includes/functions.php");
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");
  require_once("../includes/db.php");

  ?>
</head>

<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <?php
  require_once("../includes/leftNav.php");
  ?>

  <main id="main">
    <!-- ======= Main  Section ======= -->
    <section id="" class="services">
      <div class="container-fluid">
        <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Quality Assurance Bureau (QAB)</h3>
          <h3>Student Course Evaluation Results</h3>
          <h2>Undergraduate Programmes</h2>
        </div>
      </div>

         <div class="p-4">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Department of Computer Science and Engineering</p>
              <div class="row">
                <!--------------- Study year ----------------------------------------------------------------->
                <div class="col-sm-4">
                    <?php 
                       $query1 ="SELECT DISTINCT study_year FROM courses WHERE study_year>0";
                       $result1 = $conn->query($query1);
                       if($result1->num_rows> 0){
                       $years= mysqli_fetch_all($result1, MYSQLI_ASSOC);
                       }

                    ?>
                  <select class="form-select" name="year" aria-label="Default select example">
                    <option>Study Year</option>
                    <?php 
						         foreach ($years as $year) {
						        ?>
                    <option value="<?php echo $year['study_year']; ?>"><?php echo $year['study_year']; ?></option>>
                    <?php 
						        	}
						        ?>
                  </select>
                </div>
                <!--------------- Student programme ----------------------------------------------------------------->
                <div class="col-sm-4">
                <?php 
                       $query2 ="SELECT student_programme FROM programme";
                       $result2 = $conn->query($query2);
                       if($result2->num_rows> 0){
                       $programs= mysqli_fetch_all($result2, MYSQLI_ASSOC);
                       }

                    ?>
                  <select class="form-select" name="programme" aria-label="Default select example">
                    <option>Student's Programme</option>
                    <?php 
						         foreach ($programs as $program) {
						        ?>
                    <option value="<?php echo $program['student_programme']; ?>"><?php echo $program['student_programme']; ?></option>
                    <?php 
						        	}
						        ?>
                  </select>
                </div>
               <!--------------- Semester -----------------------------------------------------------------> 
                <div class="col-sm-4">
                <?php 
                       $query3 ="SELECT DISTINCT semester FROM courses";
                       $result3 = $conn->query($query3);
                       if($result3->num_rows> 0){
                       $semesters= mysqli_fetch_all($result3, MYSQLI_ASSOC);
                       }

                    ?>
                  <select class="form-select" name="semester" aria-label="Default select example">
                    <option selected>Semester</option>
                    <?php 
						         foreach ($semesters as $semester) {
						        ?>
                    <option value="<?php echo $semester['semester']; ?>"><?php echo $semester['semester']; ?></option>
                    <?php 
						        	}
						        ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
     

      <div class="p-4">
        <div class="">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Evaluation Results</p>
               </div>

               <?php                  
               //fetching evaluation data
               $couses = fetchCourse();
               $courseRes = [];
               while ($row = $couses->fetch_assoc()) {
               $row["totalResponses"] = getCourseResponse($row["course_code"]);
               array_push($courseRes, $row);
               }
               ?>

                <div class="container-fluid mb-3">
                  <?php 
                     foreach ($courseRes as $course) {
                  ?>
                <div class="card mb-1">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-10">
                        <p class="">
                          <?php echo $course["course_code"] . " - " . $course["course_title"]; ?>

                        </p>
                        <p class="">
                          <?php

                          echo $course["totalResponses"];
                          echo  $course["totalResponses"] > 1 ? " Responses" : " Response";

                          ?>

                        </p>
                      </div>
                      <div class="col-2">
                        <a href="./evaluationresults.php?<?php
                                                          echo "courseCode=" . $course["course_code"];


                                                          ?>" class="btn btn-primary">View</a>
                      </div>
                    </div>
                  </div>
                </div>


              <?php
              }
              ?>
            </div>
          </div>
        </div>
          </section>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>


</body>

</html>