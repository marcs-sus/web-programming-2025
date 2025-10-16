<?php
// Start the session
session_start();

// Check if the form is submitted
if (!isset($_SESSION['username'])) {
    // Store username and password
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    // Store session start time
    $_SESSION['session_start'] = date("d/m/Y H:i:s");

    echo "Session started!";
} else {
    // Update last access time
    $_SESSION['last_access'] = date("d/m/Y H:i:s");

    // Display session information
    echo "User: " . $_SESSION['username'] . " is already logged in.<br>";
    echo "Password: " . $_SESSION['password'] . "<br><br>";
    echo "Session started at: " . $_SESSION['session_start'] . "<br>";
    echo "Last access at: " . $_SESSION['last_access'] . "<br>";

    // Calculate session duration and display it
    $sessionTime = (strtotime($_SESSION['last_access']) - strtotime($_SESSION['session_start']));
    echo "Time since session started: " . $sessionTime . " seconds<br>";

    // Destroy session if it exceeds 60 seconds
    if ($sessionTime > 60) {
        session_destroy();
        echo "Session expired! Please log in again.";
    }
}
