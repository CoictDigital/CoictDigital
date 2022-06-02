
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
                 <?php
                      if ($_SESSION["userData"]["role"] == 2) {
                        $sql = "SELECT * FROM `alumni` WHERE gpa IS NOT NULL";
                      }
                      if ($_SESSION["userData"]["role"] == 1) {
                        $sql = "SELECT * FROM `alumni` WHERE alumni_name IS NOT NULL";
                      }

                      $result=$conn->query($sql);
                      ?>

       <!-- ======= Form Section ======= -->
       <section id="" class="services">
        <div class="container-fluid"> 
          <div class="section-title">
            <h2>ALUMNI MANAGEMENT</h2>
          </div>

          <div class="container">
          <form>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Search</label>
              <div class="col-sm-5 mb-1">
                <input type="text" class="form-control">
              </div>
              <div class="col-sm-5 mb-1">
                <a href="#addnewModal"  data-toggle="modal" data-target="#addnewModal" > 
                  <button type="submit" class="mx-auto button" style="float: right; height: 40px;">Add New</button>
                </a>
                </div>

            </div>
           <div class="form-group row">
              <h5>ALUMNI TABLE</h5>
            </div>
            <div class="form-group row">
              <div class="centre">
              <table class="table table-sm">
                <thead class="table-secondary">
                  <tr>
                    <th scope="col">ALUMNI NAME</th>
                    <th scope="col">PROGRAM</th>
                    <th scope="col">YEAR COMPLETED</th>
                    <th scope="col">GPA</th>
                    <th scope="col">EMAIL ADRESS</th>
                    <th scope="col">CONTACT</th>
                    <th scope="col">EMPLOYER</th>
                  </tr>
                </thead>
                <tbody>
                <?php                  
                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                 
                ?>
                  <tr>
                   <td><?php echo $row['alumni_name']; ?></td>
                   <td><?php echo $row['programme']; ?></td>
                   <td><?php echo $row['year_completed']; ?></td>
                   <td><?php echo $row['gpa']; ?></td>
                   <td><?php echo $row['email']; ?></td>
                   <td><?php echo $row['contact']; ?></td>
                   <td><?php echo $row['employer']; ?></td>
                  </tr>
                  <?php }
                 }
                 ?>
                </tbody>
              </table>
            </div>
            </div>
          
          </form>
        </div>


        
        </div>
      </section><!-- End Form Section -->
       <!-- fading addnew form-->
       <div class="modal fade" id="addnewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-title text-center">
                <h4>Add Alumni Details</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form action="alumni.php" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" id="regno"placeholder="reg.no" name="regno">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="alumniname" placeholder="alumni name" name="alumniname">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="programm" placeholder="programm" name="programm">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="year" placeholder="year" name="year">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="adresses" placeholder="adresses" name="adresses">
                  </div>
                  <button type="submit" class="mx-auto button" >Save</button>
                </form>
              </div>
            </div>
          </div>
           </div>
      </div>

      <!-- end of fading aadnew form-->
      
      <!-- fading edit form-->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-title text-center">
                <h4>Edit Allocation</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="staffname"placeholder="Staff Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursecode" placeholder="Course Code">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursename" placeholder="New Course Name">
                  </div>
                  <button type="submit" class="mx-auto button" >Save</button>
                </form>
              </div>
            </div>
          </div>
           </div>
      </div>

      <!-- end of fading edit form-->


 

  </main>
  <!-- End #main -->
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

  <?php

  require_once("./../includes/scripts.php");
  ?>

</body>
</html>