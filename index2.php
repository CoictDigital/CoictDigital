<?php

$password = "admin";

$hashed_password =
    password_hash($password, PASSWORD_DEFAULT);

echo "Original Password is: ", $password;
echo "\n";

echo "Hashed Password is: ", $hashed_password;
echo "\n";

if (password_verify($password, $hashed_password)) {
    echo ':Password is valid!';
} else {
    echo 'Invalid password.';
}

?>
