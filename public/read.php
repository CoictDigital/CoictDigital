<!DOCTYPE html>
<html lang="en">
<head>
 <?php
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");
  require_once("../includes/db.php");

// Check existence of id parameter before processing further
if(isset($_REQUEST["id"]) && !empty(trim($_REQUEST["id"]))){
    
    // Prepare a select statement
    $sql = "SELECT * FROM course_allocation where id=?"; 

    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_REQUEST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
               
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
          <h3>Course Allocation Management</h3>
          <h2>Undergraduate Programmes</h2>
        </div>
      </div>

      <!----------p-4 ------------------>
      <div class="p-4">
      <div class="row">
        <h4 class="">Staff Allocation Details</br><em>Department of Computer Science and Engineering</em></h4>
        </div> 
        <div class="card">
                    
      <div class="card-body">        

        <div class="row">

        <div class="col-sm-4">
        <div class="all-profile">
        <img src="../assets/img/profile.png" alt="">
        </div>
        </div>

        <div class="col-sm-8"> 
        <p>Instructor: <?php echo $row['instructor']; ?>  </p>
        <p>Course Name:  <?php echo $row['course_name']; ?></p>
        <p>Evaluator:  <?php echo $row['evaluator']; ?></p>
        <p>Practical Assistant:  <?php echo $row['assistant']; ?></p>
        <p>Semester:  <?php echo $row['semester']; ?></p>
        </div>
        </div>

            </div>        
        </div>
    </div>
    <?php
        }
            
     else{
         // URL doesn't contain valid id parameter. Redirect to error page
         echo "Error!";
     }
}
else{
 echo "Oops! Something went wrong. Please try again later.";
}
 
// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($conn);
}
?>

    <!--------end of p-4----------------->
    </section>
    </main>
    <?php

   require_once("./../includes/scripts.php");
   ?>
</body>
</html>