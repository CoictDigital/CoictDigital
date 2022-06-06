<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CoICT Digital</title>
  <link rel="shortcut icon" href="assets/img/favicon.jpg" type="image/x-icon">
  <meta name="title" content="Digital solutions services">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- css files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>
  <?php
require_once("../includes/db.php");

?>
  <!-- ======= Header ======= -->
  <?php
  require_once("../includes/leftNav.php");
  ?>
  <main id="main">
<!-- ======= Form Section ======= -->

<?php
// $sql = "SELECT * FROM courses";
$sql = "SELECT * FROM courses, teachingmonitoring_questions WHERE courses.course_code = teachingmonitoring_questions.course_code";
$result=$conn->query($sql);
// <?php echo $row['course_code']; ?>

<!-- <div class="row" >
  <div class="col-md-12">
   <span class="badge alert-success" style="float: right; width: 100px;">HOD</span>
  </div>
</div> -->

<section id="evaluation" class="services">        
 <div class="container-fluid">           
   <div class="section-title">          
     <h3>UNIVERSITY OF DAR ES SALAAM</h3>         
     <h3>Quality Assurance Bureau (QAB)</h3>
     <h3>Teaching and learning Monitoring</h3>      
   </div>
   <div class="container">
 
          <div class="form-group row">
            <h4>General information</h4>
          </div>
          
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Course Code:</p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Course Title:</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Department:</p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Semester:</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Venue:</p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Venue capacity:</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Instructor:</p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Number of students in class:</p>
            </div>
          </div>
<!-- attendance -->
          <h4>Attendance in class</h4>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Instructor's attendance state:</p>
            </div>
          </div>
          
<!-- //new div section -->
        
        </div>
        <div class="container" id="present">
          <!-- startingtime -->
          <h4>Time management</h4>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>The session </p>
            </div>
            <div class="row">
             <div class="col-sm-6 mb-1">
              <p>Reason to why the session started late:</p>
             </div>
            </div>
          </div>

          <h4>Teaching process details</h4>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Session type: </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Teaching mode used:</p>
            </div>
          </div>
<!-- medium of instruction -->
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Medium of instruction:</p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Teaching method used:</p>
            </div>
          </div>
<!-- teaching venue -->
          <h4>Teaching venue conditions</h4>
<!-- special matters -->
          <h4>Matters of immediate attention</h4>
          </div>

      </div>
</section>



<script src="https://kit.fontawesome.com/0cdec3100d.js" crossorigin="anonymous"></script>
   <!-- main js file -->
  <script src="assets/js/main.js"></script>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>



  
<!-- <?php                  
                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                 
                ?>

<?php
                 }
                }
                ?> -->
</main>


          