<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once("../includes/functions.php");
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

  <main id="main">
    <!-- ======= Main  Section ======= -->
    <section id="" class="services">
      <div class="container-fluid">
        <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Quality Assurance Bureau (QAB)</h3>
          <h3>Teaching and Learning monitoring results</h3>
         
        </div>
      </div>

      <div class="p-4">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Department of Computer Science and Engineering</p>
            <div class="row">
              <!--------------- semester ----------------------------------------------------------------->
              <div class="col-sm-4">
               
                <select class="form-select" id="changeYear" name="semester" aria-label="Default select example" onchange="changeVal(event)">
                  <option>Semester</option>
                  
                </select>
              </div>
              <!--------------- week ----------------------------------------------------------------->
              <div class="col-sm-4">
                
              
                <select class="form-select" name="week" aria-label="Default select example" id="changeProg" onchange="changeVal(event)">
                  <option>week</option>
                  
                </select>
              </div>
              <!--------------- course ----------------------------------------------------------------->
              <div class="col-sm-4">
               
                <select class="form-select" name="course" aria-label="Default select example" id="changeSem" onchange="changeVal(event)">
                  <option>Course</option>
                  
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="p-4">
        <div class="">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Teaching and learning monitoring result </p>
            </div>

              <div class="container-fluid mb-3">
                
                  <div class="card mb-1">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-10">
                          <p class="">
                            <?php echo $week["week"] . " - " . $date["date"]; ?>

                          </p>
                          <p class="">
                            

                          </p>
                        </div>
                        <div class="col-2">
                          
                        </div>
                      </div>
                    </div>
                  </div>


               
              </div>
            <?php
            


            ?>


          </div>
        </div>
    </section>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

    

</body>

</html>