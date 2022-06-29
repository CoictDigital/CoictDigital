
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

     <!-- <div class="row" >
      <div class="col-md-12"><div class="dropdown" style="float: right; width: 100px;">
          <button class="dropbtn">user<i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="#">Profile</a>
            <a href="#">Logout</a> 
            <div class="dropdown nav-link">
          <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User Profile
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item text-dark" href="#"><p>Change Password</p></a>
          </div>
          </div>
          </div>
      </div>
    </div> -->
      
      <!-- </div> -->
    <!-- </div> -->
       <!-- ======= Form Section ======= -->
       <section id="invigilation" class="services">
        <div class="container-fluid">            
         
          <div class="section-title">
          <h3>UNIVERSITY OF DAR ES SALAAM</h3>
          <h3>Exam Invigilation Management</h3>
          <h2>Undergraduate Programmes</h2>
          </div>
          </div>
          <div class="">
          
            <!-- <div class="form-group row">
              <label class="col-sm-2 col-form-label"><i class="fa fa-search" aria-hidden="true"></i> Search</label>
              <div class="col-sm-5 mb-1">
                <input type="text" class="form-control">
              </div>
               <div class="col-sm-5 mb-1">
              <a href="#addnewModal"  data-toggle="modal" data-target="#addnewModal" > 
                <button type="submit" class="mx-auto button" style="float: right; height: 40px;">Add New</button>
              </a>
              </div> 
            </div> -->

   <form action="addnewallocation.php" method="POST">
               <div class="">
                 <div class="p-4">
                  <div class="card">
                  <div class="card-body">
                  
                    
                     <h4><b>Add Invigilator</b></h4>
             <div class="row p-2">    
                <div class="col-sm-4">
                <?php 
                      $query ="SELECT DISTINCT courses.course_title FROM courses";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                          }
                     ?>
                <select class="form-select" name="coursename" aria-label="Default select example">
                      
                          <option selected>Select Course</option>
                          <?php 
                          foreach ($options as $option) {
                          ?>
                            <option><?php echo $option['course_title']; ?> </option>
                            <?php 
                            }
                          ?>
                                
                  </select>
              </div>

              <div class="col-sm-4">

               <?php
             if ($_SESSION["userData"]["role"] == "2") {
                      
                     
                      $query ="SELECT users.name FROM users where users.role ='3'";
                      
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                      }
          ?>
          <select class="form-select" name="invigilator" aria-label="Default select example" required>
                      <option value="">Select Invigilator</option>
                      <?php 
                      foreach ($options as $option) {
                      ?>
                        <option value="<?php echo $option['name']; ?>"><?php echo $option['name']; ?> </option>
                        <?php 
                        }
                      ?>
                            
              </select>
              <?php 
							}
						  ?>
              </div>

              <div class="col-sm-4">
              <?php 
                      $query ="SELECT DISTINCT courses.venue FROM courses";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                          }
                     ?>
              <select class="form-select" name="venue" aria-label="Default select example">
                  <option selected>venue</option>
                  <?php 
                      foreach ($options as $option) {
                      ?>
                        <option><?php echo $option['venue']; ?> </option>
                        <?php 
                        }
                      ?>
                </select>
              </div>
                      </div>
              
              <div class="row p-2">
              <div class="col-sm-4">
                 <label for="day">Day:</label>
                  <input class="form-select" type="date" name="date" placeholder="Select day">
               
              </div>
              <div class="col-sm-4">
              <label for="day">From:</label>
              <input type="time" class="form-control" name="from_time" placeholder="From : time">
              </div>
              <div class="col-sm-4">
              <label for="day">To:</label>
              <input type="time" class="form-control" name="to_time" placeholder="To : time">
                    </div>
              </div>
                
              <center> <button type="submit" name="invigilate" class="mx-auto button" >Save</button></center> 
              
              </div>
              </div>
              </div>
     </form>
        
     <div class="p-4">
     <div class="card"> 
     <div class="card-body">
     <p class="card-title">Allocated Invigilators</p>
     <table id="dtBasicExample" class="table table-striped table-bordered table-lg" cellspacing="0" width="100%">
  <thead>
    <tr>
                    <th class="th-lg">Day</th>
                    <th class="th-lg">Time</th>
                    <th class="th-lg">Course Name</th>
                    <th class="th-lg">Venue</th>
                    <th class="th-lg">Invigilators</th>
                    <th class="th-lg">Action</th>
                  </tr>
                </thead>
         
            
                <tbody>
                <?php 
                            $sql = "SELECT * FROM exam_invigilation" ;
                            $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                            $sql__ = "";
                              while($row = $result->fetch_assoc()){
                                  extract($row);
                                  $button_view_excuse = "";
                                  $id = $row['id'];
                                  $invigilators = $row['invigilators'];
                                  $texthere = "";
                                  $button_view_exuse = "";

                                 $sql__ = "SELECT * FROM excuses WHERE instructor='$invigilators'";
                                 $xx = $conn->query($sql__);
                                 $rowx = mysqli_fetch_all($xx, MYSQLI_ASSOC);
                                 if(count($rowx) > 0) {
                                  $texthere = "class='text-danger'";
                                  $button_view_excuse = "<button type='button' data-toggle='modal' data-target='#viewexcuse$id'>Excuse</button>";
                              
?>


<div class="modal fade" id="viewexcuse<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header border-bottom-0">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="form-title text-center">
        <h4>View Excuses</h4>
      </div>
      <div class="d-flex flex-column text-center">
        <form>
          
          <div class="form-group">
          <label for="available">I will not be available .</label>
          </div>
          <div class="form-group">
          <label for="message-text" class="col-form-label"><?php echo $rowx['comment']?></label>
          </div>
          <button type="submit" class="mx-auto button" >Seen</button>
        </form>
      </div>
    </div>
  </div>
   </div>
</div>
<?php }?>
                              
                  <tr>
                   <td <?php echo $texthere;?>><?php echo $row['day']; ?></td>
                   <td <?php echo $texthere;?>><?php echo $row['from_time'] ;?> - <?php echo $row['to_time'] ;?></td>
                   <td <?php echo $texthere;?>><?php echo $row['course_name']; ?></td>
                   <td <?php echo $texthere;?>><?php echo $row['venue']; ?></td>
                   <td <?php echo $texthere;?>><?php echo $row['invigilators']; ?></td>
                   
                   <!-----crud icons ------->
                  <td class="col-1" >
                    <div class="btn-group">
                    <form action="viewinvigilation.php" method="POST" style="border:none;  background-color: transparent ;">
                      <input type="hidden" name="id"  value="<?php echo $id; ?>">
                      <button type="submit" title="View Record" style="border:none;  background-color: transparent ;"><i class="all-icons fa fa-eye"></i></button>
                    </form>
                    <button type="button" data-toggle="modal" style="border:none;  background-color: transparent ;" data-target="#updatemodel<?php echo $id; ?>"><i class="all-icons fa fa-pencil"></i></button> 
                    <form class="form_action" action="deleteinvigilator.php" method="POST"  style="border:none;  background-color: transparent ;">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <button type="submit" title="Delete Record" style="border:none;  background-color: transparent ;"><i class="all-icons fa fa-trash" style=""></i></button>
                    </form>
                    <?php echo $button_view_excuse; ?>
                    </div>
                    
                  </td>
                  </tr>
         <div class="modal fade" id="updatemodel<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Edit Invigilation </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-title text-center">
               
              </div>
              <div class="">
              <form action="updateinvigilation.php" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control"<?php echo (!empty($invigilator_err)) ? 'is-invalid' : ''; ?> id="invigilators" placeholder="<?php echo $invigilator; ?>">
                    
                  </div>
                  
                  <div class="form-group">
                    <input type="text" class="form-control"<?php echo (!empty($course_err)) ? 'is-invalid' : ''; ?> id="course_name" placeholder="<?php echo $course; ?>">
                   
                  </div>
                  
                  <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Venue:</label>
                    <input type="text" class="form-control"<?php echo (!empty($venue_err)) ? 'is-invalid' : ''; ?> id="venue" placeholder="<?php echo $venue; ?>">
                  </div>
                  <div class="row">
                  <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Day:</label>
                    <input type="text" class="form-control"<?php echo (!empty($day_err)) ? 'is-invalid' : ''; ?> id="day" placeholder="<?php echo $day; ?>">
                  </div></div>
                  <div class="row">
                    <div></div>
                  <div class="form-group">
                  <label for="recipient-name" class="col-form-label">From Time:</label>
                  <input type="time" class="form-control"<?php echo (!empty($from_time_err)) ? 'is-invalid' : ''; ?> id="from_time" placeholder="<?php echo $from_time; ?>">
                  </div>
                  
                  <div class="form-group">
                  <label for="recipient-name" class="col-form-label">To Time:</label>
                    <input type="time" class="form-control"<?php echo (!empty($to_time_err)) ? 'is-invalid' : ''; ?> id="to_time" placeholder="<?php echo $to_time; ?>">
                  </div>
                  </div>
                  <!-- footer -->
                  
                        <div class="modal-footer">  
                  <button data-dismiss="modal" class="btn btn-secondary btn-sm">Cancel</button>
                <button type="submit" name="updateinvingator" class="btn btn-primary btn-sm">Edit</button> 
                        </div>
                   
                   
                  <!-- end footer -->
                </form>
              </div>
            </div>
          </div>
           </div>
      </div>

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
                <h4>Add New Invigilator</h4>
              </div>
              <div class="d-flex flex-column text-center">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="staffname"placeholder="Staff Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursename" placeholder="Course Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="venue" placeholder="Venue">
                  </div>
                  <div class="form-group">
                    <input type="time" class="form-control" id="time" placeholder="Time">
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
      
      

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    
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
<!-- <style>
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
    /* .table100 .ps__rail-y {
    width: 9px;
    background-color: none;
    opacity: 1 !important;
    right: 5px;
    } */
    /* .table100 .ps__rail-y::before {
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
      width: 20%;
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
      width: 15%;
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
      /* .table100 {
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
      /* .table100.ver1 th {
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
      /*---------------------------------------------
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
      }  */ 
    /*=================================================================
  </style>*/-->


</html>