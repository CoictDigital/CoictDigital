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