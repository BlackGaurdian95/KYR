<?php
session_start();
require_once 'dbh.inc.php';

if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}

$userId = $_SESSION['user']['id'];
$newUsername = $_POST['username'];
$newEmail = $_POST['email'];
$newPassword = $_POST['new_password'];

// Basic update query
$sql = "UPDATE users SET username = :username, email = :email";
$params = [':username' => $newUsername, ':email' => $newEmail];

if (!empty($newPassword)) {
  $sql .= ", pwd = :pwd";
  $params[':pwd'] = $newPassword;
}
$sql .= " WHERE id = :id";
$params[':id'] = $userId;

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

// Update session
$_SESSION['user']['username'] = $newUsername;
$_SESSION['user']['email'] = $newEmail;

header("Location: dashboard.php?section=edit&success=1");
exit();