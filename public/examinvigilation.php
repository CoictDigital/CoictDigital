
<!DOCTYPE html>
<html lang="en">

<head>
<?php
     require_once("./../includes/functions.php");
     require_once("../includes/headerContent.php");
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

     <div class="row" >
      <div class="col-md-12"><div class="dropdown" style="float: right; width: 100px;">
          <!-- <button class="dropbtn">user<i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="#">Profile</a>
            <a href="#">Logout</a> --> 
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
    </div>
      
      </div>
    </div>
       <!-- ======= Form Section ======= -->
       <section id="invigilation" class="services">
        <div class="container-fluid">            
         
          <div class="section-title">
            <h2>EXAM INVIGILATION</h2>
          </div>
          <div class="">
          
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><i class="fa fa-search" aria-hidden="true"></i> Search</label>
              <div class="col-sm-5 mb-1">
                <input type="text" class="form-control">
              </div>
              <!-- <div class="col-sm-5 mb-1">
              <a href="#addnewModal"  data-toggle="modal" data-target="#addnewModal" > 
                <button type="submit" class="mx-auto button" style="float: right; height: 40px;">Add New</button>
              </a>
              </div> -->
            </div>

   <form action="addnewallocation.php" method="POST">
               <div class="">
                 <div class="">
                  <div class="card">
                  <div class="card-body">
                    <div class="row">
                    <?php 
                      $query ="SELECT * FROM courses";
                      $result = $conn->query($query);
                      if($result->num_rows> 0){
                        $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                          }
                     ?>
                <div class="col-sm-4">
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
              <select class="form-select" name="invigilator" aria-label="Default select example">
                      
                      <option selected>Select Instructor</option>
                      <?php 
                      foreach ($options as $option) {
                      ?>
                        <option><?php echo $option['instructor']; ?> </option>
                        <?php 
                        }
                      ?>
                            
              </select>
              </div>

              <div class="col-sm-4">
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
              <div class="col-sm-4">
                 
                  <input class="form-select" type="date" name="date" placeholder="Select day">
                
              
               
              </div>
              <div class="col-sm-4">
                <select class="form-select" name="from_time" aria-label="Default select example">
                  <option selected> From Time</option>
              
                  <option value="7:30">7:30   </option>
                  <option value="8:00 ">8:00   </option>
                  <option value="8:30">8:30   </option>
                  <option value="9:00">9:00   </option>
                  <option value="9:30">9:30   </option>
                  <option value="11:30">11:30   </option>
                  <option value="9:30">15:30   </option>
                  
                </select>
              </div>
              <div class="col-sm-4">
                <select class="form-select" name="to_time" aria-label="Default select example">
                  <option selected>To time</option>
                  <option value="10:30">10:30</option>
                  <option value="10:30">11:00</option>
                  <option value="14:30">14:30</option>
                  <option value="18:30">18:30</option>
                 
                  
                </select>
                    </div>
              </div>
                </div>
                <button type="submit" name="invigilate" class="mx-auto button" >Save</button>
              </div>
              </div>
              </div>
     </form>
        
           <div class="form-group row">
              <h5>Table of selected exam Invigilators</h5>
            </div>
            <div class="limiter">
            <div class="container-table100">
        <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
        <div class="table100-head">
        <table>
                <thead>
                <tr  class="row100 head">
                    <th class="cell100 column1">Day</th>
                    <th class="cell100 column2">Time</th>
                    <th class="cell100 column3">Course Name</th>
                    <th class="cell100 column4">Venue</th>
                    <th class="cell100 column5">Invigilators</th>
                    <th class="cell100 column6">Action</th>
                  </tr>
                </thead>
          </table>
          </div>
            <div class="table100-body js-pscroll">
            <table>
                <tbody>
                <?php 
                            $sql = "SELECT * FROM exam_invigilation" ;
                            $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                            
                              while($row = $result->fetch_assoc()){
                                  extract($row);
                              
                            ?>
                  <tr>
                   <td class="cell100 column1"><?php echo $row['day']; ?></td>
                   <td class="cell100 column2"><?php echo $row['from_time'] ;?> - <?php echo $row['to_time'] ;?></td>
                   <td class="cell100 column3"><?php echo $row['course_name']; ?></td>
                   <td class="cell100 column4"><?php echo $row['venue']; ?></td>
                   <td class="cell100 column5"><?php echo $row['invigilators']; ?></td>
                   
                   <!-- <td><?php echo $row['#']; ?></td> -->
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
                <h4>Edit Invigilation</h4>
              </div>
              <div class="d-flex flex-column text-center">
              <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="staffname"placeholder="Staff Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="assistantname"placeholder="Assistant Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursename" placeholder="Course Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="coursetoinvigilate" placeholder="Invigilation Course ">
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