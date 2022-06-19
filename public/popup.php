<!DOCTYPE html>
<html>
    <head>
        
<?php
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");
    require_once("../includes/db.php");
    require_once("../includes/fetchcoursecode.php");

    if (isset($_SESSION["teachingFilled"])) {
      unset($_SESSION['teachingFilled']);
    } else {
    }
  

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
    <section>
        <div class="">
          <div class="row justify-content-center align-items-center">
          
        
    
<div class="col-sm-4">
<form action="./../login.php" class="card p-4 rounded shadow details" >
<div class="modal-body text-center">
              <p>Thankyou for your response!</p>
              
              <button type="submit" class="mx-auto button2" ><a href="index.php">Exit</a></button>                             
            </div>
<!-- <p class="text-center pt-3">Thank you for your response!</p> -->
<!-- <button type="submit" class="mx-auto button" name="teaching">Proceed</button> -->

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