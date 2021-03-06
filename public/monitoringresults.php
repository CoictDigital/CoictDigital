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
   require_once '../includes/monitoringfunctions.php';
   require_once '../includes/db.php';
   require_once '../includes/leftNav.php'; 

   if (isset($_REQUEST["courseCode"])) {
    $courseCode = trim($_REQUEST["courseCode"]);
    $week = trim($_REQUEST["week"]);
    $result = fetchProceedmonitoring($courseCode, $week);

    $row = $result;
    
    //echo $courseCode;
  } else {
    header("Location: ./testmonitoring.php");
  }
   ?>
  <!-- ======= Header ======= -->


  <main id="main">

<!-- ======= Form Section ======= -->


<section id="evaluation" class="services">        
 <div class="container-fluid"> 
  <div id = "test">          
   <div class="section-title">          
     <h3>UNIVERSITY OF DAR ES SALAAM</h3>         
     <h3>Quality Assurance Bureau (QAB)</h3>
     <h3>Teaching and learning Monitoring</h3>      
   </div>
   <div class="p-3">
  
          <div class="form-group row">
            <h4>General information</h4>
          </div>
          
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Course Code: <?php echo $row['course_code']; ?></p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Course Title: <?php echo $row['course_title']; ?> </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Department: <?php echo $row['department']; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Semester: <?php echo $row['semester']; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Venue: <?php echo $row['venue']; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Week No: <?php echo $row['week']; ?></p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Instructor: <?php echo $row['instructor']; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Number of students in class: <?php echo $row['Number_of_students']; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Class size: <?php echo $row['class_size']; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Evaluation time: <?php echo $row['date']; ?> </p>
            </div> 
          </div>
<!-- attendance -->
          <h4>Instructor's attendance in class</h4>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p value = "<?php echo $row['attendance']; ?>" id ="instructorattendance">Attendance state: <?php echo $row['attendance']; ?> </p>
            </div>
          <div class="row">
            <div class="col-sm-6 mb-1" id = "absencereason">
              <p>Reason to instructor's absence in class: <?php echo $row['reason_for_absence']; ?>  </p>
            </div>
           </div>
  </div>
          
<!-- //new div section -->
        
        </div>
        <div class="p-3" id="instructorpresent">
          <!-- startingtime -->
          <h4>Time management</h4>

          <div class="row">
            <h6>Session duration:</h6>
            <div class="col-sm-6 mb-1">
              <p>Stating time: <?php echo $row['starting_time']; ?></p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Ending time: <?php echo $row['ending_time']; ?> </p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Session starting time: <?php echo $row['session_starting_time']; ?>  </p>
            </div>
            <div class="" >

             <div class="col-sm-6 mb-1" id ="startedlate" >
               <p>Reason to why the session started late: <?php echo $row['reason_for_startinglate']; ?> </p>
             </div>
            </div>
          </div>
<!-- teaching process -->
          <h4>Teaching process details</h4>
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Session type: <?php echo $row['session_type']; ?>  </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Teaching mode used: <?php echo $row['teaching_mode']; ?> </p>
            </div>
          </div>
<!-- medium of instruction -->
          <div class="row">
            <div class="col-sm-6 mb-1">
              <p>Medium of instruction: <?php echo $row['medium_of_instruction']; ?> </p>
            </div>
            <div class="col-sm-6 mb-1">
              <p>Teaching method used: <?php echo $row['teaching_method']; ?> </p>
            </div>
          </div>

<!-- teaching venue -->
          <h4>Teaching venue conditions</h4>
<h6>The table below displays the rating of the venue conditions that is either excellent, very good, good, poor, very poor and not applicable. </h6>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Venue condition</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">A</th>
      <td>Sitting arrangements of students</td>
      <td><?php echo $row['a']; ?></td>
    </tr>
    <tr>
        <th scope="row">B</th>
        <td>Lighting</td>
    <td><?php echo $row['b']; ?></td>
      </tr>
    <tr>
        <th scope="row">C</th>
        <td>Chairs and Tables</td>
    <td><?php echo $row['c']; ?></td>
      </tr>
      <tr>
        <th scope="row">D</th>
        <td>Fixed LCD projector system (if any)</td>
    <td><?php echo $row['d']; ?></td>
      </tr>
      <tr>
        <th scope="row">E</th>
        <td>Display and Visibility</td>
    <td><?php echo $row['e']; ?></td>
      </tr>
      <tr>
        <th scope="row">F</th>
        <td>General physical condition of the room</td>
    <td><?php echo $row['f']; ?></td>
      </tr>
      <tr>
        <th scope="row">G</th>
        <td>Public address system (if any)</td>
    <td><?php echo $row['g']; ?></td>
      </tr>
      <tr>
        <th scope="row">H</th>
        <td>Availability of brash and chalks/markers</td>
    <td><?php echo $row['h']; ?></td>
      </tr>
      <tr>
        <th scope="row">I</th>
        <td>Use of whiteboard/blackboard</td>
    <td><?php echo $row['i']; ?></td>
      </tr>
      <tr>
        <th scope="row">J</th>
        <td>Room ventilation</td>
    <td><?php echo $row['j']; ?></td>
      </tr>

    
  </tbody>
</table>
<!-- special matters -->
          <h4>Matters of immediate attention</h4>

          <?php
          
$t = $row["special_matters"];

if ($t == "no") {
  echo "There are no matters of immediate response";
} else {
  echo "Identified matters: "; 

  echo $row['specialmatters_explanation'];
}
?>
                     
        </div>
</div>
<div id="editor" class="form-group">
          <a href="javascript:generatePDF()"><button class="btn btn-primary" download>Dowload PDF</button></a>
          </div>
      </div>
      
</section>



<script src="https://kit.fontawesome.com/0cdec3100d.js" crossorigin="anonymous"></script>
   <!-- main js file -->
  <script src="assets/js/main.js"></script>
   <!-- html2canvas & jspdf Js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" ></script>

  <!-- html2pdf js file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <!-- script for chart -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<!-- canvas -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" ></script>
<!-- //download report -->
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
<!-- //script for instructor's attendance -->
<script>
   
      if( ("<?php echo $row['attendance']; ?>") == "present"){
        document.getElementById("instructorpresent").style.display = "block";
  
      }else {
    
        document.getElementById("instructorpresent").style.display = "none";
      }
  </script>

<!-- script for stating session on time -->
<script>
   
   if( ("<?php echo $row['session_starting_time']; ?>") == "started_on_time"){
     document.getElementById("startedlate").style.display = "none";

   }else {
 
     document.getElementById("startedlate").style.display = "block";
   }
</script>
<!-- //script for reason for absence --> 

<script>
   if( ("<?php echo $row['attendance']; ?>") == "absent"){
     document.getElementById("absencereason").style.display = "block";

   }else {

     document.getElementById("absencereason").style.display = "none";
   }
</script>
</main>

</body>
</html>
