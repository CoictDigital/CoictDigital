<?php 
    $query ="SELECT course_code FROM courses";
    // $query ="SELECT semester FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>