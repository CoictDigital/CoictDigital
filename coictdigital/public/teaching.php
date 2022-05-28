<!DOCTYPE html>
<html>
    <head>
        
<?php
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");

    unset($_SESSION["studentFilledCount"]);

    ?>
    </head>
    <body>

        <!-- ======= Mobile nav toggle button ======= -->
  <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/udsmlogo.jpg" alt="" class="img-fluid rounded-circle">
       
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto"> <span>Home</span></a></li>
          <li><a href="<?php
            if ($_SESSION["userData"]["role"] == 2) {
              echo "department1.php";
            } else if ($_SESSION["userData"]["role"] == 1) {
              echo "evaluation1.php";
            }
            ?>" class="nav-link scrollto"> <span>Course Evaluation</span></a></li>        
          <li><a href="alumnirecords.php" class="nav-link scrollto"><span>Alumni Records</span></a></li>
          <li><a href="teaching.php" class="nav-link scrollto active"> <span>Teaching Monitoring</span></a></li>
          <li><a href="courseallocation.php" class="nav-link scrollto"> <span>Course Allocation</span></a></li>
          <li><a href="examinvigilation.php" class="nav-link scrollto"> <span>Exam Invigilation</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
        
        
 <!-- <div class="col-sm-12">
<form action="" class="card p-4 rounded shadow login" method="POST">
<img src="assets/img/udsmlogo.png" alt="responsive image"> -->


<main id="main">  
    <section>
        <div class="container">
          <div class="row justify-content-center align-items-center">
        
    
<div class="col-sm-4">
<form action="" class="card p-4 rounded shadow details" method="POST">
<p class="text-center pt-3">Please select the corresponding details</p>

<div class="mb-3">
<select class="form-select" aria-label="Default select example">
    <option selected="Select reason for starting late">Department</option>
    <option value="1">CSE</option>
    <option value="2">ETE</option>
    
    </select> 
</div>

<div class="mb-3">
<select class="form-select" aria-label="Default select example">
    <option selected="Select reason for starting late">Course code</option>
    <option value="1">IS 384</option>
    <option value="2">MK 100</option>
    <option value="3">IS 386</option>
    <option value="4">IS 385</option>
    <option value="5">IS 336</option>
    </select>
</div> 
    
<div class="mb-3">
<select class="form-select" aria-label="Default select example">
    <option selected="Select reason for starting late">Semester</option>
    <option value="1">Semester1</option>
    <option value="2">Semester2</option>
   </select> 
</div>
    




<button type="submit" class="mx-auto button" name="login"><a href="teachingmonitoring.php">Proceed</a></button>
<a href="index.php"><p class="text-center pt-3">Cancel</p></a>
                </form>
            </div>
            </div>
            </div>
        </section>
</main>

<script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>

    </body>
</html>