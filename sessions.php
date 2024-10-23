<?php
// sessions.php

// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "Alyssa";
$_SESSION["email"] = "ali@example.com";

// Retrieve session variables
if (isset($_SESSION["username"])) {
    echo "Session Username: " . $_SESSION["username"] . "<br>";
    echo "Session Email: " . $_SESSION["email"] . "<br>";
} else {
    echo "No session found!";
}

if(isset($_SESSION['username'])) {
    echo "Username from session: " . $_SESSION['username'];
} else {
    echo "No session variable is set.";
}

?>
