<?php
// connect to database
require_once("../includes/db.php");
// variable declaration
$semester ="";
$week ="";
$course_code ="";
$starting_time ="";
$ending_time = "";
$venue= "";
//$venue_capacity  = "";
$no_of_students = "";
$attendance = "";
$absence_reason = "";
$student_informed = "";
$time = "";
$started_late = "";
$teaching_mode = "";
$teaching_method = "";
$medium_of_instruction = "";
$flexRadioDefault1 = "";
$flexRadioDefault2 = "";
$flexRadioDefault3 = "";
$flexRadioDefault4 = "";
$flexRadioDefault5 = "";
$flexRadioDefault6 = "";
$flexRadioDefault7 = "";
$flexRadioDefault8 = "";
$flexRadioDefault9 = "";
$flexRadioDefault10 = "";
$special_matters = "";
$identified_matters = "";
$date = "";

// call the register() function if register_btn is clicked
if (isset($_POST['monitoringQn'])) {
	inserts();
}

// return user array from their id
function getUserById($id)
{
	global $conn;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

function inserts()
{
	global $conn;

	// receive all input values from the form
    $semester = e($_POST["semester"]);
    $week = e($_POST["week"]);
    $course_code = e($_POST["course_code"]);
	  $starting_time = e($_POST["starting_time"]);
    $ending_time = e($_POST["ending_time"]);
    $venue= e($_POST["venue"]);
   // $venue_capacity  = e($_POST["venue_capacity"]);
    $no_of_students = e($_POST["no_of_students"]);
    $attendance = e($_POST["attendance"]);
    $absence_reason = e($_POST["absence_reason"]);
    $student_informed = e($_POST["student_informed"]);
    $time = e($_POST["time"]);
    $started_late = e($_POST["started_late"]);
    $session_type = e($_POST["session_type"]);
    $teaching_mode = e($_POST["teaching_mode"]);
    $teaching_method = e($_POST["teaching_method"]);
    $medium_of_instruction= e($_POST["medium_of_instruction"]);
    $flexRadioDefault1= e($_POST["flexRadioDefault1"]);
    $flexRadioDefault2 = e($_POST["flexRadioDefault2"]);
    $flexRadioDefault3 = e($_POST["flexRadioDefault3"]);
    $flexRadioDefault4 = e($_POST["flexRadioDefault4"]);
    $flexRadioDefault5 = e($_POST["flexRadioDefault5"]);
    $flexRadioDefault6 = e($_POST["flexRadioDefault6"]);
    $flexRadioDefault7 = e($_POST["flexRadioDefault7"]);
    $flexRadioDefault8 = e($_POST["flexRadioDefault8"]);
    $flexRadioDefault9 = e($_POST["flexRadioDefault9"]);
    $flexRadioDefault10 = e($_POST["flexRadioDefault10"]);
    $special_matters = e($_POST["special_matters"]);
    $identified_matters = e($_POST["identified_matters"]);
    $date = e($_POST["date"]);

			//$query = "INSERT INTO teachingmonitoring_questions (starting_time,ending_time,venue,venue_capacity,Number_of_students,attendance,reason_for_absence,session_starting_time,reason_for_startinglate,session_type,teaching_mode,teaching_method,medium_of_instruction,1, 2, 3, 4, 5, 6, 7, 8, 9, 10,special_matters,specialmatters_explanation) 
				//	  VALUES('$starting_time','$ending_time','$venue','$venue_capacity','$no_of_students','$attendance','$absence_reason','$time','$started_late','$session_type','$teaching_mode','$teaching_method','$medium_of_instruction','$flexRadioDefault1','$flexRadioDefault2','$flexRadioDefault3','$flexRadioDefault4','$flexRadioDefault5','$flexRadioDefault6','$flexRadioDefault7','$flexRadioDefault8','$flexRadioDefault9','$flexRadioDefault10','$special_matters','$identified_matters')";

    echo $query = "INSERT INTO teachingmonitoring_questions (semester,week,course_code,starting_time,ending_time,venue,Number_of_students,attendance,reason_for_absence,student_informed,session_starting_time,reason_for_startinglate,session_type,teaching_mode,teaching_method,medium_of_instruction, a, b, c, d, e, f, g, h, i, j,special_matters,specialmatters_explanation) 
    VALUES('$semester','$week','$course_code','$starting_time','$ending_time','$venue','$no_of_students','$attendance','$absence_reason','$student_informed','$time','$started_late','$session_type','$teaching_mode','$teaching_method','$medium_of_instruction','$flexRadioDefault1','$flexRadioDefault2','$flexRadioDefault3','$flexRadioDefault4','$flexRadioDefault5','$flexRadioDefault6','$flexRadioDefault7','$flexRadioDefault8','$flexRadioDefault9','$flexRadioDefault10','$special_matters','$identified_matters')";
    
    $result = 	mysqli_query($conn, $query);
    
      if($result){
        header("location: popup.php");
          exit();
      }
      else{
          echo	"wrong code";
      }
	
}

// escape string
function e($val)
{
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}

