<?php
require_once("../includes/db.php");



?>

<body>
	
	



<?php 
    $query ="SELECT * FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
<?php 
// update courses table from course allocation
// $query ="UPDATE courses
// INNER JOIN course_allocation ON (courses.instructor = course_allocation.instructor)
// SET courses.course_title = course_allocation.course_name";

?>
<?php
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
//  inserts();

// function inserts()
// {
	global $conn;

	// receive all input values from the form
  $course = e($_POST["course"]);
  $instructor = e($_POST["instructor"]);
  $semester = e($_POST["semester"]);
  $supervisor = e($_POST["supervisor"]);
  $assistant= e($_POST["assistant"]);
 
  $sql = "INSERT INTO `course_allocation` (`instructor`,`course_name`,`semester`,`supervisor`,`assistant`) VALUES ('$instructor','$course','$semester','$supervisor','$assistant')";
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
    $day = e($_POST["day"]);
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
