<?php 
require_once("../includes/db.php");
require_once("../public/login.php");

// $flexRadioDefault11 = ''; 
// if( isset( $_GET['flexRadioDefault11'])) {
//     $id = $_GET['flexRadioDefault11']; 
// } 

if(isset($_POST[monitoringQn]))
{
    $starting_time = mysqli_real_escape_string($conn,$_POST["starting_time"]) ;
    $ending_time = mysqli_real_escape_string($conn,$_POST["ending_time"]);
    $venue= mysqli_real_escape_string($conn,$_POST["venue"]);
    $venue_capacity  = mysqli_real_escape_string($conn,$_POST["venue_capacity"]);
    $no_of_students = mysqli_real_escape_string($conn,$_POST["no_of_students"]);
    $attendance = mysqli_real_escape_string($conn,$_POST["attendance"]);
    $absence_reason = mysqli_real_escape_string($conn,$_POST["absence_reason"]);
    $student_informed =mysqli_real_escape_string($conn, $_POST["student_informed"]);
    $time = mysqli_real_escape_string($conn,$_POST["time"]);
    $started_late = mysqli_real_escape_string($conn, $_POST["started_late"]);
    $session_type = mysqli_real_escape_string($conn, $_POST["session_type"]);
    $teaching_mode = mysqli_real_escape_string($conn,$_POST["teaching_mode"]);
    $teaching_method = mysqli_real_escape_string($conn, $_POST["teaching_method"]);
    $medium_of_instruction = mysqli_real_escape_string($conn, $_POST["medium_of_instruction"]);
    $flexRadioDefault1 = mysqli_real_escape_string($conn, $_POST["flexRadioDefault1"]);
    $flexRadioDefault2 = mysqli_real_escape_string($conn, $_POST["flexRadioDefault2"]);
    $flexRadioDefault3 = mysqli_real_escape_string($conn,$_POST["flexRadioDefault3"]);
    $flexRadioDefault4 = mysqli_real_escape_string($conn, $_POST["flexRadioDefault4"]);
    $flexRadioDefault5 = mysqli_real_escape_string($conn,$_POST["flexRadioDefault5"]);
    $flexRadioDefault6 = mysqli_real_escape_string($conn,$_POST["flexRadioDefault6"]);
    $flexRadioDefault7 = mysqli_real_escape_string($conn,$_POST["flexRadioDefault7"]);
    $flexRadioDefault8 = mysqli_real_escape_string($conn,$_POST["flexRadioDefault8"]);
    $flexRadioDefault9 = mysqli_real_escape_string($conn,$_POST["flexRadioDefault9"]);
    $flexRadioDefault10 = mysqli_real_escape_string($conn,$_POST["flexRadioDefault10"]);
    $special_matters = mysqli_real_escape_string($conn,$_POST["special_matters"]);
    $identified_matters = mysqli_real_escape_string($conn,$_POST["identified_matters"]);
    
    $sql = INSERT INTO teachingmonitoring_questions (starting_time,ending_time,venue,venue_capacity,Number_of_students,attendance,reason_for_absence,student_informed,session_starting_time,reason_for_startinglate,session_type,teaching_mode,teaching_method,medium_of_instruction,1,2,3,4,5,6,7,8,9,10,special_matters,specialmatters_explanation)
    VALUES (starting_time,ending_time,venue,venue_capacity,no_of_students,attendance,absence_reason,student_informed,time,started_late,session_type,teaching_mode,teaching_method,medium_of_instruction,flexRadioDefault1,flexRadioDefault2,flexRadioDefault3,flexRadioDefault4,flexRadioDefault5,flexRadioDefault6,flexRadioDefault7,flexRadioDefault8,flexRadioDefault9,flexRadioDefault10,special_matters,identified_matters);
    
    $result = mysqli_query($conn,$sql);
    
    if($result){
        header("location: index.php");
        exit();
    }
    else{
        echo"<script>alert('wrong code')";
    }
}
?>