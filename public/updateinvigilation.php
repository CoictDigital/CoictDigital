<?php
 require_once("../includes/db.php");
 require_once("../includes/functions.php");

  
function e($val)
{
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}

// Define variables and initialize with empty values
$course= $invigilator  = "";
$venue= $from_time = $to_time = $day = "";
$course_err = $invigilator_err = $from_time_err = $to_time_err =  $day_err = $venue_err ="";

// $sql = "SELECT * FROM course_allocation where id=?"; 
// //    $id =$_GET["id"] ;
// if (isset($_POST["updateAllocation"])) {
    // $course = e($_POST["course_name"]);
    // $invigilator = e($_POST["invigilator"]);
    // $invigilator = e($_POST["invigilator"]);  
    // $assistant= e($_POST["assistant"]);
    // $from_time = e($_POST["from_time"]);

    // Processing form data when form is submitted
    
 if(isset($_POST["id"]) && !empty($_POST["id"])){
        // Get hidden input value
        $id = $_POST["id"];
    $course = e($_POST["course_name"]);
    $invigilator = e($_POST["invigilators"]);  
    $venue= e($_POST["venue"]);
    $day= e($_POST["day"]);
    $from_time = e($_POST["from_time"]);
    $to_time = e($_POST["to_time"]);
// Validate course name
   $input_course = trim($_POST["course_name"]);
    if(empty($input_course)){
        $course_err = "Please enter a course name.";
    } elseif(!filter_var($input_course, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $course_err = "Please enter a valid course name.";
    } else{
        $course = $input_course;
    }
    //   Validate invigilators
      $input_invigilator = trim($_POST["invigilators"]);
      if(empty($input_invigilator)){
          $invigilator_err = "Please enter invigilator name.";     
      } else{
          $invigilator = $input_invigilator;
      }
      // Validate to time
      $input_to_time = trim($_POST["to_time"]);
      if(empty($input_to_time)){
          $to_time_err = "Please enter to_time name.";     
      } else{
          $to_time = $input_to_time;
      }
       // Validate venue
       $input_venue = trim($_POST["venue"]);
       if(empty($input_venue)){
           $venue_err = "Please enter venue name.";     
       } else{
           $venue = $input_venue;
       }
       // Validate date
       $input_day = trim($_POST["day"]);
       if(empty($input_date)){
           $day_err = "Please enter day name.";     
       } else{
           $date = $input_date;
       }
       // Validate from_time
       $input_from_time = trim($_POST["from_time"]);
       if(empty($input_from_time)){
           $from_time_err = "Please enter time .";     
       } else{
           $from_time = $input_from_time;
       }
     // Check input errors before inserting in database
     if(empty($course_err) && empty($invigilator_err) && empty($venue_err)&& empty($day_err)&& empty($to_time_err)&& empty($from_time_err)){
          // Prepare an update statement
        $sql = "UPDATE exam_invigilation SET course_name=?, from_time=?, venue=?, day=?,to_time=?,invigilators=? WHERE id=?";
  
        if($stmt = mysqli_prepare($conn, $sql)){
             // Set parameters
             $param_course = $course;
             $param_from_time = $from_time;
             $param_invigilator = $invigilator;
             $param_to_time = $to_time;
             $param_venue = $venue;
             $param_day = $day;
             $param_id = $id;
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt,'sssssss', $param_course, $param_venue, $param_invigilator,$param_day,$param_from_time, $param_to_time, $param_id );
            
           

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records updated successfully. Redirect to landing page
            header("location: examinvigilation.php");
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
         $sql = "SELECT * FROM exam_invigilation WHERE id = ?";
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
              $from_time = $row["from_time"];
              $to_time = $row["to_time"];
              $invigilator = $row["invigilators"]; 
              $venue = $row["venue"]; 
              $day = $row["day"];
              
          } else{
              // URL doesn't contain valid id. Redirect to error page
              header("location: errorInvigilation.php");
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
  header("location: errorInvigilation.php");
  exit();
}
}


  
  ?>