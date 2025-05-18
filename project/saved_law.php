<?php
session_start();

if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  require_once 'dbh.inc.php';

  $userId = $_SESSION['user']['id']; // session stores user array
  $title = $_POST['law_title'];
  $link = $_POST['law_link'];

  try {
    // Prevent duplicates
    $check = $pdo->prepare("SELECT * FROM saved_laws WHERE user_id = :uid AND law_link = :link");
    $check->execute([
      ':uid' => $userId,
      ':link' => $link
    ]);

    if ($check->rowCount() === 0) {
      $stmt = $pdo->prepare("INSERT INTO saved_laws (user_id, law_title, law_link) VALUES (:uid, :title, :link)");
      $stmt->execute([
        ':uid' => $userId,
        ':title' => $title,
        ':link' => $link
      ]);
    }

    header("Location: " . $link); // redirect back to the law page
    exit();

  } catch (Exception $e) {
    die("Error saving law: " . $e->getMessage());
  }
} else {
  header("Location: homepage.php");
  exit();
}