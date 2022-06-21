<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");
    require_once("../includes/db.php");
    require_once("../includes/functions.php");
    require_once("../includes/scripts.php");
    ?>
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="fas fa-stream mobile-nav-toggle d-xl-none"></i>

   <!-- ======= Header ======= -->
   <header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="../assets/img/udsmlogo.jpg" alt="" class="img-fluid rounded-circle">
    </div>

   
    <nav id="navbar" class="text-center admin-nav nav-menu pt-5">

        <a href="index.php" class="nav-link scrollto"> <span>Dashboard</span></a>
        <a href="students.php" class="nav-link scrollto" active> <span>Students</span></a>
        <a href="alumni.php" class="nav-link scrollto"><span>Alumni</span></a>
        <a href="instructors.php" class="nav-link scrollto"> <span>Instructors</span></a>                      
        <a href="courses.php" class="nav-link scrollto"> <span>Courses</span></a>
        <a href="./../logout.php" class="nav-link scrollto"> <span>Logout</span></a>
      
    </nav><!-- .nav-menu -->
  </div>
</header>
  <!-- ======= Header ======= -->  

    <main id="main">

   <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="p-4">

<div class="section-title">
  <h2>CoICT Digital</h2>
</div>

        <div class="">         
          <h2>Students Dashboard</h2>
        </div>

       <div class="row">
       <div class="card p-4">
    <!----------------Row 1 Column 1-------------------------->
        <div class="col-sm-8">
        <div class="row">
            <h3>Total number of students is 260</h3>
        </div>

        <div class="row pt-2">
        <div class="col-sm-3">
            <div class="row">
        <div class="icon"><i class="fas fa-light fa-dna"></i></div>
        </div>
        <p>BSc in CS</p>
        <p>79</p>
        </div>
        <div class="col-sm-3">
        <div class="row">
        <div class="icon"><i class="fas fa-light fa-dna"></i></div>
        </div>
        <p>BSc in CEIT</p>
        <p>120</p>
        </div>
        <div class="col-sm-3">
       <div class="row">
        <div class="icon"><i class="fas fa-light fa-dna"></i></div>
        </div>
        <p>BSc in BIT</p>
        <p>100</p>
        </div>

        </div>

        
       </div>
<!----------------Row 1 Column 2-------------------------->
       <div class="col-sm-4">
              
       </div>

</div>


       <div class="pt-4">
    <!----------------Students List-------------------------->  
    <script>
      $(document).ready(function () {
      $('#myTable1').DataTable();
  });
    </script>  
        <div class="pt-4">
     
          <div class="">            
            <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                <h2>List of all students</h2>
</div>
<div class="col-sm-4">
                    <div class="fright">
          <button class="btn btn-primary" >Add New Student</button>
                 </div>  
                 </div>             
        </div>

        <div class=""></div>
     <table id="myTable1" class="table table-sm" cellspacing="0" width="100%">
  <thead class="table-secondary">
    <tr>
    <th class="th-lg">Name</th>
    <th class="th-lg">Registration Number</th>
    <th class="th-lg">Action</th>
</tr>
  </thead>
  <tbody>
    
  <?php   
                $sql = "select * from users where role=1 " ;
                $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                $id = $row['id'];
                 
                ?>
                  <tr>
                  <td ><?php echo $row['name']; ?></td>
                  <td ><?php echo $row['reg_no']; ?></td>
                  <!-----crud icons ------->
                  <td>
                                                          
                    <a href="#editModal" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></a>  

                    <form method="POST" action="delete.php"> 
                      <input type="hidden" name="id" value="<?php echo $id; ?>">          
                    <button type="submit" name="delete" class="btn btn-light"><i class="fa fa-trash"></i></button>
                    </form>                   
                  </td>
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
                

<!----------------Alumni List-------------------------->  
 


      </div> 

       <!-- fading update student list-->
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
              <h4>Update student details</h4>
            </div>
            <div class="d-flex flex-column text-center">
            <?php   
                $sql = "select * from users where role=1 " ;
                $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $id = $row['id'];
                 
                ?>
              <form action="update.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="reg_no" placeholder="Registration number">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="role" placeholder="Role">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="student_programme" placeholder="Student's programme">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="study_year" placeholder="Study year">
                </div>
                <center><button type="submit" name="update" class="btn btn-primary">Update</button> </center> 
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }?>
    <!-- end of fading update student list-->

    </section><!-- End Services Section -->

      

    </main>

    <script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
    <!-- main js file -->
    <script src="assets/js/main.js"></script>

    <script src="https://kit.fontawesome.com/0cdec3100d.js" crossorigin="anonymous"></script>
<!-- main js file -->
<script src="assets/js/main.js"></script>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<!-- Chart Js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.js"></script>
<!-- Datatables Js-->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>



 
</body>
</html>