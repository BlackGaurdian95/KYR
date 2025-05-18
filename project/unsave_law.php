<?php
session_start();

if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['law_id'])) {
  require_once 'dbh.inc.php';

  $userId = $_SESSION['user']['id'];
  $lawId = $_POST['law_id'];

  try {
    // Only delete if the law belongs to the user
    $stmt = $pdo->prepare("DELETE FROM saved_laws WHERE id = :law_id AND user_id = :user_id");
    $stmt->execute([
      ':law_id' => $lawId,
      ':user_id' => $userId
    ]);

    header("Location: dashboard.php");
    exit();

  } catch (Exception $e) {
    die("Error unsaving law: " . $e->getMessage());
  }
} else {
  header("Location: dashboard.php");
  exit();
}