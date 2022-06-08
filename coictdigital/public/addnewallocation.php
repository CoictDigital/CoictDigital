<?php
require_once("../includes/db.php");
require_once("../includes/sessionStuffs.php");
require_once("../includes/headerContent.php");
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
//if(isset($_POST['save'])){
 
    //save();
  
  

  // $course = $_POST['course_name']; 
  // $instructor = $_POST['instructor'];
  // $semester = $_POST['semester'];
  // if(!empty($course) && !empty($instructor) && !empty($semester)&& !empty($TA) && !empty($assistant)){
  //     $query = "INSERT INTO course_allocation (course_name,instructor,semester) VALUES('$course','$instructor','$semester')";
  //     $result = $conn->query($query);
  //     if($result){
  //       echo "Course is inserted successfully";
  //     }  
  //   }
 // }


// session_start();
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// function save() {
//   global $conn;
   
//   $course =mysqli_real_escape_string($conn,$_POST['course_name']) ; 
//   $instructor =mysqli_real_escape_string($conn,$_POST['instructor']) ;  
//   $semester = mysqli_real_escape_string($conn,$_POST['semester']) ;  
//   $TA     = mysqli_real_escape_string($conn,$_POST['TA']) ;  
//   $assistant = mysqli_real_escape_string($conn,$_POST['assistant']) ;

//   $sql = "INSERT INTO course_allocation (instructor,course_name,instructor,semester,TA,assistant) VALUES('$instructor','$course','$semester','$TA ',`$assistant`)";
//   $query_run =  mysqli_query($conn, $sql);

//   if($query_run){
//     header("location: courseallocation.php");
//       exit();
//   }
//   else{
//       echo	"wrong code";
// }
// }
// ?>
<?php
if(isset($_POST["allocate"])){
 

  $course =mysqli_real_escape_string($conn,$_POST['course_name']) ; 
  $instructor =mysqli_real_escape_string($conn,$_POST['instructor']) ;  
  $semester = mysqli_real_escape_string($conn,$_POST['semester']) ;  
  $TA     = mysqli_real_escape_string($conn,$_POST['TA']) ;  
  $assistant = mysqli_real_escape_string($conn,$_POST['assistant']) ; 

  $sql = "INSERT INTO course_allocation (instructor,course_name,instructor,semester,TA,assistant) VALUES('$instructor','$course','$semester','$TA ',`$assistant`)";
 $query_run =  mysqli_query($conn, $sql);

 if($query_run){
  $_SESSION[ 'status'] = "insected successfully";
  header("Location:courseallocation.php") ; 
}
else{
  $_SESSION[ 'status'] = "Not insected  ";
  header("Location:leacturerallocation.php") ; 
}

}
//  if($query_run){
//   header("location: courseallocation.php");
//     exit();
// }
// else{
//     echo	"wrong code";
// }

 
  


$conn->close();


?>
