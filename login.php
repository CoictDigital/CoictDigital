<?php
session_start();
require_once("includes/db.php");
require_once("includes/functions.php");




if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = authenticate_user($username, $password); //use this to store in an session

    if ($email) { // user verfied
        $_SESSION["userData"] = $email;
        unset($_SESSION['message']);

        if ($_SESSION["userData"]["role"] == 1) {
            header("Location: student/index.php");
          } else if ($_SESSION["userData"]["role"] == 2) {
            header("Location: public/index.php");
          }else if ($_SESSION["userData"]["role"] == 3) {
            header("Location: public/index.php");
          }else if ($_SESSION["userData"]["role"] == 4) {
            header("Location: adminpanel/index.php");
          }
    } else {
        $_SESSION["message"] = "not logged in";
        $_SESSION["failedToSignin"] = "yes";
        header("Location: index.php");
    }
} elseif (isset($_POST["proceedEvalutation"])) {
    $allOkey = true;
    $course = $_POST["course_code"];
    // $count= count($_POST["course_code"]);
    $user_id= $_SESSION["userData"]["id"];
    $course_id= $_POST["course_code"];

    $result = fetchProceedEvalutation($course);
    $result1= alreadyFilled($user_id,$course_id);

    if ($allOkey) {
        $_SESSION["evaluationFilled"] = $result;
        header("Location: public/courseevaluation.php");
    }
    if ($result1) {
        $_SESSION["alreadyFilled"] = $result1;
        header("Location: student/filled.php");
    }

} elseif (isset($_POST["evaluationQn"])) {
    $allOkey = true;
    $result = submitEvaluationQnAns($_POST);
//echo
    if ($allOkey) {
        $_SESSION["studentFilledCount"] = $result;

        header("Location: student/submitevaluation.php");
    }
} elseif (isset($_POST["teaching"])) {
    $allOkey = true;
    // $studyYear = $_POST["study_year"];
    $semester = $_POST["semester"];
    // $programme = $_POST["student_programme"];
    $coursecode = $_POST["course_code"];
    $result = fetchteaching($semester,$coursecode);

    print_r($result);
    if ($allOkey) {
        $_SESSION["teachingFilled"] = $result;
        header("Location: public/testmonitoring.php?courseCode=$coursecode");
    } else {
        echo "wrong";
    }
    
} elseif (isset($_POST["monitoringQn"])) {
    $allOkey = true;
   // $result = submitEvaluationQnAns($_POST);


    if ($allOkey) {
        $_SESSION["studentFilledCount"] = $result;
        header("Location: public/Teachingmonitoring.php");
    }
}