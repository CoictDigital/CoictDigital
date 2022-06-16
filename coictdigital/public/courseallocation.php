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
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Course Allocation Management</h3>
          <h2>Undergraduate Programmes</h2>
        </div>
</div>
            
          </div>
          <div class="p-3">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><i class="fa fa-search" aria-hidden="true"></i>Search</label>
              <div class="col-sm-5 mb-1">
                <input type="text" class="form-control">
              </div>
             

            </div>

           
     <form action="addnewallocation.php" method="POST">
        <div class="p-3">
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
                      
                      <option value="">Select evaluator</option>
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
             </div>
            </div>    
             </div>
           </div>
          </div>
        <center><button type="submit" name="allocate" class="mx-auto button" style="height:30px; width:70px; border-radius: 5px; ">Allocate</button> </center>       
     </form>

           <div class="">
              <h5>Table of course allocation for staff</h5>
            </div>
            <div class="limiter">
            <div class="container-table100">
        <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
        <div class="table100-head">
        <table>
          <thead>
            <tr class="row100 head">
            <th class="cell100 column1">Instructors</th>
            <th class="cell100 column2">Course Name</th>
            <th class="cell100 column3">supervisor</th>
            <th class="cell100 column4">Practical	/	Tutorial	Assistant</th>
            <th class="cell100 column5">semester</th>
            <th class="cell100 column6">Action</th>
            </tr>
           </thead>
</table>
</div>
<div class="table100-body js-pscroll">
<table>
<tbody>
<?php 
                 $sql = "SELECT * FROM course_allocation" ;
                 $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                        
                        while($row = $result->fetch_assoc()){
                            extract($row);
                              
              ?>
            <tr>
                          <td class="cell100 column1"><?php echo $row['instructor']; ?></td>
                          <td class="cell100 column2"><?php echo $row['course_name']; ?></td>
                            <td class="cell100 column3"><?php echo $row['evaluator']; ?></td>
                            <td class="cell100 column4"><?php echo $row['assistant']; ?></td>
                            <td class="cell100 column5"><?php echo$row['semester']; ?></td>
                             <td class="cell100 column6"><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                    </tr>
                      <?php } 
                  }
                 ?> 
          </tbody>
            </table>
            </div>
          </div>
        </div>
        </div>
      </div>
              <!-- <div class="centre">
              <table class="table table-sm">
                <thead class="table-secondary">
                  <tr>
                      <th class="cell100 column1">Instructors</th>
                      <th class="cell100 column2">Course Name</th>
                       <th class="cell100 column3">supervisor</th> 
                      <th class="cell100 column4">Practical	/	Tutorial	Assistant</th> 
                      <th class="cell100 column5">semester</th>
                      <th class="cell100 column6">Action</th>
                  </tr>
                </thead>
                <tbody>
                      <?php 
                            $sql = "SELECT * FROM course_allocation" ;
                            $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                            
                              while($row = $result->fetch_assoc()){
                                  extract($row);
                              
                            ?>
                              <tr>
                              <td class="cell100 column1"><?php echo $row['instructor']; ?></td>
                              <td class="cell100 column2"><?php echo $row['course_name']; ?></td>
                                <td class="cell100 column3"><?php echo $row['evaluator']; ?></td>
                            <td class="cell100 column4"><?php echo $row['assistant']; ?></td>
                            <td class="cell100 column5"><?php echo$row['semester']; ?></td>
                              <td class="cell100 column6"><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
                              </tr>
                      <?php } 
                  }
                 ?> 
                
                </tbody>
              </table>
            </div> -->
        
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
                <input type="submit" name="allocate" class="mx-auto button">
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
<style>
/* Table codes */
button {
  outline: none !important;
  border: none;
  background: transparent;
  }
  button:hover {
  cursor: pointer;
  } 
iframe {
    border: none !important;
    } 
    /*
  [ Scroll bar ]*/
  .js-pscroll {
    position: relative;
    overflow: hidden;
    }
    .table100 .ps__rail-y {
    width: 9px;
    background-color: none;
    opacity: 1 !important;
    right: 5px;
    }
    .table100 .ps__rail-y::before {
    content: "";
    display: block;
    position: absolute;
    background-color: #ebebeb;
    border-radius: 5px;
    width: 100%;
    height: calc(100% - 30px);
    left: 0;
    top: 15px;
    }
    .table100 .ps__rail-y .ps__thumb-y {
    width: 100%;
    right: 0;
    background-color: transparent;
    opacity: 1 !important;
    }
    .table100 .ps__rail-y .ps__thumb-y::before {
    content: "";
    display: block;
    position: absolute;
    background-color: #cccccc;
    border-radius: 5px;
    width: 100%;
    height: calc(100% - 30px);
    left: 0;
    top: 15px;
    }
    
    .container-table100 {
    width: 100%;
    min-height: 100vh;
    background:  #fff;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding: 33px 30px;
    }
    .wrap-table100 {
    width: 960px;
    border-radius: 10px;
    overflow: hidden;
    }
    .table100 {
      background-color: #fff;
      }
      table {
      width: 100%;
      }
      th, td {
      font-weight: unset;
      padding-right: 10px;
      }
      .column1 {
      width: 25%;
      padding-left: 40px;
      }
      .column2 {
      width: 15%;
      }
      .column3 {
      width: 22%;
      }
      .column4 {
      width: 15%;
      }
      .column5 {
      width: 10%;
      }
      .column6 {
      width:13%;
      }
      .table100-head th {
      padding-top: 18px;
      padding-bottom: 18px;
      }
      .table100-body td {
      padding-top: 16px;
      padding-bottom: 16px;
      }
      /*==================================================================
      [ Fix header ]*/
      .table100 {
      position: relative;
      padding-top: 60px;
      }
      .table100-head {
      position: absolute;
      width: 100%;
      top: 0;
      left: 0;
      }
      .table100-body {
      max-height: 585px;
      overflow: auto;
      }
      /*==================================================================
      [ Ver1 ]*/
      .table100.ver1 th {
      font-family: Lato-Bold;
      font-size: 18px;
      color: #fff;
      line-height: 1.4;
      background-color: #6c7ae0;
      }
      .table100.ver1 td {
      font-family: Lato-Regular;
      font-size: 15px;
      color: #808080;
      line-height: 1.4;
      }
      .table100.ver1 .table100-body tr:nth-child(even) {
      background-color: #f8f6ff;
      }
      /*---------------------------------------------*/
      .table100.ver1 {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
      -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
      -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
      -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
      -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
      }
      .table100.ver1 .ps__rail-y {
      right: 5px;
      }
      .table100.ver1 .ps__rail-y::before {
      background-color: #ebebeb;
      }
      .table100.ver1 .ps__rail-y .ps__thumb-y::before {
      background-color: #cccccc;
      }
    /*=================================================================*/
  </style>
</html>