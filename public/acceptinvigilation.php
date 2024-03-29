


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
        <div class="">            
          <!-- <span class="badge alert-success" style="float: right;">Admin</span> -->
          <div class="section-title">
            <h2>Exam Invigilation</h2>
          </div>
          <div class="">
          <form>
           
        
            <div class="form-group row">
              <div class="">
            
        
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
         
          </div>
            <div class="">
            
                <tbody>
                <?php 
                            $sql = "SELECT * FROM exam_invigilation" ;
                            $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                            
                              while($row = $result->fetch_assoc()){
                                  extract($row);
                                  $id = $row['id'];
                              
                            ?>
                  <tr>
                   <td ><?php echo $row['day']; ?></td>
                   <td ><?php echo $row['from_time'] ;?> - <?php echo $row['to_time'] ;?></td>
                   <td ><?php echo $row['course_name']; ?></td>
                   <td ><?php echo $row['venue']; ?></td>
                   <td ><?php echo $row['invigilators']; ?></td>
                   
                   <!-----crud icons ------->
                  <td class="col-1" >
                    <form class="form_action" action="read.php" method="POST">
                      <input type="hidden" name="id"  value="<?php echo $id; ?>">
                      <button type="submit" title="View Record"style="border:none;  background-color: transparent;"><i class="all-icons fa fa-eye"></i></button>
                    </form>
                  
                    
                  </td>
                  </tr>
         <div class="modal fade" id="updatemodel<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <form action="updateinvigilation.php" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control"<?php echo (!empty($invigilator_err)) ? 'is-invalid' : ''; ?> id="staffname" placeholder="<?php echo $invigilator; ?>">
                  </div>
                  
                  <div class="form-group">
                    <input type="text" class="form-control"<?php echo (!empty($course_err)) ? 'is-invalid' : ''; ?> id="course_name" placeholder="<?php echo $course; ?>">
                  </div>
                  
                  <div class="form-group">
                    <input type="text" class="form-control"<?php echo (!empty($venue_err)) ? 'is-invalid' : ''; ?> id="venue" placeholder="<?php echo $venue; ?>">
                  </div>
                  <div class="row">
                  <div class="form-group">
                    <input type="text" class="form-control"<?php echo (!empty($day_err)) ? 'is-invalid' : ''; ?> id="day" placeholder="<?php echo $day; ?>">
                  </div>
                  <div class="row">
                    <div><p>From Time</p></div>
                  <div class="form-group">
                    <input type="time" class="form-control"<?php echo (!empty($from_time_err)) ? 'is-invalid' : ''; ?> id="from_time" placeholder="<?php echo $from_time; ?>">
                  </div>
                  <div><p>To Time</p></div>
                  <div class="form-group">
                    <input type="time" class="form-control"<?php echo (!empty($to_time_err)) ? 'is-invalid' : ''; ?> id="to_time" placeholder="<?php echo $to_time; ?>">
                  </div>
                  </div>
                  
                  <button data-dismiss="modal" class="btn btn-secondary ml-2">Cancel</button>
                <button type="submit" name="updateinvingator" class="btn btn-primary">Edit</button> 
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
      </section><!-- End Form Section -->
      <div class="modal fade" id="declineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-title text-center">
                <h4>Reasons For Decline</h4>
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
                 
                  </div>
                  <button type="submit" class="mx-auto button" >SEND</button>
                </form>
              </div>
            </div>
          </div>
           </div>
      </div>
      
      
      


    <!-- ======= Contact Section ======= -->
   

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

</html>