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



// $mysqli = new mysqli("localhost", "mushi", "localpassword", "coict_digital");

// $csvFilePath = "file.csv";
// $file = fopen($csvFilePath, "r");
// while (($row = fgetcsv($file)) !== FALSE) {
//     print_r(strtolower(getLastName($row[0])));
//     $stmt = $mysqli->prepare("INSERT INTO users (`name`, reg_no, `password`, `role`) VALUES (?, ?, ?, ?)");
//     $stmt->bind_param("ssss", $row[0], $row[1],  password_hash(strtolower(getLastName($row[0])), PASSWORD_DEFAULT), $row[3]);
//     $stmt->execute();
// }
