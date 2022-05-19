<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");

  if (isset($_SESSION["evaluationResultsA"]) && isset($_SESSION["evaluationResultsB"])) {
    $partA = $_SESSION["evaluationResultsA"];
    $partB = $_SESSION["evaluationResultsB"];
  } else {
    header("Location: /coictdigital/public/department1.php");
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

    <section id="evaluation" class="services">
      <div class="container-fluid">
        <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Quality Assurance Bureau (QAB)</h3>
          <h3>Student Course Evaluation Form</h3>
          <h2>Undergraduate Programmes</h2>
        </div>

        <div class="container">
          <div class="row text-center">
            <h5>There are <span style="color: #0864af;"><?php echo $partA["totalResponse"]; ?></span> responses.</h5>
          </div>
          <div class="form-group row">
            <h5>Part A: The Participants</h5S>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Course Code: <?php echo $partA["course_code"]; ?></p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Department: <?php echo $partA["department"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Course Title: <?php echo $partA["course_title"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>College: <?php echo $partA["college"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Instructor's full name: <?php echo $partA["instructor"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Date: <?php echo $partA["date"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Lecture Venue: <?php echo $partA["venue"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Students programme: </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Class size: <?php echo $partA["class_size"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Study year: <?php echo $partA["study_year"]; ?> </p>
            </div>
          </div>

          <div class="form-group row">
            <h5>Part B: The Instructor</h5S>
          </div>

          <?php
          foreach ($partB as $key => $val) {
          ?>
            <div class="row">
              <div class="centre">
                <p> <?php echo $key . ". " . $val["question"]; ?> </p>
                <div class="chart">
                  <canvas id="<?php echo "chart-bars" . $key;  ?>" class="chart-canvas" height="250" width="200" style="border-radius: 10px;"></canvas>
                </div>
              </div>
            </div>
          <?php
          }

          ?>



          <div class="form-group">
            <button type="submit" class="mx-auto button2" name="submit">Print</button>
          </div>
        </div>
    </section><!-- End Form Section -->



  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <!-- <div class="copyright">
        &copy; Copyright <strong><span>coictdigital@udsm.co.tz</span></strong>
      </div> -->

    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    <?php
    foreach ($partB as $key => $val) { ?>
      var ctx = document.getElementById("<?php echo "chart-bars" . $key ?>").getContext("2d");


      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Excellent", "Very good", "Satisfactory", "Poor", "Very Poor"],
          datasets: [{
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 2,
            borderSkipped: false,
            backgroundColor: '#f6b418',
            data: [<?php echo $val["excellent"] .  ", " . $val["veryGood"] .  ", " . $val["satisfactory"] .  ", " . $val["poor"] .  ", " . $val["veryPoor"]; ?>],
            maxBarThickness: 20
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },

          scales: {
            y: {

              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#000"
              },
            },
            x: {

              ticks: {
                display: true,
                color: '#000',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    <?php }  ?>
  </script>



  <script src="https://kit.fontawesome.com/0cdec3100d.js" crossorigin="anonymous"></script>
  <!-- main js file -->
  <script src="assets/js/main.js"></script>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <!-- Chart Js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js"></script>

</body>

</html>