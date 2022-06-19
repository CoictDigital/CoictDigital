<?php
 require_once("../includes/db.php");
 require_once("../includes/functions.php");

if (isset($_POST["update"])) {

  $id = $_POST["id"];
  $name=$_POST["name"];
  $reg_no=$_POST["reg_no"];
  $role=$_POST["role"];
  $student_programme=$_POST["istudent_programme"];
  $study_year=$_POST["study_year"];

  $query="UPDATE `users` SET `name`='$name',`reg_no`='$reg_no',`role`='$role',`student_programme`='$student_programme',
  `study_year`='$study_year'  WHERE id='$id' ";
  $results=mysqli_query($conn,$query);

  if ($results) {
    header("Location: index.php");

} else{
    echo"<script>alert('Data Not Deleted')</script>";
}
}

  
  ?>