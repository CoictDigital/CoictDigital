<!DOCTYPE html>
<html>
    <head>
        
<?php
    require_once("../includes/functions.php");
    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");
    require_once("../includes/db.php");
    require_once("../includes/fetchcoursecode.php");
    //get number of responses
  //   $couses = fetchCourse();
  // $courseRes = [];
  // while ($row = $couses->fetch_assoc()) {
  //   $row["totalResponses"] = getCourseResponse($row["course_code"]);
  //   array_push($courseRes, $row);
 // }
  //   if (isset($_SESSION["teachingFilled"])) {
  //     unset($_SESSION['teachingFilled']);
  //   } else {
  //   }

  //   if (!empty($_POST["course_code"])) {
  //     $id = $_POST['course_code'];
  //     $query = "select * from courses where course_code=$id";
  //     $result = mysqli_query($conn, $query);
  //     if ($result->num_rows > 0) {
  //         echo '<option value="">Select course_code</option>';
  //         while ($row = mysqli_fetch_assoc($result)) {
  //             echo '<option value="' . $row['id'] . '">' . $row['course_code'] . '</option>';
  //         }
  //     }
  // } elseif (!empty($_POST['sid'])) {
      
  //     }
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
    <section>
        <div class="">
          <div class="row justify-content-center align-items-center">
        
    
<div class="col-sm-4">
<form action="./../login.php" class="card p-4 rounded shadow details" method="POST">
<p class="text-center pt-3">Please select the corresponding details</p>

<div class="mb-3">
<select class="form-select" aria-label="Default select example" name="study_year" id="year" required>
<option value="">Year of study</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select> 
</div>

<div class="mb-3">
<select class="form-select" aria-label="Default select example" name="semester" id="semester" required>
<option value="">Semester</option>
<option value="1">1</option>
<option value="2">2</option>
</select> 
</div>


<div class="mb-3">
<select class="form-select" aria-label="Default select example" name="course_code" required>
<option value="">Course</option>
        <?php
         $query = "select DISTINCT course_code from teachingmonitoring_questions";
         //$query1 = mysqli_query($conn, $qr);
         $result = $conn->query($query);
         if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
       ?>

      if ($row['course_code']!=$i) {
        $i=0;
           $i= $row['course_code']
        <option value="<?php echo $row['course_code']; ?>"><?php echo $row['course_code']; ?></option>
       }
<?php
    }
}

?>
</select> 
</div>
<!-- 
<div class="mb-3">
    <select class="form-select" aria-label="Default select example" name="course_code">
          <option>Course code</option>
          <?php 
           foreach ($options as $option) {
          ?>
          <option><?php echo $option['course_code']; ?> </option>
          <?php 
           }
          ?>    
    </select>
</div>  -->

<button type="submit" class="mx-auto button" name="teaching">Proceed</button>

<a href="index.php"><p class="text-center pt-3">Cancel</p></a>
                </form>
            </div>
            </div>
            </div>
        </section>
</main>

<script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>


<script>
  var study_year = "";
$(function(){
  $("#year").change(function(){
      
      var displayresult=$("#year option:selected").text();
      study_year =displayresult;
  });
});
  $(function(){
  $("#semester").change(function(){
      
      var displayresult=$("#semester option:selected").text();
      
  });
    });
    </script>
    
  </body>
</html>