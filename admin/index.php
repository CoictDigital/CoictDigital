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

    <center><p class="text-white">Welcome </br>
  <?php
               echo $_SESSION["userData"]["name"];
              ?></p></center>

    <nav id="navbar" class="text-center admin-nav">

        <a href="index.php" class="nav-link scrollto"> <span>Dashboard</span></a>
        <a href="students.php" class="nav-link scrollto"> <span>Students</span></a>
        <a href="alumni.php" class="nav-link scrollto"><span>Alumni</span></a>
        <a href="instructors.php" class="nav-link scrollto"> <span>Instructors</span></a>                      
        <a href="courses.php" class="nav-link scrollto"> <span>Courses</span></a>
        <a href="department.php" class="nav-link scrollto"> <span>Departments</span></a>
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
          <p>A management information system that manages course evaluation by students at the end of the semester, alumni 
            information once they graduate, monitors teaching and learning processes, allocation of courses and exam invigilators to staff in the college.</p>
        </div>
       <div class="row">
    <!----------------Total number of Students-------------------------->
        <div class="col-sm-3">
        <div class="card">
          <div class="admin-values">
          <?php 
          $query ="SELECT COUNT(*) AS number_of_students FROM users WHERE role ='1'";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_students"];
          if($result->num_rows> 0){
    ?>
          <img src="assets/img/students.jpg" alt="">
            <p>Total Students</br><span class="count-yellow"><?php echo $count; } ?> </span></p>
       </div>
       </div>
       </div>
<!----------------Total number of Instructors-------------------------->
       <div class="col-sm-3">
        <div class="card">
        <div class="admin-values">
        <?php 
          $query ="SELECT Distinct COUNT(instructor) AS number_of_instructors FROM courses WHERE instructor is not null";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_instructors"];
          if($result->num_rows> 0){
    ?>
          <img src="assets/img/instructors.jpg" alt="">
            <p>Total Instructors</br><span class="count-yellow"><?php echo $count; } ?> </span></p>
       </div>
       </div>
       </div>
<!----------------Total number of Courses-------------------------->
       <div class="col-sm-3">
        <div class="card">
        <div class="admin-values">
        <?php 
          $query ="SELECT Distinct COUNT(course_code) AS number_of_courses FROM courses WHERE course_code is not null";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_courses"];
          if($result->num_rows> 0){
    ?>
          <img src="assets/img/courses.jpg" alt="">
            <p>Total Courses</br><span class="count-yellow"><?php echo $count; } ?> </span></p>
       </div>
       </div>
       </div>
<!----------------Total number of Alumni-------------------------->
       <div class="col-sm-3">
        <div class="card">
        <div class="admin-values"><?php 
          $query ="SELECT COUNT(*) AS number_of_alumni FROM alumni";
          $result = $conn->query($query);
          $count = mysqli_fetch_assoc($result)["number_of_alumni"];
          if($result->num_rows> 0){
    ?>
          <img src="assets/img/alumni.png" alt="">
            <p>Total Alumni</br><span class="count-yellow"><?php echo $count; } ?> </span></p>
       </div>
       </div>
       </div>

       </div>


       <div class="p-4">
    <!----------------Students List-------------------------->  
    <script>
      $(document).ready(function () {
      $('#myTable1').DataTable();
  });
    </script>  
        <div class="row">
        <div class="card">
          <div class="admin-values">            
            <div class="card-body">
            <h4 class="count-yellow">Students List</h4>
     <table id="myTable1" class="table table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
    <th class="th-lg">Name</th>
    <th class="th-lg">Registration Number</th>
    <th class="th-lg">Action</th>
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
                      </div>
<!----------------Instructors List-------------------------->  
<script>
      $(document).ready(function () {
      $('#myTable2').DataTable();
  });
    </script>
<div class="p-4">
       <div class="row">
        <div class="card">
        <div class="admin-values">
            
            <div class="card-body">
            <h4 class="count-yellow">Instructors List</h4>
     <table id="myTable2" class="table table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
    <th class="th-lg">Name</th>
    <th class="th-lg">Course</th>
    <th class="th-lg">Action</th>
  </thead>
  <tbody>
  <?php   
                $sql = "select * from courses where instructor is not null " ;
                $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                 
                ?>
                  <tr>
                  <td ><?php echo $row['instructor']; ?></td>
                  <td ><?php echo $row['course_code']; ?></td>
                  <!-----crud icons ------->
                  <td>                    
                    <a href="#editModal" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></a>                   
                    <a href=""><i class="fa fa-trash pl-4"></i></a>
                                      
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

       </div>

       <div class="p-4">
  <!----------------Courses List--------------------------> 
  <script>
      $(document).ready(function () {
      $('#myTable3').DataTable();
  });
    </script>       
        <div class="row">
        <div class="card">
          <div class="admin-values">            
            <div class="card-body">
            <h4 class="count-yellow">Courses List</h4>
     <table id="myTable3" class="table table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
    <th class="th-lg">Course Code</th>
    <th class="th-lg">Course Title</th>
    <th class="th-lg">Action</th>
  </thead>
  <tbody>
  <?php   
                $sql = "select * from courses where course_code is not null " ;
                $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                 
                ?>
                  <tr>
                  <td ><?php echo $row['course_code']; ?></td>
                  <td ><?php echo $row['course_title']; ?></td>
                  <!-----crud icons ------->
                  <td>                    
                    <a href="#editModal" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></a>                   
                    <a href=""><i class="fa fa-trash pl-4"></i></a>
                                      
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
       </div>
<!----------------Alumni List-------------------------->  
<script>
      $(document).ready(function () {
      $('#myTable4').DataTable();
  });
    </script>  
<div class="p-4">
       <div class="row">
        <div class="card">
        <div class="admin-values">
            
            <div class="card-body">
            <h4 class="count-yellow">Alumni List</h4>
     <table id="myTable4" class="table table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
    <th class="th-lg">Name</th>
    <th class="th-lg">Email</th>
    <th class="th-lg">Action</th>
  </thead>
  <tbody>
  <?php   
                $sql = "select * from alumni" ;
                $result = $conn->query($sql);

                 if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()){
                extract($row);
                 
                ?>
                  <tr>
                  <td ><?php echo $row['alumni_name']; ?></td>
                  <td ><?php echo $row['email']; ?></td>
                  <!-----crud icons ------->
                  <td>                    
                    <a href="#editModal" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></a>                   
                    <a href=""><i class="fa fa-trash pl-3"></i></a>
                                      
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

       </div>

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
 
</body>
</html>