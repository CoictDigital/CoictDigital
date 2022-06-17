<?php
//require_once("functionHelpers.php");
require_once("db.php");


function getStudyYear($courseCode)
{
    $courseNo = explode(" ", $courseCode)[1];

    if ($courseNo < 200) {
        return 1;
    } else if ($courseNo < 300) {
        return 2;
    } else if ($courseNo < 400) {
        return 3;
    } else {
        return 4;
    }
}

function fetchviewresult($course)
{
    global $conn;
    //write query
    $sql = "SELECT * FROM courses WHERE `course_code`='$course'";

    $results = mysqli_query($conn, $sql);
    confirm_query($conn, $results);

    $results =  mysqli_fetch_assoc($results);

    return $results;
}
function fetchmonitoringresults($course)
{
    global $conn;
    //write query
    $sql = "SELECT * FROM `teachingmonitoring_questions` WHERE `course_code`='$course' ";

    $results = mysqli_query($conn, $sql);
    // $results =  mysqli_fetch_assoc($results);

    return $results;
}

function fetchStudentProgrammes($courseCode)
{
    global $conn;
    $studentProgrammes = [];

    $sql = "SELECT programme.student_programme FROM programme,programme_course WHERE programme_course.course_code='$courseCode' AND programme.id=programme_course.id_programme";
    $results = mysqli_query($conn, $sql);
    if ($results) {
        while ($row = mysqli_fetch_assoc($results)) {
            $studentProgrammes[] = $row["student_programme"];
        }
    }
    return $studentProgrammes;
}

function fetchCourse()
{
    global $conn;
    $sql = "SELECT DISTINCT course_code,assistant,class_size,college,course_title,department,instructor,semester,venue FROM `courses`";
    $results = mysqli_query($conn, $sql);
    return $results;
}
function confirm_query($conn, $result_set)
{
    if (!$result_set) {
        showErrorInQueryToDb($conn);
        die("Database Query failed");
    }
}

// function formatEvaluationQnResults($resultQuery)
// {
//     $result2 = [
//         "semester" => ["question" => "semester", "semester" => []],
//         "course_code" => ["question" => "course_code", "course_code" => []],
//         "starting_time" => ["question" => "starting time", "starting_time" => []],
//         "ending_time" => ["question" => "ending time", "ending_time" => []],
//         "Number_of_students" => ["question" => "semester", "semester" => []],
//         "venue" => ["question" => "venue", "venue" => []],
//         "a" => ["question" => "Sitting arrangements of students", "5" => 0, "4" => 0, "3" => 0, "3" => 0, "1" => 0, "NA" => 0],
//         "b" => ["question" => "Lighting", "5" => 0, "4" => 0, "3" => 0, "3" => 0, "1" => 0, "NA" => 0],
//         "c" => ["question" => "Chairs and Tables", "5" => 0, "4" => 0, "3" => 0, "3" => 0, "1" => 0, "NA" => 0],
//         "d" => ["question" => "Fixed LCD projector system (if any)", "5" => 0, "4" => 0, "3" => 0, "3" => 0, "1" => 0, "NA" => 0],
//         "e" => ["question" => "Display and Visibility", "5" => 0, "4" => 0, "3" => 0, "3" => 0, "1" => 0, "NA" => 0],
//         "f" => ["question" => "General physical condition of the room", "5" => 0, "4" => 0, "3" => 0, "3" => 0, "1" => 0, "NA" => 0],
//         "g" => ["question" => "Public address system (if any)", "5" => 0, "4" => 0, "3" => 0, "3" => 0, "1" => 0, "NA" => 0],
//         "h" => ["question" => "Availability of brash and chalks/markers", "5" => 0, "4" => 0, "3" => 0, "3" => 0, "1" => 0, "NA" => 0],
//         "i" => ["question" => "Use of whiteboard/blackboard", "5" => 0, "4" => 0, "3" => 0, "3" => 0, "1" => 0, "NA" => 0],
//         "j" => ["question" => "Room ventilation", "5" => 0, "4" => 0, "3" => 0, "3" => 0, "1" => 0, "NA" => 0],
//         //key 11 is different, it has extra key `harassment_explanation`
//         "special_matters" => ["question" => "Are there matters of immediate attention?", "special_matters" => []],
//         //this harassment_explanation key will be deleted
//         "harassment_explanation" => ["question" => "Explanation of Harassment Code", "explanations" => []]

//     ];
// }
