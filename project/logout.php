<?php
session_start();
session_unset(); // Clear all session variables
session_destroy(); // Destroy the session

// Optional: redirect to homepage or login
header("Location: homepage.php");
exit();