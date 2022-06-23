<?php
// Process delete operation after confirmation

if (isset($_POST["ss_id"]) && !empty($_POST["ss_id"])) {
    require_once ("../includes/db.php");
    require_once ("../includes/functions.php");
    // Include config file
    
    // Prepare a delete statement
    $sql = "DELETE FROM exam_invigilation WHERE id='". $_POST["ss_id"] . "'";
    $stmt = $conn->query($sql);

    if ($stmt) {
        // Records deleted successfully. Redirect to landing page
        header("location: examinvigilation.php");
        exit();
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
     
    // Close statement
    // mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="ss_id" value="<?php echo trim($_POST["id"]); ?>" />
                            <p>Are you sure you want to delete this invigilation record?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>