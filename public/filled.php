<!DOCTYPE html>
<html lang="en">

<head>
  <?php

  require_once("./../includes/functions.php");
  require_once("../includes/headerContent.php");
  require_once("../includes/sessionStuffs.php");
  require_once("../includes/db.php");

  ?>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <?php
  require_once("../includes/leftNav.php");
  ?>
  <!-- ======= Header ======= -->


  <main id="main">
  <section>
		<div class="container" id="container">	
			<div class="row rounded shadow "> 
            

            <div class="p-4">
			   <div class="coict-text text-center">	
					<h4>Thankyou!</h4>
				 <p>You have already evaluated this course. </p>
               <button type="submit" class="button"><a href="./index.php">Cancel</a></button> 
			   </div>
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

  <?php

  require_once("./../includes/scripts.php");
  ?>

</body>

</html>