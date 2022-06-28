<?php 

if(isset($_POST['semester'])){
  $data['year'] = $_POST['study_year'];
$data['sem'] = $_POST['semester'];


    require_once("db.php");
    $query ="SELECT course_code FROM courses WHERE semester='$data[sem]' and study_year='$data[year]'";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
      echo json_encode($options);
    }
  };
?>
