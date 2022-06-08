<?php 
    require_once("db.php");
    $query ="SELECT course_code FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

<<<<<<< HEAD
=======
 
>>>>>>> b755392a989b21fbd550c6e338aad92abbf5cdff
?>