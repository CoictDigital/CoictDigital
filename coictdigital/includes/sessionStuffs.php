<?php
// session_start(); //already stared in headerContent.php
if (isset($_SESSION["userData"])) {
    $_user = $_SESSION["userData"];
} else {

    header("Location: ./../index.php");
}
