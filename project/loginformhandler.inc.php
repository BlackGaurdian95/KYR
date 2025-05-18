<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";

        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $user["pwd"] === $pwd) {
            // Set session in the correct format your navbar expects
            $_SESSION["user"] = [
                "id" => $user["id"],
                "username" => $user["username"],
                "email" => $user["email"]
            ];

            header("Location: homepage.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password'); window.location.href='login.php';</script>";
            exit();
        }

    } catch (Exception $e) {
        die("Login failed: " . $e->getMessage());
    }
} else {
    header("Location: homepage.php");
    exit();
}