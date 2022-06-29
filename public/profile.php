<?php

     $conn = mysqli_connect('localhost','root','','coict_digital');

    require_once("../includes/headerContent.php");
    require_once("../includes/sessionStuffs.php");
    //Block 1
$user = ""; 
$password = ""; 
$host = "localhost"; 
$dbase = "coict_digital"; 
$table = "alumni"; 

//Block 2
$from= 'alumni';

//Block 3
$subject= $_POST['subject'];
$body= $_POST['body'];

//Block 4
$dbc= mysqli_connect('localhost','root','','coict_digital') 
or die("Unable to select database");

//Block 5
$query= "SELECT * FROM alumni";
$result= mysqli_query ($dbc, $query) 
or die ('Error querying database.');

//Block 6
while ($row = mysqli_fetch_array($result)) {
$Name= $row['Name'];
$email= $row['email'];

//Block 7
$msg= "Dear $Name,\n$body";
mail($email, $subject, $msg, 'From:' . $from);
echo 'Email sent to: ' . $email. '<br>';
}

//Block 8
mysqli_close($dbc);
    ?>
   
<!DOCTYPE html>
<html>
    <body>
        <div>
<form action="sendemail.php" method="post">
<label>Subject of email:</label><br>
<input type="text" name="subject" id="subject"/><br>
<label>Body of email:</label><br>
<textarea name="body" id="body" rows="10" cols="35"></textarea><br>
<input type="submit" name=submit value="Submit"/>
</form>

<script src="https://kit.fontawesome.com/939695db0f.js" crossorigin="anonymous"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
</div>
    </body>
</html>