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
<?php
  //require_once("../includes/functions.php");
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");
  require_once ("../includes/monitoringfunctions.php");
  require_once("../includes/db.php");
  require_once("../includes/leftNav.php");

   if (isset($_GET['courseCode'])) {
       $courseCode = $_GET['courseCode'];

       $result1 = fetchviewresult($courseCode);
       $result2 = fetchmonitoringresults($courseCode);

       $row = $result1;
       $row = $result2;

       //$studentProgrammes = fetchStudentProgrammes($courseCode);
   } else {
       header('Location: ./index.php');
   }
  ?>

  <!-- sql query for fetching data -->
<?php 
  $sql = "SELECT * FROM teachingmonitoring_questions, courses 
  WHERE courses.course_code = teachingmonitoring_questions.course_code 
  AND teachingmonitoring_questions.course_code = '$courseCode'";
 //$results = mysqli_query($conn, $sql);
 $result = $conn->query($sql);// or die($conn->error);
  $row = $result->fetch_assoc();

  
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
      
      
      <!-- card table -->
      
      <div class="p-4">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Department of Computer Science and Engineering</p>
              
            </div>
          </div>
        </div>
      </div>

      <!-- result -->

      <div class="p-4">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Teaching and Learning monitoring results</p>
          </div>
<!-- 
            fetch monitoring data here -->

                 <div class="card mb-1">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-10">
                        
                          <p class=""><?php echo $courseCode["course_code"] . " - " . $courseCode["week"]; ?></p>
                          
                        </div>

                        <!-- view button -->
                        <div class="col-2">
                          <a href="./monitoringresults.php?<?php echo "courseCode=" . $courseCode["course_code"];?>" class="btn btn-primary">View</a>
                        </div>
                      </div>
                    </div>


                  </div>
           

          </div>
        </div>
      </div>



      
</section>
<main>

</body>
</html>