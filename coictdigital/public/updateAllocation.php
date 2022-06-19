<?php
 require_once("../includes/db.php");
 require_once("../includes/functions.php");

  
function e($val)
{
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}

// Define variables and initialize with empty values
$course= $instructor = $evaluator = "";
$assistant = $semester = "";
$course_err = $instructor_err = $semester_err = $evaluator_err =  $assistant_err ="";

// $sql = "SELECT * FROM course_allocation where id=?"; 
// //    $id =$_GET["id"] ;
// if (isset($_POST["updateAllocation"])) {
    // $course = e($_POST["course_name"]);
    // $instructor = e($_POST["instructor"]);
    // $evaluator = e($_POST["evaluator"]);  
    // $assistant= e($_POST["assistant"]);
    // $semester = e($_POST["semester"]);

    // Processing form data when form is submitted
    
 if(isset($_POST["id"]) && !empty($_POST["id"])){
        // Get hidden input value
        $id = $_POST["id"];
    $course = e($_POST["course_name"]);
    $instructor = e($_POST["instructor"]);
    $evaluator = e($_POST["evaluator"]);  
    $assistant= e($_POST["assistant"]);
    $semester = e($_POST["semester"]);
// Validate course name
   $input_course = trim($_POST["course_name"]);
    if(empty($input_course)){
        $course_err = "Please enter a course name.";
    } elseif(!filter_var($input_course, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $course_err = "Please enter a valid course name.";
    } else{
        $course = $input_course;
    }
    //   Validate instructors
      $input_instructor = trim($_POST["instructor"]);
      if(empty($input_instructor)){
          $instructor_err = "Please enter Instructor name.";     
      } else{
          $instructor = $input_instructor;
      }
      // Validate evaluator
      $input_evaluator = trim($_POST["evaluator"]);
      if(empty($input_evaluator)){
          $evaluator_err = "Please enter evaluator name.";     
      } else{
          $evaluator = $input_evaluator;
      }
       // Validate assistant
       $input_assistant = trim($_POST["assistant"]);
       if(empty($input_assistant)){
           $assistant_err = "Please enter assistant name.";     
       } else{
           $assistant = $input_assistant;
       }
       // Validate semester
       $input_semester = trim($_POST["semester"]);
       if(empty($input_semester)){
           $semester_err = "Please enter semester name.";     
       } else{
           $semester = $input_semester;
       }
     // Check input errors before inserting in database
     if(empty($course_err) && empty($instructor_err) && empty($evaluator_err)&& empty($assistant_err)&& empty($semester_err)){
          // Prepare an update statement
        $sql = "UPDATE course_allocation SET course_name=?, semester=?, evaluator=?,assistant=?,instructor=? WHERE id=?";
  
        if($stmt = mysqli_prepare($conn, $sql)){
             // Set parameters
             $param_course = $course;
             $param_semester = $semester;
             $param_evaluator = $evaluator;
             $param_instructor = $instructor;
             $param_assistant = $assistant;
             $param_id = $id;
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt,'ssssss', $param_course, $param_semester, $param_evaluator,$param_assistant, $param_instructor, $param_id );
            
           

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records updated successfully. Redirect to landing page
            header("location: courseallocation.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);
}
// Close connection
mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
         // Prepare a select statement
         $sql = "SELECT * FROM course_allocation WHERE id = ?";
         if($stmt = mysqli_prepare($conn, $sql)){
             // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "i", $param_id);
             
             // Set parameters
             $param_id = $id;
             
       // Attempt to execute the prepared statement
       if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1){
            /* Fetch result row as an associative array. Since the result set
            contains only one row, we don't need to use while loop */
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
     
              // Retrieve individual field value
              $course = $row["course_name"];
              $semester = $row["semester"];
              $evaluator = $row["evaluator"];
              $instructor = $row["instructor"]; 
              $assistant = $row["assistant"]; 
              
          } else{
              // URL doesn't contain valid id. Redirect to error page
              header("location: errorAlllocation.php");
              exit();
          }
          
      } else{
          echo "Oops! Something went wrong. Please try again later.";
      }
  }
  // Close statement
  mysqli_stmt_close($stmt);
        
  // Close connection
  mysqli_close($conn);
}  else{
  // URL doesn't contain id parameter. Redirect to error page
  header("location: errorAllocation.php");
  exit();
}
}


// if (isset($_POST["updateAllocation"])) {
//     if(count($_POST)>0){
//   $query="UPDATE `course_allocation` SET `course_name`='$course',`instructor`='$instructor',`evaluator`='$evaluator',`assistant`='$assistant',
//   `semester`='$semester'  WHERE id='$id' ";
//   $results=mysqli_query($conn,$query);

//   if ($results) {
//     header("Location: courseallocation.php");

// } else{
//     echo"<script>alert('Data Not Deleted')</script>";
// }
// }
// }else{
//     echo "Form Data has not been updated in PHP";
//   }


  
  ?>