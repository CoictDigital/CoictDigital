<?php
require_once("../includes/db.php");
// $instructor = $_POST["instructor"];
// $no_of_course = $_POST["no_of_course"];
// $course_code = $_POST["course_code"];
// $course_name = $_POST["course_name"];
// $program = $_POST["program"];


// $sql = "INSERT INTO course_allocation  VALUES ('$instructor',
//             '$no_of_course','$course_code','$course_name','$program','$current','$status','$credits')";


?>
<!-- <!DOCTYPE html> -->
<!-- <html> -->
<!-- 
<head>
	<title>Insert Page page</title>
</head> -->

<body>
	<center>
		<?php

// 		// servername => localhost
// 		// username => root
// 		// password => empty
// 		// database name => staff
// 		// $conn = mysqli_connect("localhost", "root", "", "staff");
		
// 		// Check connection
// 		if($conn === false){
// 			die("ERROR: Could not connect. "
// 				. mysqli_connect_error());
// 		}
		
// 		// Taking all 5 values from the form data(input)
// 		$instructor = $_POST["instructor"];
//         $no_of_course = $_POST["no_of_course"];
//         $course_code = $_POST["course_code"];
//         $course_name = $_POST["course_name"];
//         $program = $_POST["program"];
//         $current = $_POST["current"];
//         $status = $_POST["status"];
//         $credits = $_POST["credits"];
		
// 		// Performing insert query execution
// 		// here our table name is college
// 		$sql = "INSERT INTO course_allocation  VALUES ('$instructor',
//             '$no_of_course','$course_code','$course_name','$program','$current','$status','$credits')";
		
// 		if(mysqli_query($conn, $sql)){
// 			echo "<h3>data stored in a database successfully."
// 				. " Please browse your localhost php my admin"
// 				. " to view the updated data</h3>";

// 			echo nl2br("\n$instructor\n $no_of_course\n "
//          ."$course_code\n $course_name\n $eprogram");
// 		} else{
// 			echo "ERROR: Hush! Sorry $sql. "
// 				. mysqli_error($conn);
// 		}
		
// 		// Close connection
// 		mysqli_close($conn);
		// ?>
<!-- // 	</center>
// </body> -->

<!-- </html> -->

<?php 
    $query ="SELECT * FROM courses";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
<?php 
if(isset($_POST['submit'])){
  $course = $_POST['course_name']; 
  $instructor = $_POST['instructor'];
  $semester = $_POST['semester'];
  if(!empty($course) && !empty($instructor) && !empty($semester)){
      $query = "INSERT INTO course_allocation (course_name,instructor,semester) VALUES('$course','$instructor','$semester')";
      $result = $conn->query($query);
      if($result){
        echo "Course is inserted successfully";
      }  
    }
  }

?>