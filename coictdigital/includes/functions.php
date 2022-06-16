<?php
require_once("functionHelpers.php");
require_once("db.php");

function fetchStudentProgrammes($courseCode)
{
    global $conn;
    $studentProgrammes = [];

    $sql = "SELECT Distinct programme.student_programme FROM programme,programme_course WHERE programme_course.course_code='$courseCode' AND programme.id=programme_course.id_programme";
    $results = mysqli_query($conn, $sql);
    if ($results) {
        while ($row = mysqli_fetch_assoc($results)) {
            $studentProgrammes[] = $row["student_programme"];
        }
    }
    return $studentProgrammes;
}

function getCourseResponse($course_code)
{
    global $conn;
    $sql = "SELECT COUNT(*) AS response_count FROM evaluation_questions WHERE course_code='$course_code'";
    $results = mysqli_query($conn, $sql);
    // die(print_r(mysqli_fetch_assoc($results)["response_count"]));\
    $count = mysqli_fetch_assoc($results)["response_count"];


    return $count;
}

function fetchCourse($year = "", $prog = "", $sem = "")
{
    global $conn;

    $sql = "";
    if ($year != "" && $prog != "" && $sem != "") { //all are year,prog and sem given
        $sql = "SELECT DISTINCT `courses`.`course_code`, assistant,class_size,college,course_title,department,instructor,semester,venue 
        FROM `courses`,`programme`,`programme_course`
         WHERE `programme`.`student_programme`='$prog' AND
          `programme`.`id`=`programme_course`.`id_programme`
           AND `programme_course`.`course_code`=`courses`.`course_code`
            AND `study_year`='$year' AND
         `semester`='$sem'";
    } else if ($year != "" && $prog != "" && $sem == "") { //only sem not given
        $sql = "SELECT DISTINCT `courses`.`course_code`, assistant,class_size,college,course_title,department,instructor,semester,venue 
        FROM `courses`,`programme`,`programme_course`
         WHERE `programme`.`student_programme`='$prog' AND
          `programme`.`id`=`programme_course`.`id_programme`
           AND `programme_course`.`course_code`=`courses`.`course_code`
            AND `study_year`='$year'";
    } else if ($year != "" && $sem != "" && $prog == "") { //only prog not given
        $sql = "SELECT DISTINCT `courses`.`course_code`, assistant,class_size,college,course_title,department,instructor,semester,venue 
        FROM `courses`,`programme`,`programme_course`
         WHERE  `study_year`='$year' AND
         `semester`='$sem'";
    } else if ($prog != "" && $sem != "" && $year == "") { //only year not given
        $sql = "SELECT DISTINCT `courses`.`course_code`, assistant,class_size,college,course_title,department,instructor,semester,venue 
        FROM `courses`,`programme`,`programme_course`
         WHERE `programme`.`student_programme`='$prog' AND
          `programme`.`id`=`programme_course`.`id_programme`
           AND `programme_course`.`course_code`=`courses`.`course_code` AND `semester`='$sem'";
        //only one is set
    } else if ($year != "" && $prog == "" && $sem == "") { //only year given
        $sql = "SELECT DISTINCT `courses`.`course_code`, assistant,class_size,college,course_title,department,instructor,semester,venue 
        FROM `courses`,`programme`,`programme_course`
         WHERE  `study_year`='$year'";
    } else if ($sem != "" && $year == "" && $prog == "") { //only sem given
        $sql = "SELECT DISTINCT `courses`.`course_code`, assistant,class_size,college,course_title,department,instructor,semester,venue 
        FROM `courses`,`programme`,`programme_course`
         WHERE `semester`='$sem'";
    } else if ($prog != "" && $sem == "" && $year == "") { //only prog given
        $sql = "SELECT DISTINCT `courses`.`course_code`, assistant,class_size,college,course_title,department,instructor,semester,venue 
        FROM `courses`,`programme`,`programme_course`
         WHERE `programme`.`student_programme`='$prog' AND
          `programme`.`id`=`programme_course`.`id_programme`
           AND `programme_course`.`course_code`=`courses`.`course_code`";
    } else {    //none is given
        //none is set
        $sql = "SELECT DISTINCT course_code,assistant,class_size,college,course_title,department,instructor,semester,venue FROM `courses`";
    }

    $results = mysqli_query($conn, $sql);
    return $results;
}

function checkIfUserFilledEv($userId, $couseId)
{
    $userFilled = false;
    global $conn;
    $sql = "SELECT * FROM `user_response` WHERE `user_id`='$userId' AND `course_code`='$couseId'";
    $results = mysqli_query($conn, $sql);

    // if (mysqli_num_rows($results) > 0) {
    //     $userFilled = true;
    // }
    // return $results;
}


function fetchProgramId($programme)
{
    global $conn;
    //write query
    $sql = "SELECT * FROM `programme` WHERE `student_programme`='$programme' ";

    $results = mysqli_query($conn, $sql);
    $results =  mysqli_fetch_assoc($results);

    return $results;
}

function getLastName($fullName)
{
    return explode(",", $fullName)[0];
}

function fetchStudentCourses($programme)
{
    global $conn;
    $sql = " SELECT * FROM `programme_course` WHERE `id_programme`=$programme ";
    $results = mysqli_query($conn, $sql);
    return $results;
}

function formatEvaluationQnResults($resultQuery)
{
    $resultB = [
        "1" => ["question" => "Instructor's preparedness on the subject matter", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "2" => ["question" => "Instructor's possession of up-to-date skills and knowledge in the subject matter", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "3" => ["question" => "Instructor's mode of delivery of the subject matter(techniques and styles)", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "4" => ["question" => "Instructor's management of time during teaching", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "5" => ["question" => "Instructor's fairness in grading of assignments and tests against marking scheme", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "6" => ["question" => "Instructor's capacity to provide timely feedback on assigments and tests(within 2 weeks)", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "7" => ["question" => "Instructor's attendance in the class", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "8" => ["question" => "Instructor's availability for consultations", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "9" => ["question" => "Manner in which instructor interacts with students in class?", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "10" => ["question" => "Generally, how do you rate the competency of the instructor to meet your learning satisfaction?", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        //key 11 is different, it has extra key `harassment_explanation`
        "11" => ["question" => "Instructor observed or complied with UDSM Sexual Harassment Code?", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0, "harassment_explanation" => []],
        "12" => ["question" => "How clear was the objective of the course", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "13" => ["question" => "How well was the course content coverage", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "14" => ["question" => "How well was the mode of assessment?(e.g sufficient tests, assignments, timed essays)", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "15" => ["question" => "How well were the teaching methods(Class participation, demonstration, etc )", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "16" => ["question" => "How well(updated) were the lecture notes and handouts?", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "17" => ["question" => "How well did the course link theory and practise?", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "18" => ["question" => "How adequate were the tutorials, seminars and practicals", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        "19" => ["question" => "Generally, how do you rate the relevance of the course to meet your expectations?", "excellent" => 0, "veryGood" => 0, "satisfactory" => 0, "poor" => 0, "veryPoor" => 0],
        //this harassment_explanation key will be deleted
        "harassment_explanation" => ["question" => "Explanation of Harassment Code", "explanations" => []]

    ];

    while ($data = mysqli_fetch_assoc($resultQuery)) {

        foreach ($data as $key => $val) {
            switch ($key) {
                case 1:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 2:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 3:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 4:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 5:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 6:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 7:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 8:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 9:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 10:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 11:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 12:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 13:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 14:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 15:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 16:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 17:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 18:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case 19:
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;
                case "harassment_explanation":
                    $resultB = updateValueForQn($resultB, $key, $val);
                    break;

                    // default:
                    //     echo "failed to read question answer value";
            }
        }
    }
    $resultB["11"]["harassment_explanation"] = $resultB["harassment_explanation"]["explanations"];
    unset($resultB["harassment_explanation"]);
    return $resultB;
}

function showErrorInQueryToDb($conn)
{
    echo mysqli_errno($conn) . ": " . mysqli_error($conn) . "\n";
}

function submitEvaluationQnAns($qnAns)
{
    global $conn;
    $reg_no = $_SESSION["userData"]["reg_no"];
    $course = $_SESSION["evaluationFilled"]["course_code"];
    $_1 = $qnAns["flexRadioDefault1"];
    $_2 = $qnAns["flexRadioDefault2"];
    $_3 = $qnAns["flexRadioDefault3"];
    $_4 = $qnAns["flexRadioDefault4"];
    $_5 = $qnAns["flexRadioDefault5"];
    $_6 = $qnAns["flexRadioDefault6"];
    $_7 = $qnAns["flexRadioDefault7"];
    $_8 = $qnAns["flexRadioDefault8"];
    $_9 = $qnAns["flexRadioDefault9"];
    $_10 = $qnAns["flexRadioDefault10"];
    $_11 = $qnAns["flexRadioDefault11"];
    $_12 = $qnAns["flexRadioDefault12"];
    $_13 = $qnAns["flexRadioDefault13"];
    $_14 = $qnAns["flexRadioDefault14"];
    $_15 = $qnAns["flexRadioDefault15"];
    $_16 = $qnAns["flexRadioDefault16"];
    $_17 = $qnAns["flexRadioDefault17"];
    $_18 = $qnAns["flexRadioDefault18"];
    $_19 = $qnAns["flexRadioDefault19"];
    $_20 = $qnAns["harrassmentExplanation"];

    $sql = "INSERT INTO `evaluation_questions` 
    ( `course_code`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `harassment_explanation`) 
    VALUES ('$course', '$_1', '$_2', '$_3', $_4, $_5,$_6,$_7,$_8,$_9,$_10,$_11,$_12,$_13,$_14,$_15,$_16,$_17,$_18,$_19,'$_20')";

    //mark user that he has filled the evaluation form

    $results = mysqli_query($conn, $sql);
    confirm_query($conn, $results);


    $user_id = $_SESSION["userData"]["id"];

    $sql2 = "INSERT INTO `user_response` ( `user_id`, `course_code` ) VALUES ($user_id,'$course' )";

    $results = mysqli_query($conn, $sql2);
    confirm_query($conn, $results);

    //mark user that he has filled the

    return countEvaluationResponse($course);
}

function countEvaluationResponse($course)
{
    global $conn;
    $sql2 = "SELECT * FROM evaluation_questions  WHERE `course_code`='$course'";

    if ($result = mysqli_query($conn, $sql2)) {
        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}

function fetchCourseEvaluationResults($course)
{
    global $conn;
    //write query
    $sql = "SELECT * FROM `evaluation_questions` WHERE `course_code`='$course' ";

    $results = mysqli_query($conn, $sql);
    // $results =  mysqli_fetch_assoc($results);

    return $results;
}


function authenticate_user($username, $password)
{
    global $conn;
    //write query
    $sql = "SELECT * FROM `users`";
    //get results

    $flag = false;

    $results = mysqli_query($conn, $sql);

    while ($data = mysqli_fetch_assoc($results)) {
        if (
            ($data["email"] == $username && password_verify($password, $data["password"]))
            || ($data["reg_no"] == $username  && password_verify($password, $data["password"]))
        ) {
            $flag = true;
            break;
        }
    }

    if ($flag) {
        return $data; //so as to be assigned to the session

    } else {
        return false;
    }
}


function fetchProceedEvalutation($course)
{
    global $conn;
    //write query
    $sql = "SELECT * FROM courses WHERE `course_code`='$course'";

    $results = mysqli_query($conn, $sql);
    confirm_query($conn, $results);

    $results =  mysqli_fetch_assoc($results);

    return $results;
}


function fetchteaching($semester, $coursecode)
{
    global $conn;
    //write query
    $sql = "SELECT * FROM courses WHERE `course_code`='$coursecode'";

    $results = mysqli_query($conn, $sql);
    confirm_query($conn, $results);

    $results =  mysqli_fetch_assoc($results);

    return $results;
}


function confirm_query($conn, $result_set)
{
    if (!$result_set) {
        showErrorInQueryToDb($conn);
        die("Database Query failed");
    }
}



function check_login()
{
    if (!isset($_SESSION["email"])) {

        redirect("index.php");
    }
}
function redirect($location)
{
    header("Location: $location");
    exit;
}

// function inserts()
// {
// 	global $conn;

// 	// receive all input values from the form
//   $course = e($_POST["course"]);
//   $instructor = e($_POST["instructor"]);
//   $semester = e($_POST["semester"]);
//   $TA = e($_POST["TA"]);
//   $assistant= e($_POST["assistant"]);
 

//   $sql = "INSERT INTO `course_allocation` (`instructor`,`course_name`,`semister`,`TA`,`assistant`) VALUES ('$instructor','$course','$semester','$TA ','$assistant')";
//   $result =  mysqli_query($conn, $sql);
//   confirm_query($conn, $result);
 

// }
