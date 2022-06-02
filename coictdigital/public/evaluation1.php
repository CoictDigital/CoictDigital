<!DOCTYPE html>
<html lang="en">

<head>
  <?php

  require_once("./../includes/functions.php");
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");



  if (isset($_SESSION["evaluationFilled"])) {
    unset($_SESSION['evaluationFilled']);
  } else {
  }


  $programId = fetchProgramId($_SESSION["userData"]["student_programme"]);

  $programId = $programId["id"];
  $_SESSION["userData"]["programme_id"] = $programId;
  $courses = fetchStudentCourses($programId);
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
    <section>
      <div class="container">
        <div class="row justify-content-center align-items-center">

          <div class="col-sm-4">
            <form action="./../login.php" class="card p-4 rounded shadow details" method="POST">
              <p class="text-center pt-3">Please select course code to proceed</p>

              <div class="mb-3">
                <select class="form-select" name="course" aria-label="Default select example">
                  <option selected="selected"> Course code </option>
                  <?php

                  while ($row = mysqli_fetch_assoc($courses)) {
                  ?>

                    <option value="<?php echo $row["course_code"]; ?>"> <?php echo $row["course_code"]; ?> </option>



                  <?php
                  }

                  ?>

                </select>
              </div>

              <button type="submit" class="mx-auto button" name="proceedEvalutation" value="proceed">Proceed</button>
              <a href="./index.php">
                <p class="text-center pt-3">Cancel</p>
              </a>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>


  <?php

  if (isset($_SESSION["messageEvFilled"])) {
  ?>
    <script>
      alert("Sorry, you have already filled evaluation form for this course");
    </script>

  <?php
    unset($_SESSION['message']);   //to avoid unnecessary incorrect password alerts when one gaveup login in
  }
  ?>

  <script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>

</body>

</html>