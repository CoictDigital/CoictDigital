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
          <div class="">
          <form>
              <H3>Hellow,</H3>

              <B>Dr.Mlaki</B><?php echo $_SESSION['$userdata']; ?>
              <div><P> You have been allocated to  <h4>COURSE</h4></P>
                 <div> PRACTICAL ASSISTANT: </div>
                 <div> EVALUATOR: </div>
                 
                  <div>SEMESTER: </div> 


                  
                  <!-- <a href="http://" target="_blank" rel="noopener noreferrer">VIEW HISTORY</a> 
              <a href="http://" target="_blank" rel="noopener noreferrer">OTHER ALLOCATION</a> -->
                </div>
                <button type="submit" formaction="http://localhost/coictdigital/coictdigital/public/previewhistory.php" class="allocationbutton">VIEW HISTORY</button>
                    <button type="submit" formaction="http://localhost/coictdigital/coictdigital/public/lecturerallocation.php" class="allocationbutton">OTHER ALLOCATION</button>
          </form>
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