
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
<link href="public\assets\css\style.css" rel="stylesheet">
<head>
  
<?php
   require_once("./../includes/functions.php");
   require_once("../includes/headerContent.php");
   require_once("../includes/scripts.php");
  //  require_once("../includes/sessionStuffs.php");
   require_once("../includes/db.php");
  
    
function e($val)
{
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}
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
   
     

     <!--------------table of staff-------------------------------------------------------------->
     <div class="p-4">
     <div class="card"> 
     <div class="card-body">
     <p class="card-title">Table of Allocated Instructors</p>
     <table id="dtBasicExample" class="table table-striped table-bordered table-lg" cellspacing="0" width="100%">
  <thead>
    <tr>
    <th class="th-lg">Instructors</th>
    <th class="th-lg">Course Name</th>
    <th class="th-lg">Evaluator</th>
    <th class="th-lg">Semester</th>
    <th class="th-lg">Year</th>
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
                  <tr >
                  <td ><?php echo $row['instructor']; ?></td>
                  <td ><?php echo $row['course_name']; ?></td>
                  <td ><?php echo $row['evaluator']; ?></td>
                  <td ><?php echo $row['semester']; ?></td>
                  <!-- <td ><?php echo$row['year']; ?></td> -->
                  <td> 2021/2022  </td>
                  <!-----crud icons ------->
                  <td class="col-1" >
                    <form class="form_action" action="read.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <button type="submit" title="View Record" style="border:none;  background-color: transparent;"><i class="all-icons fa fa-eye"></i></button>
                    </form>  

                        <!-- <a  href="deleteAllocation.php? id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a> -->
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

         
        
    </section><!-- End Form Section -->
   

    

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
<style>
  
</style>

</html>