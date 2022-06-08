<!DOCTYPE html>
<html lang="en">

<head>
  
<?php
    require_once("../includes/db.php");
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");
    require_once("../public/addnewallocation.php");
  //  session_start();
 

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

    <div class="row">
      <div class="col-md-12">
        <div class="dropdown nav-link">
          <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User Profile
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item text-dark" href="#">
              <p>Change Password</p>
            </a>
          </div>
        </div>
      </div>
    </div>
       <!-- ======= Form Section ======= -->
       <section id="allocation" class="services">
        <div class="container-fluid">            
         <div class="section-title">
         <section id="" class="services">
      <div class="container-fluid">
        <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h2>Undergraduate Programmes</h2>
          <h2>COURSE ALLOCATION</h2>   
        </div>
</div>
            
          </div>
          <div class="container">
          <form>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><i class="fa fa-search" aria-hidden="true"></i>Search</label>
              <div class="col-sm-5 mb-1">
                <input type="text" class="form-control">
              </div>
             

            </div>

           
     <form action="addnewallocation.php" method="POST">
        <div class="container">
        <div class="">
        <div class="card">
          
  <div class="card-body">
  <?php
           if(isset($_SESSION[ 'status']))
           {
             echo "<h4>".$_SESSION[ 'status']."</h4>";
             unset($_SESSION[ 'status']);
           }
          ?>
    <p class="card-title">Allocate Courses for respective Instructor</p>
    <div class="row">
    <div class="col-sm-4">
                <select class="form-select" name="course" aria-label="Default select example" >
                      
                          <option value="">Select Course</option>
                          <?php 
                          foreach ($options as $option) {
                          ?>
                            <option value="<?php echo $option['course_title']; ?>"><?php echo $option['course_title']; ?> </option>
                            <?php 
                            }
                          ?>
                                
                  </select>
              </div>

              <div class="col-sm-4">
              <select class="form-select" name="instructor" aria-label="Default select example">
                      
                      <option value="">Select Instructor</option>
                      <?php 
                      foreach ($options as $option) {
                      ?>
                        <option value="<?php echo $option['instructor']; ?>"><?php echo $option['instructor']; ?> </option>
                        <?php 
                        }
                      ?>
                            
              </select>
              </div>
              <div class="col-sm-4">
              <select class="form-select" name="TA" aria-label="Default select example">
                      
                      <option value="">Select TA</option>
                      <?php 
                      foreach ($options as $option) {
                      ?>
                        <option value="<?php echo $option['instructor']; ?>"><?php echo $option['instructor']; ?> </option>
                        <?php 
                        }
                      ?>
                            
              </select>
              </div>
              <div class="col-sm-4">
              <select class="form-select" name="assistant" aria-label="Default select example">
                      
                      <option value="">Select Practical Assistant</option>
                      <?php 
                      foreach ($options as $option) {
                      ?>
                        <option value="<?php echo $option['instructor']; ?>"><?php echo $option['instructor']; ?> </option>
                        <?php 
                        }
                      ?>
                            
              </select>
              </div>

              <div class="col-sm-4">
              <select class="form-select" name="semester" aria-label="Default select example">
                  <option value="">Semester</option>
                  <option value="1">I</option>
                  <option value="2">II</option>
                </select>
              </div>
              <center><button  type="submit" name="allocate"  class="mx-auto button"  style="height:30px; width:70px; border-radius: 5px; ">allocate</button></center>
          </div>
            </div>
            
           
            <!-- <button type="submit" name="submit" class="mx-auto button" >Allocate</button> -->
          </div>
          </div>
         
          </div>
          
     </form>

           <div class="form-group row">
              <h5>Table of course allocation for staff</h5>
            </div>
            <div class="form-group row">
              <div class="centre">
              <table class="table table-sm">
                <thead class="table-secondary">
                  <tr>
                  <th scope="col">Instructors</th>
                      <!-- <th scope="col">NO  of Course </th> -->
                      <!-- <th scope="col">Course Code</th> -->
                      <th scope="col">Course Name</th>
                       <th scope="col"> TA</th> 
                      <th scope="col">Practical	/	Tutorial	Assistant</th> 
                      <th scope="col">semister</th>
                      <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
      //           $sql = "select * from course_allocation" ;
      //           $result = $conn->query($sql);
                 
      //  // Performing insert query execution
      //  // here our table name is college
      
           


      //            if ($result->num_rows > 0) {
      //            while($row = $result->fetch_assoc()){
      //           extract($row);
                 
      //           ?>

              
      //             <tr>
      //              <td><?php //echo $row['instructor']; ?></td>
      //              <!-- <td><?php// echo $row['no_of_course']; ?></td> -->
      //              <!-- <td><?php //echo $row['course_code']; ?></td> -->
      //              <td><?php //echo$row['course_name']; ?></td>
      //              <!-- <td><?php //echo $row['program']; ?></td> -->
      //              <td></td>
      //              <td></td>
      //              <td></td>
      //              <!-- <td><?php //echo $row['#']; ?></td> -->
      //              <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
      //             </tr>
      //             <?php //}
      //            }
      //            ?> 
                
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
            <div class="form-title text-center">0
              <h4>Add New Allocation</h4>
            </div>
            <div class="modal-body">
              <div class="form-title text-center">
                <h4>Add New Allocation</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form action="#" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control" id="instructor"placeholder="Staff Name" name="instructor" >
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="no_of_course" placeholder="no_of_course" name= "no_of_course">
                  </div>
                  <!-- <div class="form-group">
                    <input type="text" class="form-control" id="course_code" placeholder="Course Code" name="course_code">
                  </div> -->
                  <div class="form-group">
                    <input type="text" class="form-control" id="course_name" placeholder="Course Name" name="course_name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="program" placeholder="program" name="program">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="current" placeholder="current" name="current">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="status" placeholder="status" name="status">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="credits" placeholder="Credits" name="credits">
                  </div>
                  <button type="submit" class="mx-auto button" >Save</button>
                </form>
              </div>
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
                  <input type="text" class="form-control" id="staffname" placeholder="Staff Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="coursecode" placeholder="Course Code">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="coursename" placeholder="New Course Name">
                </div>
                <button type="submit" class="mx-auto button">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end of fading edit form-->


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