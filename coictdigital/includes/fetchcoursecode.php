<?php 
    require_once("db.php");

    $query ="SELECT course_code FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

  //   if (isset($_GET["name"])) {

  //     $name = mysqli_real_escape_string($conn,$_GET["name"]);
  //     $sql ="SELECT `name` FROM users where `name`=$name";
  //     $result= mysqli_query($conn,$sql);
  //     $users=mysqli_fetch_all($result);

     
  // }
?>