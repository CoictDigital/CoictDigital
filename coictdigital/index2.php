<?php
require_once("includes/functions.php");
// echo "asdfa";
// echo password_hash("mlundi", PASSWORD_BCRYPT);
// $valid2 = password_hash("mlundi", PASSWORD_BCRYPT);

// echo password_verify("mlundi", $valid2);




$password = "mndeme";

$hashed_password =
    password_hash($password, PASSWORD_DEFAULT);

echo "Original Password is: ", $password;
echo "\n";

echo "Hashed Password is: ", $hashed_password;
echo "\n";

if (password_verify($password, $hashed_password)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}


?>

