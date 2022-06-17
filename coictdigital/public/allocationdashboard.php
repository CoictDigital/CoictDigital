<!DOCTYPE html>
<html lang="en">

<head>
   
<?php
require_once("../includes/db.php");
require_once("../includes/headerContent.php");
require_once("../includes/sessionStuffs.php");

unset($_SESSION["studentFilledCount"]);

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
       <section id="invigilation" class="services">
        <div class="container-fluid">            
          
          <div class="section-title">
            <h2>MY ALLOCATION</h2>
          </div>
          <!-- <div class="">
          <form>
              <H3>Hellow,</H3>

              <B>Dr.Mlaki</B>
              <div><P> You have been allocated to  <h4>COURSE</h4></P>
                 <div> PRACTICAL ASSISTANT: </div>
                 <div> EVALUATOR: </div>
                 
                  <div>SEMESTER: </div> 

                </div>
                <button type="submit" formaction="http://localhost/coictdigital/coictdigital/public/previewhistory.php" class="allocationbutton">VIEW HISTORY</button>
                    <button type="submit" formaction="http://localhost/coictdigital/coictdigital/public/lecturerallocation.php" class="allocationbutton">OTHER ALLOCATION</button>
          </form>
        </div> -->


        </div>
        <div class="p-4">
      <div class="row">
        <h4 class="">Staff Allocation Details</h4>
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
        <form>
              <H3>Hellow,</H3>

              <B>Dr.Mlaki</B><?php echo $row['instructor']; ?>  
              <div><> You have been allocated to  
                 <div><h4>Course:<?php echo $row['course_name']; ?></h4></div>
                 <div> Practical/Tutorial Assistant: </div>
                 <div> Evaluator:<?php echo $row['evaluator']; ?> </div>
                 
                  <div>Semester:  <?php echo $row['semester']; ?></div> 

                </div>
                <button type="submit" formaction="http://localhost/coictdigital/coictdigital/public/previewhistory.php" class="allocationbutton">VIEW HISTORY</button>
                <button type="submit" formaction="http://localhost/coictdigital/coictdigital/public/lecturerallocation.php" class="allocationbutton">OTHER ALLOCATION</button>
          </form>
        <!-- <p>Instructor: <?php echo $row['instructor']; ?>  </p> -->
        <!-- <p>Course Name:  <?php echo $row['course_name']; ?></p>
        <p>Evaluator:  <?php echo $row['evaluator']; ?></p>
        <p>Practical Assistant:  <?php echo $row['assistant']; ?></p>
        <p>Semester:  <?php echo $row['semester']; ?></p>
        </div> -->
        </div>

            </div>        
        </div>
    </div>
      </section><!-- End Form Section -->

      <!-- end of fading edit form-->


    <!-- ======= Contact Section ======= -->
    




    <!-- End Contact Section -->

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

  <script src="https://kit.fontawesome.com/0cdec3100d.js" crossorigin="anonymous"></script>
   <!-- main js file -->
  <script src="assets/js/main.js"></script>
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

</body>

</html>