<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once("../includes/functions.php");

  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");


  //fetching evaluation data
  $couses = fetchCourse();
  $courseRes = [];
  while ($row = $couses->fetch_assoc()) {
    $row["totalResponses"] = getCourseResponse($row["course_code"]);
    array_push($courseRes, $row);
  }


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

    <!-- ======= Form Section ======= -->
    <section id="" class="services">
      <div class="container-fluid">
        <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Quality Assurance Bureau (QAB)</h3>
          <h3>Student Course Evaluation Results</h3>
          <h2>Undergraduate Programmes</h2>
        </div>
      </div>

      <div class="container">
        <div class="">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Department of Computer Science and Engineering</p>
              <div class="row">
                <div class="col-sm-4">
                  <select class="form-select" name="year" aria-label="Default select example">
                    <option selected>Study Year</option>
                    <option value="1">I</option>
                    <option value="2">II</option>
                    <option value="3">III</option>
                    <option value="4">IV</option>
                  </select>
                </div>

                <div class="col-sm-4">
                  <select class="form-select" name="programme" aria-label="Default select example">
                    <option selected>Student's Programme</option>
                    <option value="BSc IN CS">BSc in Cs</option>
                    <option value="2">BSc in BIT</option>
                    <option value="3">BSc in CEIT</option>
                  </select>
                </div>

                <div class="col-sm-4">
                  <select class="form-select" name="semester" aria-label="Default select example">
                    <option selected>Semester</option>
                    <option value="1">I</option>
                    <option value="2">II</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container pt-4">
        <div class="">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Evaluation Results</p>
            </div>

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
                        <a href="#" class="btn btn-primary">View</a>
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