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

// 

// $result = mysql_query($query)

?>
  <!-- ======= Header ======= -->
  <?php
  require_once("../includes/leftNav.php");
  ?>
  <main id="main">
<!-- ======= Form Section ======= -->

<?php
// $sql = "SELECT * FROM courses";
// $sql = "SELECT * FROM teachingmonitoring_questions";
// $result=$conn->query($sql);
?>
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
          <?php                  
                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                 
                ?>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Course Code:<?php echo $row['course_code']; ?></p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Course Title:<?php echo $row['course_title']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Department: <?php echo $row['department']; ?></p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Semester:<?php echo $row['semester']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Venue:<?php echo $row['venue']; ?></p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Venue capacity:<?php echo $row['class_size']; ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Instructor:<?php echo $row['instructor']; ?></p>
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
        <div class="container">
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

<?php
                 }
                }
                ?>
</main>


          