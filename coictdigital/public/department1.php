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
                $_year = isset($_GET["year"]) ? $_GET["year"] : "";
                $_sem = isset($_GET["sem"]) ? $_GET["sem"] : "";
                $_prog = isset($_GET["prog"]) ? $_GET["prog"] : "";

                $query1 = "SELECT DISTINCT study_year FROM courses WHERE study_year>0";
                $result1 = $conn->query($query1);
                if ($result1->num_rows > 0) {
                  $years = mysqli_fetch_all($result1, MYSQLI_ASSOC);
                }

                ?>
                <select class="form-select" id="changeYear" name="year" aria-label="Default select example" onchange="changeVal(event)">
                  <option>Study Year</option>
                  <?php
                  foreach ($years as $year) {
                  ?>
                    <option <?php echo $_year == $year['study_year'] ? "selected" : "" ?> value="<?php echo $year['study_year']; ?>"><?php echo $year['study_year']; ?></option>>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <!--------------- Student programme ----------------------------------------------------------------->
              <div class="col-sm-4">
                <?php
                $query2 = "SELECT student_programme FROM programme";
                $result2 = $conn->query($query2);
                if ($result2->num_rows > 0) {
                  $programs = mysqli_fetch_all($result2, MYSQLI_ASSOC);
                }

                ?>
                <select class="form-select" name="programme" aria-label="Default select example" id="changeProg" onchange="changeVal(event)">
                  <option>Student's Programme</option>
                  <?php
                  foreach ($programs as $program) {
                  ?>
                    <option <?php echo $_prog == $program['student_programme'] ? "selected" : "" ?> value="<?php echo $program['student_programme']; ?>"><?php echo $program['student_programme']; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <!--------------- Semester ----------------------------------------------------------------->
              <div class="col-sm-4">
                <?php
                $query3 = "SELECT DISTINCT semester FROM courses";
                $result3 = $conn->query($query3);
                if ($result3->num_rows > 0) {
                  $semesters = mysqli_fetch_all($result3, MYSQLI_ASSOC);
                }

                ?>
                <select class="form-select" name="semester" aria-label="Default select example" id="changeSem" onchange="changeVal(event)">
                  <option>Semester</option>
                  <?php
                  foreach ($semesters as $semester) {
                  ?>
                    <option <?php echo $_sem == $semester['semester'] ? "selected" : "" ?> value="<?php echo $semester['semester']; ?>"><?php echo $semester['semester']; ?></option>
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
            $couses = fetchCourse($_year, $_prog, $_sem);
            $courseRes = [];
            if ($couses->num_rows == 0) {
              echo "<b> No courses found for those filters</b>";
            } else {
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
            <?php
            }


            ?>


          </div>
        </div>
    </section>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

    <script>
      function changeVal(event) {

        var year = document.getElementById('changeYear').value
        var prog = document.getElementById("changeProg").value;
        var sem = document.getElementById('changeSem').value
        var defaultSem = 'Semester'
        var defaultProg = "Student's Programme"
        var defaultYear = "Study Year"


        var address = window.location.href.split("?")[0]

        //if only one is selected
        if (year != defaultYear && prog === defaultProg && sem === defaultSem) { //only year given
          location.href = address + '?year=' + year
        } else if (prog !== defaultProg && year === defaultYear && sem === defaultSem) { //only prog given
          location.href = address + '?prog=' + prog
        } else if (sem !== defaultSem && year === defaultYear && prog === defaultProg) { // only sem given
          location.href = address + '?sem=' + sem
        } else if (prog !== defaultProg && year !== defaultYear && sem === defaultSem) { //only sem not given
          location.href = address + '?year=' + year + '&prog=' + prog
        } else if (prog !== defaultProg && sem !== defaultSem && year === defaultYear) { //only year not given
          location.href = address + '?prog=' + prog + '&sem=' + sem
        } else if (year !== defaultYear && sem !== defaultSem && prog === defaultProg) { // only prog not given
          location.href = address + '?year=' + year + '&sem=' + sem
        } else if (year !== defaultYear && sem !== defaultSem && prog !== defaultProg) { //all given
          location.href = address + '?year=' + year + '&prog=' + prog + '&sem=' + sem
        }




      }

      function changeProgramme(event) {
        programme = event.target.value
        location.href = window.location.href + "?programme=" + programme
      }

      function changeSemester(event) {
        semester = event.target.value
        location.href = window.location.href + "?semester=" + semester

      }
    </script>

</body>

</html>