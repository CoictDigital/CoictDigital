
  <?php
 require_once("../includes/db.php");
 require_once("../includes/functions.php");

if (isset($_POST["delete"])) {

  $id = $_POST["id"];
  $query="DELETE FROM users WHERE id='$id' ";
  $results=mysqli_query($conn,$query);

  if ($results) {
    echo"<script>alert('Data Deleted');</script>";
    header("Location: index.php");

} else{
    echo"<script>alert('Data Not Deleted')</script>";
}
}

  
  ?>
