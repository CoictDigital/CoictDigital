<?php 
    require_once("db.php");
    //$semester = $_SESSION["semester"];
    $query ="SELECT course_code FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }?>
