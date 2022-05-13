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
        header("Location: public/index.php");
    } else {
        $_SESSION["message"] = "not logged in";
        $_SESSION["failedToSignin"] = "yes";
        header("Location: index.php");
    }
} elseif (isset($_POST["proceedEvalutation"])) {
    $allOkey = true;
    $course = $_POST["course"];
    $programme = $_POST["programme"];
    $year = $_POST["year"];
    $result = fetchProceedEvalutation($course, $programme, $year);

    if ($allOkey) {
        $_SESSION["evaluationFilled"] = $result;
        header("Location: public/courseevaluation.php");
    }
} elseif (isset($_POST["evaluationQn"])) {
    $allOkey = true;
    $result = submitEvaluationQnAns($_POST);


    if ($allOkey) {
        $_SESSION["studentFilledCount"] = $result;
        header("Location: public/courseevaluation.php");
    }
} elseif (isset($_POST["departmentForm"])) {
    //ldksj
    $studyYear = $_POST["year"];
    $programme = $_POST["programme"];
    $semester = $_POST["semester"];
    $course = $_POST["course"];

    $resultA = fetchProceedEvalutation($course, $programme, $studyYear);
    $resultB = fetchCourseEvaluationResults($course);
    $resultA = array_merge($resultA, ["totalResponse" => countEvaluationResponse($course)]);

    $resultB = formatEvaluationQnResults($resultB);





    $allOkey = true;

    if ($allOkey) {
        $_SESSION["evaluationResultsA"] = $resultA;
        $_SESSION["evaluationResultsB"] = $resultB;



        header("    Location: public/evaluationresults.php");
    }
}

//print_r($conn);
