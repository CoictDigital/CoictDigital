<!DOCTYPE html>
<html lang="en">

<head>
  <?php


  require_once("../includes/functions.php");
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");



  if (isset($_SESSION["evaluationFilled"])) {
    $partA = $_SESSION["evaluationFilled"];
    //check if user has already filled evaluation

    $userFilledEvaluation = checkIfUserFilledEv($_SESSION["userData"]["id"],  $partA["course_code"]);

    if ($userFilledEvaluation) {
      $_SESSION["messageEvFilled"] = "You have already filled evaluation form for this course";
      header("Location: ./evaluation1.php");
    }

    echo "";
  } else {
    header("Location: evaluation1.php");
    // header("Location: ./evaluation1.php");
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
  <!-- ======= Header ======= -->

  <main id="main">

    <!-- ======= Form Section ======= -->
    <section id="evaluation" class="services">
      <div class="container-fluid">
        <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Quality Assurance Bureau (QAB)</h3>
          <h3>Student Course Evaluation Form</h3>
          <h2>Undergraduate Programmes</h2>
        </div>

        <div class="p-4">

          <div class="form-group row">
            <h5>Part A: The Participants</h5>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>COURSE CODE: <?php echo $partA["course_code"]; ?></p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>DEPARTMENT: <?php echo $partA["department"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>COURSE TITLE: <?php echo $partA["course_title"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>COLLEGE: <?php echo $partA["college"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>INSTRUCTOR: <?php echo $partA["instructor"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>STUDENTS PROGRAMME: <?php echo $_SESSION["userData"]["student_programme"]; ?>  </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>LECTURE VENUE: <?php echo $partA["venue"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>STUDY YEAR: <?php echo $_SESSION["userData"]["study_year"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>CLASS SIZE: <?php echo $partA["class_size"]; ?> </p>
            </div>            
          </div>
          
          <form action="./../login.php" method="POST">
            <div class="form-group row">
              <h5>Please rate the instructor and the course appropriately.Put a tick in the appropiate box found on the extreme right.</h5>
            </div>

            <div class="form-group row">
              <div class="centre">
                <table class="table table-sm">
                  <thead class="table-secondary">
                    <tr>
                      <th scope="col">Part B: The Instructor</th>
                      <th scope="col">Excellent</th>
                      <th scope="col">Very Good</th>
                      <th scope="col">Satisfactory</th>
                      <th scope="col">Poor</th>
                      <th scope="col">Very Poor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1. Instructor's preparedness on the subject matter</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="5" id="flexRadioDefault"></td>
                    </tr>
                    <tr>
                      <td>2. Instructor's possession of up-to-date skills and knowledge in the subject matter</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="1" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="5" id="flexRadioDefault"></td>
                    </tr>
                    <tr>
                      <td>3. Instructor's mode of delivery of the subject matter(techniques and styles)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>4. Instructor's management of time during teaching</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>5. Instructor's fairness in grading of assignments and tests against marking scheme</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>6. Instructor's capacity to provide timely feedback on assigments and tests(within 2 weeks)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>7. Instructor's attendance in the class</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>8. Instructor's availability for consultations</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>9. Manner in which instructor interacts with students in class?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>10. Generally, how do you rate the competency of the instructor to meet your learning satisfaction?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="5" id="flexRadioDefault1"></td>
                    </tr>

                  </tbody>
                </table>

                <p>11. Instructor observed or complied with UDSM Sexual Harassment Code?</p>

                <div class="form-check col-sm-1">
                  <input class="form-check-input" type="radio" name="flexRadioDefault11" value="1" id="flexRadioDefault1">
                  <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check col-sm-1">
                  <input class="form-check-input" type="radio" name="flexRadioDefault11" value="2" id=" flexRadioDefault1">
                  <label class="form-check-label">No</label>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="4" name="harrassmentExplanation" value="" placeholder="If the answer is No, explain how:"></textarea>
                </div>

                <table class="table table-sm">
                  <thead class="table-secondary">
                    <tr>
                      <th scope="col">Part C: The Course</th>
                      <th scope="col">Excellent</th>
                      <th scope="col">Very Good</th>
                      <th scope="col">Satisfactory</th>
                      <th scope="col">Poor</th>
                      <th scope="col">Very Poor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>12. How clear was the objective of the course</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>13. How well was the course content coverage</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>14. How well was the mode of assessment?(e.g sufficient tests, assignments, timed essays)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>15. How well were the teaching methods(Class participation, demonstration, etc )</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>16. How well(updated) were the lecture notes and handouts?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>17. How well did the course link theory and practise?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>18. How adequate were the tutorials, seminars and practicals</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>19. Generally, how do you rate the relevance of the course to meet your expectations?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" value="1" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" value="5" id="flexRadioDefault1"></td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>


            <div class="form-group">
              <!-- <a href="#evaluationModal" data-toggle="modal" data-target="#evaluationModal"> -->
              <button type="submit" class="mx-auto button1" name="evaluationQn" value="submit">Submit</button>
            </div>



          </form>
        </div>

        <!-- fading evaluation submit after response-->
        <div class="modal fade" id="evaluationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button> -->
              </div>
              <div class="modal-body text-center">
                <p>Thank you for your response. </p>
                <p>You and other <?php echo ($_SESSION["studentFilledCount"] - 1);
                                  echo $_SESSION["studentFilledCount"] - 1 > 1 ?  " students " : " student "   ?>have filled this form.</p>

                <button type="submit" class="button"><a href="./index.php">Exit</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Form Section -->


  </main>
  <!-- End #main -->

  <?php

  require_once("./../includes/scripts.php");
  ?>

  <?php if (isset($_SESSION["studentFilledCount"])) { ?>
    <script>
      $("#evaluationModal").modal('show')
    </script>
  <?php  } ?>

</body>

</html>