<?php
require_once('credentials.php');

$servername = $SERVERNAME;
$username = $USERNAME;
$password = $PASSWORD;
$dbname = $DBNAME;
$dbport = $DBPORT;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}