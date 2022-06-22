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

  if (isset($_SESSION["evaluationFilled"])) {
    $partA = $_SESSION["evaluationFilled"];    
    
  } 
else{
  header("Location: ../student/course.php");
}

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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/hero-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">
      <ol>
          <li><a href="index.php">Home</a></li>
          <li>Questionnaire</li>
        </ol>
       </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Course Selection ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">

<!-- ======= Form Section ======= -->
<section id="evaluation" class="">
      <div class="container-fluid">
        <div class="section-title text-center">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Quality Assurance Bureau (QAB)</h3>
          <h3>Student Course Evaluation Form</h3>
          <h3>Undergraduate Programmes</h3>
        </div>

        <div class="p-4">

          <div class="form-group row table-secondary">
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
              <h5>Please rate the instructor and the course below appropriately.Put a tick in the appropiate box found on the extreme right.</h5>
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
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="1" id="flexRadioDefault" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault1" value="5" id="flexRadioDefault"></td>
                    </tr>
                    <tr>
                      <td>2. Instructor's possession of up-to-date skills and knowledge in the subject matter</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="1" id="flexRadioDefault" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="2" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="3" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="4" id="flexRadioDefault"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault2" value="5" id="flexRadioDefault"></td>
                    </tr>
                    <tr>
                      <td>3. Instructor's mode of delivery of the subject matter(techniques and styles)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault3" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>4. Instructor's management of time during teaching</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault4" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>5. Instructor's fairness in grading of assignments and tests against marking scheme</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault5" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>6. Instructor's capacity to provide timely feedback on assigments and tests(within 2 weeks)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault6" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>7. Instructor's attendance in the class</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault7" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>8. Instructor's availability for consultations</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault8" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>9. Manner in which instructor interacts with students in class?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault9" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>10. Generally, how do you rate the competency of the instructor to meet your learning satisfaction?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault10" value="5" id="flexRadioDefault1"></td>
                    </tr>

                  </tbody>
                </table>

                <p>11. Instructor observed or complied with UDSM Sexual Harassment Code?</p>

                <div class="form-check col-sm-1">
                  <input class="form-check-input" type="radio" name="flexRadioDefault11" value="1" id="flexRadioDefault1" required>
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
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault12" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>13. How well was the course content coverage</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault13" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>14. How well was the mode of assessment?(e.g sufficient tests, assignments, timed essays)</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault14" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>15. How well were the teaching methods(Class participation, demonstration, etc )</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault15" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>16. How well(updated) were the lecture notes and handouts?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault16" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>17. How well did the course link theory and practise?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault17" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>18. How adequate were the tutorials, seminars and practicals</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" value="1" id="flexRadioDefault1" required></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" value="2" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" value="3" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" value="4" id="flexRadioDefault1"></td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault18" value="5" id="flexRadioDefault1"></td>
                    </tr>
                    <tr>
                      <td>19. Generally, how do you rate the relevance of the course to meet your expectations?</td>
                      <td><input class="form-check-input" type="radio" name="flexRadioDefault19" value="1" id="flexRadioDefault1" required></td>
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
              
              <div class="modal-body text-center">
                <p>Thank you for your response. </p>
                <p>You and other <?php echo ($_SESSION["studentFilledCount"] - 1);
                                  echo $_SESSION["studentFilledCount"] - 1 > 1 ?  " students " : " student "   ?>have filled this form.</p>

                <button type="submit" class="button"><a href="index.php">Exit</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Form Section -->


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  
  <?php

  require_once("./../includes/scripts.php");
  ?>

  <?php if (isset($_SESSION["studentFilledCount"])) { ?>
    <script>
      $("#evaluationModal").modal('show')
    </script>
  <?php  } ?>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>