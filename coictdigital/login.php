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
    $year = $_POST["year"];
    $programme = $_POST["programme"];
    $course = $_POST["course"];
    $result = fetchProceedEvalutation($year, $programme, $course);

    print_r($result);

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

    $resultA = fetchProceedEvalutation($year, $programme, $course);
    $resultB = fetchCourseEvaluationResults($course);
    $resultA = array_merge($resultA, ["totalResponse" => countEvaluationResponse($course)]);

    $resultB = formatEvaluationQnResults($resultB);





    $allOkey = true;

    if ($allOkey) {
        $_SESSION["evaluationResultsA"] = $resultA;
        $_SESSION["evaluationResultsB"] = $resultB;



        header("Location: public/evaluationresults.php");
    }
} elseif (isset($_POST["teaching"])) {
    $allOkey = true;
    $studyYear = $_POST["study_year"];
    $semester = $_POST["semester"];
    $programme = $_POST["student_programme"];
    $coursecode = $_POST["course_code"];
    $result = fetchteaching($studyYear, $semester, $programme, $coursecode);

    print_r($result);
    if ($allOkey) {
        $_SESSION["teachingFilled"] = $result;
        header("Location: public/Teachingmonitoring.php");
    } else {
        echo "wrong";
    }
} elseif (isset($_POST["monitoringQn"])) {
    $allOkey = true;
    $result = submitEvaluationQnAns($_POST);


    if ($allOkey) {
        $_SESSION["studentFilledCount"] = $result;
        header("Location: public/courseevaluation.php");
    }
}
