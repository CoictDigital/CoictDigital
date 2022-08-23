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

    if(isset($_POST["declineinvigilation"])){

      global $conn;
      // receive all input values from the form
      
      // $instructor_id = e($_POST["instructor_id"]);
      $instructor_name= $_SESSION["userData"]['name'];
      $instructor_id= $_SESSION["userData"]['id'];
      // $instructor= e($_POST["instructor"]);
      $comment = e($_POST["comment"]);  
     
      $sql = "INSERT INTO `excuses` (`instructor`,`comment`) VALUES
       ('$instructor_name','$comment')";
    echo $sql;
      $result =  mysqli_query($conn, $sql);
      if($result){
      header("location:acceptinvigilation.php");
        exit();
     }
     else{
        echo	"wrong code";
    }
  }
    ?>


  <main id="main">

  
       <!-- ======= Form Section ======= -->
       <section id="invigilation" class="services">
        <div class="container-fluid">            
          <!-- <span class="badge alert-success" style="float: right;">Admin</span> -->
          <div class="section-title">
            <h2>Exam Invigilation</h2>
          </div>
          <div class="">
          <form>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"> <i class="fa fa-search" aria-hidden="true"></i>Search</label>
              <div class="col-sm-5 mb-1">
                <input type="text" class="form-control">
              </div>
              
            </div>
           <div class="form-group row">
              <h5>  Other Allocation</h5>
            </div>
            <div class="form-group row">
              <div class="centre">
              <table class="table table-sm">
                <thead class="table-secondary">
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Time</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Invigilators</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                 
                <?php   
                $sql = "select * from exam_invigilation" ;
              //   $sql = "SELECT id, firstname, lastname FROM MyGuests";
              //  $result = $conn->query($sql);

                $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                 
                ?>
                  <tr>
                   <td><?php echo $row['day']; ?></td>
                   <td><?php echo $row['from_time'] ;?> - <?php echo $row['to_time'] ;?></td>
                   <td><?php echo $row['course_name']; ?></td>
                   <td><?php echo $row['venue']; ?></td>
                   <td><?php echo $row['invigilators']; ?></td>
                   
                   <!-- <td><?php echo $row['#']; ?></td> -->
                   <td><a href="#editModal"  class="fa fa-pencil" data-toggle="modal" data-target="#editModal"></a>  <a href="#"  class="fa fa-trash"></a> <a href="#"  class="fa fa-history"></a></td>
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
      <!-- <div class="modal fade" id="addnewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      </div> -->

      <!-- end of fading aadnew form-->
      
      <!-- fading edit form-->
      <!-- <div class="modal fade" id="declineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
           </div> -->
      </div>

      <!-- end of fading edit form-->


    <!-- ======= Contact Section ======= -->
    



    <!-- End Contact Section -->

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
 <?php
function e($val)
{
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}
?>
</html>