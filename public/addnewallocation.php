<?php
require_once("../includes/db.php");

    $query ="SELECT * FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

$semester ="";
$course="";
$instructor ="";
$supervisor = "";
$assistant= "";
$day ="";
$from_time ="";
$to_time ="";
$course_name="";
$venue= "";
$invigilator="";  


if(isset($_POST["allocate"])){

	global $conn;
	// receive all input values from the form
  $course = e($_POST["course"]);
  $instructor = e($_POST["instructor"]);
  $supervisor = e($_POST["supervisor"]);  
  $assistant= e($_POST["assistant"]);
  $semester = e($_POST["semester"]);  
 
  $sql = "INSERT INTO `course_allocation` (`course_name`,`instructor`,`evaluator`,`assistant`,`semester`) VALUES
   ('$course','$instructor','$supervisor','$assistant','$semester')";

  $result =  mysqli_query($conn, $sql);
  if($result){
  header("location: courseallocation.php");
    exit();
 }
 else{
    echo	"wrong code";
}
}

if(isset($_POST["invigilate"])){
  //  inserts();
  
  // function inserts()
  // {
    global $conn;
  
    // receive all input values from the form
    $day = e($_POST["date"]);
    $from_time = e($_POST["from_time"]);
    $to_time = e($_POST["to_time"]);
    $course_name = e($_POST["coursename"]);
    $invigilator=e($_POST["invigilator"]);
    $venue = e($_POST["venue"]);
   
  
    echo $sql = "INSERT INTO `exam_invigilation` (`day`,`from_time`,`to_time`,`course_name`,`venue`,`invigilators`) VALUES ('$day','$from_time','$to_time','$course_name','$venue','$invigilator')";
    $result =  mysqli_query($conn, $sql);
  
   if($result){
    header("location:examinvigilation.php");
      exit();
  }
  else{
      echo	"wrong code";
  }
  }
  
  
function e($val)
{
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}

$conn->close();


?>
