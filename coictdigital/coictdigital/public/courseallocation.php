<!DOCTYPE html>
<html lang="en">

<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<head>
  
<?php
   require_once("./../includes/functions.php");
   require_once("../includes/headerContent.php");
   require_once("../includes/scripts.php");
  //  require_once("../includes/sessionStuffs.php");
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
        <!-- ======= Form Section ======= -->
       <section id="evaluation" class="services">
      <div class="container-fluid">
      <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Course Allocation Management</h3>
          <h2>Undergraduate Programmes</h2>
        </div>
      </div>
   
     <form action="addnewallocation.php" method="POST">
        <div class="p-4">
        <div class="card">              
      <div class="card-body">
      <?php

              if(isset($_SESSION[ 'status']))
           {
             echo "<h4>".$_SESSION[ 'status']."</h4>";
             unset($_SESSION[ 'status']);
           }
          ?>
    <p class="card-title">Allocation of courses to instructors</p>
    <div class="row p-2">
    <?php 
    $query ="SELECT * FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    ?>
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
              <select class="form-select" name="supervisor" aria-label="Default select example">
                      
                      <option value="">Select Evaluator</option>
                      <?php 
                      foreach ($options as $option) {
                      ?>
                        <option value="<?php echo $option['instructor']; ?>"><?php echo $option['instructor']; ?> </option>
                        <?php 
                        }
                      ?>
                            
              </select>
              </div>
                      </div>
              <div class="row p-2">
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
                  <option value="">Select Semester</option>
                  <option value="1">I</option>
                  <option value="2">II</option>
                </select>
              </div>
              </div>

            </div>    
             </div>
           </div>
        <center><button type="submit" name="allocate" class="btn btn-primary">Allocate</button> </center>    
     </form>

     <!--------------table of staff-------------------------------------------------------------->
     <div class="p-4">
     <div class="card"> 
     <div class="card-body">
     <p class="card-title">Allocated Instructors</p>
     <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
    <th class="th-lg">Instructors</th>
    <th class="th-lg">Course Name</th>
    <th class="th-lg">Evaluator</th>
    <th class="th-lg">Practical	/	Tutorial	Assistant</th>
    <th class="th-lg">Semester</th>
    <th class="th-lg">Action</th>
    </tr>
  </thead>
  <tbody>
                <?php   
                $sql = "select * from course_allocation " ;
              //   $sql = "SELECT id, firstname, lastname FROM MyGuests";
              //  $result = $conn->query($sql);

                $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                $id = $row['id'];
                 
                ?>
                  <tr>
                  <td ><?php echo $row['instructor']; ?></td>
                  <td ><?php echo $row['course_name']; ?></td>
                  <td ><?php echo $row['evaluator']; ?></td>
                  <td ><?php echo $row['assistant']; ?></td>
                  <td ><?php echo$row['semester']; ?></td>
                  <!-----crud icons ------->
                  <td class="col-1" >
                    <form action="read.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <button type="submit" title="View Record"><i class="all-icons fa fa-eye"></i></button>
                    </form>  
                  
                       <a href="#editModal" data-toggle="modal" data-target="#editModal"><i class="all-icons fa fa-pencil"></i></a>  
                       <a href=""><i class="all-icons fa fa-trash"></i></a>
                  
                  </td>
                  </tr>
                  <?php }
                 }
                 ?> 
                
                      
                     
                    </tr>
                </tbody>
</table>
</div>
</div>
</div>

         
        
    </section><!-- End Form Section -->
   

    <!-- fading edit allocation-->
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
                  <input type="text" class="form-control" name="" placeholder="Instructor">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="" placeholder="Course Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="" placeholder="Evaluator">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="" placeholder="Practical Assistant">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="" placeholder="Semester">
                </div>
                <center><button type="submit" name="edit" class="btn btn-primary">Edit</button> </center> 
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end of fading edit allocation-->


  </main>
  <!-- End #main -->

  <!----------search table script --------------------------------------->
  <script>
  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
  });
</script>

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