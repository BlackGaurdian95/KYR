<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email)";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        // Get inserted user ID
        $userId = $pdo->lastInsertId();

        // ✅ Start session
        $_SESSION["user"] = [
            "id" => $userId,
            "username" => $username,
            "email" => $email
          ];

        // Cleanup
        $pdo = null;
        $stmt = null;

        // Redirect
        header("Location: homepage.php");
        exit();

    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: homepage.php");
    exit();
}