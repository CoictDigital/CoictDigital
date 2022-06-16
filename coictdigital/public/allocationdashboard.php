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
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Get in touch</h2>
         </div>
        <div class="info">
          <div class="row d-flex align-items-center">
           
              <div class="col-sm-4 address">
                <i class="fas fa-map-marker-alt"></i>
                <h4>Our Location</h4>
                <p>Kijitonyama, Dar es salaam Tz</p>
              </div>

              <div class="col-sm-4 email">
                <i class="far fa-envelope"></i>
                <h4>Our Email</h4>
                <p>coictdigital@udsm.co.tz</p>
              </div>

              <div class="col-sm-4 phone">
                <i class="fas fa-phone-alt"></i>
                <h4>Call us at</h4>
                <p>+255 123 456 789</p>
              </div>
             
            </div>

         
          <div class="row d-flex align-items-center ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15847.948246895608!2d39.2399597!3d-6.7714281!3m2
            !1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31c34ce3703cc9eb!2sCollege%20of%20Information%20and%20Communication%20Technologi
            es%20(CoICT)%20-%20University%20of%20Dar%20es%20salaam!5e0!3m2!1sen!2stz!4v1648727896321!5m2!1sen!2stz" width="600" 
            height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>
    </div>
    </section>




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