<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO contact_us (username, email, message) VALUES (:username, :email, :message)";
        $stmt = $pdo->prepare($query);

        // Bind parameters correctly with `$` sign
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":message", $message);

        $stmt->execute();

        // Clear PDO objects
        $pdo = null;
        $stmt = null;

        // Redirect properly
        header("Location: homepage.php");
        exit();

    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: about.php");
    exit();
}