<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
    require_once "dbh.inc.php";

    $email = trim($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (:email)");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        header("Location: thankyou.php");
        exit();
    } catch (PDOException $e) {
        if ($e->errorInfo[1] == 1062) {
            // Duplicate email
            echo "<script>alert('You are already subscribed!'); window.history.back();</script>";
        } else {
            die("Something went wrong.");
        }
    }
} else {
    header("Location: index.php");
    exit();
}