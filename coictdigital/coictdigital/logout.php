<?php
session_start();
require_once("includes/db.php");
require_once("includes/functions.php");

unset($_SESSION["userData"]);
header("location: index.php")
?>