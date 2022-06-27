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
    $sql = "SELECT * FROM alumni where id=?"; 

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
          <h3>Alumni Details</h3>
          
        </div>
      </div>

      <!----------p-4 ------------------>
      <div class="p-4">

        <div class="card">
                    
      <div class="card-body">        

        <div class="row">

        <div class="col-sm-4">
        <div class="all-profile">
        <img src="../assets/img/profile.png" alt="">
        </div>
        </div>

        <div class="col-sm-8"> 
        <p><h4><b>NAME:</b><?php echo $row['Name']; ?> </h4> </p>
        <p><h4><b>SEX: </b> <?php echo $row['sex']; ?></h4></p>
        <p><h4><b>PROGRAMME:  </b><?php echo $row['programme']; ?></h4></p>
        <p><h4><b>YEAR COMPLETED: </b> <?php echo $row['year_completed']; ?></h4></p>
        <p><h4><b>ORGANIZATION/COMPANY:</b>  <?php echo $row['employedat']; ?></h4></p>
        <p><h4><b>EMPLOYED AS/DEAL WITH: </b> <?php echo $row['employedas']; ?></h4></p>
        <p><h4><b>EMAIL: </b> <?php echo $row['email']; ?></h4></p>
        <p><h4><b>CONTACT: </b> <?php echo $row['contact']; ?></h4></p>
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