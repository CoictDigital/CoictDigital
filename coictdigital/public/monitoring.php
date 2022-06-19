<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once("../includes/functions.php");
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");
  require_once ("../includes/monitoringfunctions.php");
  require_once("../includes/db.php");

  
  if (isset($_GET['courseCode'])) {
    $courseCode = $_GET['courseCode'];

    $result1 = fetchviewresult($courseCode);
    $result2 = fetchmonitoringresults($courseCode);

    $row = $result1;
    $row = $result2;

    //$studentProgrammes = fetchStudentProgrammes($courseCode);
} else {
    header('Location: ./monitoringresults.php');
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
    <!-- ======= Main  Section ======= -->
    <section id="" class="services">
      <div class="container-fluid">
        <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Quality Assurance Bureau (QAB)</h3>
          <h3>Teaching and Learning Monitoring</h3>
          
        </div>
      </div>

      <div class="p-4">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Department of Computer Science and Engineering</p>
              
            </div>
          </div>
        </div>
      </div>


      <div class="p-4">
        <div class="">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Teaching and Learning Monitoring result</p>
             
            </div>

            <?php
            //fetching monitoing data
            
            $couses = fetchCoursecode($courseCode);
            $courseRes = [];
            if ($couses->num_rows == 0) {
              echo "<b> No courses found for those filters</b>";
            } else {
            
              while ($row = $couses->fetch_assoc()) {
                $row["totalResponses"] = getmonitoringResponse($row["course_code"]);
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
                            <?php echo $course["course_code"] . " - " . $week["week"]; ?>
                            <p class="">
                            <?php

                            echo $course["totalResponses"];
                           echo  $course["totalResponses"] > 1 ? " Responses" : " Response";

                            ?>

                          </p>
                          </p>
                          
                        </div>
                        <div class="col-2">
                          <a href="./monitoringresults.php?<?php
                                                            echo "courseCode=" . $week["week"];


                                                            ?>" class="btn btn-primary">View</a>
                        </div>
                      </div>
                    </div>
                  </div>


                <?php

                }
                ?>
              </div>
            <?php
            

              }
            ?>


          </div>
        </div>
    </section>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

    <script>
      function changeVal(event) {

        //var year = document.getElementById('changeYear').value
        //var prog = document.getElementById("changeProg").value;
        var sem = document.getElementById('changeSem').value
        var courseCode = document.getElementById("changecourseCode").value;
        var defaultSem = 'Semester'
        var defaultcourseCode = "course code"
        //var defaultYear = "Study Year"


        var address = window.location.href.split("?")[0]

        
      }

      function changecourseCode(event) {
        course code = event.target.value
        location.href = window.location.href + "?course code=" + course code
      }

      function changeSemester(event) {
        semester = event.target.value
        location.href = window.location.href + "?semester=" + semester

      }
    </script>

</body>

</html>