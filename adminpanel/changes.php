<?php
session_start();
require_once("../includes/db.php");

if (isset($_POST["addnewstudent"])) {

    global $conn;
    $name = $_POST["name"];
    $regno = $_POST["reg_no"];
    $year = $_POST["study_year"];
    $programme = $_POST["student_programme"];
    $password = $_POST["password"];

    $sql = "INSERT INTO `users` ( `name`, `reg_no`, `password`, `role`, `student_programme`, `study_year`) 
    VALUES ('$name', '$regno', '$password', '1', '$programme', '$year')";

    $results = mysqli_query($conn, $sql);
    
    if($results){
    header("Location: students.php");
    }else {
        echo "wrong";
    }
  
} elseif (isset($_POST["addnewcourse"])) {

    global $conn;
    $code = $_POST["course_code"];
    $title = $_POST["course_title"];
    $year = $_POST["study_year"];
    $instructor = $_POST["instructor"];
    $venue = $_POST["venue"];
    $size = $_POST["class_size"];
    $assistant = $_POST["assistant"];
    $semester = $_POST["semester"];

    $sql = "INSERT INTO `courses` ( `course_code`, `study_year`, `course_title`, `instructor`, `venue`, `class_size`, `department`, `college`, `assistant`, `semester`) 
    VALUES ('$code', '$year', '$title', '$instructor', '$venue', '$size', 'CSE', 'CoICT', '$assistant', '$semester')";

    $results = mysqli_query($conn, $sql);
    
    if($results){
    header("Location: courses.php");
    }else {
        echo "wrong";
    }
  
} elseif(isset($_POST["updatestudent"])) {

    global $conn;
    $id = $_POST["id"];
    $name = $_POST["name"];
    $regno = $_POST["reg_no"];
    $year = $_POST["study_year"];
    $programme = $_POST["student_programme"];
    $password = $_POST["password"];
  
    $query="UPDATE `users` SET `name`='$name',`reg_no`='$regno',`student_programme`='$programme', `study_year`='$year'
    , `password`='$password' WHERE id='$id' ";

    $results = mysqli_query($conn, $query);
    
  
    if ($results) {
      header("Location: students.php");
  
  } else{
      echo"<script>alert('Data Not Updated')</script>";
  }
  } elseif(isset($_POST["updatecourse"])) {

    global $conn;
    $code = $_POST["course_code"];
    $title = $_POST["course_title"];
    $year = $_POST["study_year"];
    $instructor = $_POST["instructor"];
    $venue = $_POST["venue"];
    $size = $_POST["class_size"];
    $assistant = $_POST["assistant"];
    $semester = $_POST["semester"];

    $sql = "UPDATE `courses` SET `study_year`='$year', `course_title`='$title', `instructor`='$instructor', 
    `venue`='$venue', `class_size`='$size', `assistant`='$assistant', `semester`='$semester' where `course_code`='$code'";

    $results = mysqli_query($conn, $sql);
    
  
    if ($results) {
      header("Location: courses.php");
  
  } else{
      echo"<script>alert('Data Not Updated')</script>";
  }
  } elseif(isset($_POST["updateinstructor"])) {

    global $conn;
    $code = $_POST["course_code"];
    $title = $_POST["course_title"];
    $instructor = $_POST["instructor"];
    $assistant = $_POST["assistant"];

    $sql = "UPDATE `courses` SET  `course_title`='$title', `instructor`='$instructor', `assistant`='$assistant' where `course_code`='$code'";

    $results = mysqli_query($conn, $sql);
    
  
    if ($results) {
      header("Location: instructors.php");
  
  } else{
      echo"<script>alert('Data Not Updated')</script>";
  }
  }  elseif(isset($_POST["deletestudent"])) {

    $id = $_POST["id"];
    $query="DELETE FROM users WHERE id='$id' ";
    $results=mysqli_query($conn,$query);
  
    if ($results) {
     
      header("Location: students.php");
  
  } else{
      echo"<script>alert('Data Not Deleted')</script>";
  }
  } elseif(isset($_POST["deletecourse"])) {

    global $conn;
    $code = $_POST["course_code"];
    $query="DELETE FROM courses WHERE `course_code`='$code' ";
    $results=mysqli_query($conn,$query);
  
    if ($results) {
     
      header("Location: courses.php");
  
  } else{
      echo"<script>alert('Data Not Deleted')</script>";
  }
  }

  elseif(isset($_POST["deleteinstructor"])) {

    global $conn;
    $code = $_POST["course_code"];
    $query="DELETE FROM courses WHERE `course_code`='$code' ";
    $results=mysqli_query($conn,$query);
  
    if ($results) {
     
      header("Location: instructors.php");
  
  } else{
      echo"<script>alert('Data Not Deleted')</script>";
  }
  }




?>