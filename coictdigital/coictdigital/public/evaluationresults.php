<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once("../includes/functions.php");
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");


  if (isset($_GET["courseCode"])) {
    $courseCode = $_GET["courseCode"];
    $resultA = fetchProceedEvalutation($courseCode);
    $resultB = fetchCourseEvaluationResults($courseCode);
    $resultA = array_merge($resultA, ["totalResponse" => countEvaluationResponse($courseCode)]);
    $resultB = formatEvaluationQnResults($resultB);
    $partA = $resultA;
    $partB = $resultB;

    $studentProgrammes = fetchStudentProgrammes($courseCode);
  } else {
    header("Location: ./department1.php");
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
    <!-- ======= Results Section ======= -->
    <section id="evaluation" class="services">
      <div class="container-fluid">
        <div id="test">
        <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Quality Assurance Bureau (QAB)</h3>
          <h3>Student Course Evaluation Form</h3>
          <h2>Undergraduate Programmes</h2>
        </div>

        <div class="p-3">
          <div class="row">
            <h5>There are <span style="color: #0864af;"><?php echo $partA["totalResponse"]; ?></span> responses.</h5>
          </div>
          <div class="form-group row">
            <h5>Part A: The Participants</h5S>
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
              <p>STUDENTS PROGRAMME:
                <?php
                foreach ($studentProgrammes as $key => $value) {

                  echo $value;
                  if ($key < sizeof($studentProgrammes) - 1) {
                    echo ", ";
                  }
                }
                ?>
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>LECTURE VENUE: <?php echo $partA["venue"]; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>STUDY YEAR: <?php echo $partA["study_year"]; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>CLASS SIZE: <?php echo $partA["class_size"]; ?> </p>
            </div>
            
          </div>

          <div class="form-group row">
            <h5>Part B: The Instructor</h5S>
          </div>

          <?php
          foreach ($partB as $key => $val) {
            if ($key == 11) { //harassment qn
          ?>
              <div class="row">
                <div class="centre">
                  <p> <?php echo $key . ". " . $val["question"]; ?> </p>
                  <div class="chart">
                    <canvas id="myChart" class="chart-canvas"></canvas>
                  </div>
                </div>
              </div>
              <div class="mt-4 row">
                <div class="centre">
                  <!-- explanation for reason is no -->
                  <div class="alert alert-secondary">
                    <ul>
                      <?php
                      foreach ($val["harassment_explanation"] as $key2 => $val2) {
                        if ($val2 == "") {
                          continue;
                        }
                      ?>
                        <li> <?php echo $val2; ?> </li>

                      <?php
                      }

                      ?>
                    </ul>
                  </div>
                </div>
              </div>

            <?php
            } else {
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
            } //end of else
          } //end for each

          ?>

          <!-- pie chart and explanation box for the qtn on sexual harassment / its javascript is below with element id= mychart  -->

          <!-- end here -->

          </div>

          <div id="editor" class="form-group">
          <a href="javascript:generatePDF()"><button class="btn btn-primary" >Dowload Results</button></a>
          </div>
        </div>
    </section><!-- End Form Section -->
    

  </main>
  <!-- End #main -->

      <!-- download results script -->
  <script>
    function generatePDF() {
      var canvas = document.getElementById("test");      
	    var doc = new jsPDF('landscape');
  // page element which you want to print as PDF
	 doc.fromHTML(canvas,20,5, {'width': 200},
   
	 function(a) 
	  {
	   doc.save("HTML2PDF.pdf");
	 });
   }
  </script>

<!---------------- CHARTS --------------------------->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    <?php
    foreach ($partB as $key => $val) {

      if ($key == 11) { //harrassment qn
    ?>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'pie',

          // The data for our dataset
          data: {
            labels: ['Yes', 'No'],
            datasets: [{
              backgroundColor: ['#38574d', '#f6b418'],
              data: [<?php echo $val["excellent"] .  ", " . $val["veryGood"]; ?>],
            }]
          },

          // Configuration options go here
          options: {
            responsive: true,

          }
        });

      <?php

      } else {
      ?>
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
      <?php

      }

      ?>


    <?php }  ?>
  </script>

  <!-- html2pdf js file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>
  <!-- fontawesome js file -->
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
  <!-- html2canvas & jspdf Js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" ></script>


</body>

</html>