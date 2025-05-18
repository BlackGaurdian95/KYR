<?php
require_once 'dbh.inc.php';
session_start();

// Get attorney by ID
$id = $_GET['id'] ?? null;

if (!$id || !is_numeric($id)) {
  die("Invalid attorney ID.");
}

$stmt = $pdo->prepare("SELECT * FROM attorneys WHERE id = :id");
$stmt->execute([':id' => $id]);
$attorney = $stmt->fetch();

if (!$attorney) {
  die("Attorney not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?= htmlspecialchars($attorney['name']) ?> - Profile</title>
  <link rel="stylesheet" href="master.css">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: url('website_background.png') no-repeat center center/cover;
      color: white;
      margin: 0;
      padding: 0;
    }

    .profile-container {
      max-width: 800px;
      margin: 100px auto;
      background: rgba(255,255,255,0.06);
      padding: 40px;
      border-radius: 16px;
      backdrop-filter: blur(10px);
      box-shadow: 0 0 20px rgba(95, 0, 255, 0.2);
    }

    .profile-header h1 {
      font-size: 32px;
      margin-bottom: 12px;
      color: #fff;
    }

    .profile-header p {
      font-size: 18px;
      color: #ccc;
    }

    .profile-info {
      margin-top: 30px;
      font-size: 16px;
      line-height: 1.8;
    }

    .profile-info strong {
      color: #ccc;
      width: 140px;
      display: inline-block;
    }

    .contact-buttons {
      margin-top: 30px;
    }

    .contact-buttons button {
      background-color: #5F00FF;
      border: none;
      padding: 14px 28px;
      border-radius: 10px;
      color: white;
      font-weight: 600;
      font-size: 15px;
      cursor: pointer;
      margin-right: 16px;
      transition: background 0.3s ease;
    }

    .contact-buttons button:hover {
      background-color: #7a4bff;
    }

    @media screen and (max-width: 600px) {
      .profile-container {
        margin: 40px 16px;
        padding: 28px;
      }

      .contact-buttons button {
        display: block;
        width: 100%;
        margin: 12px 0;
      }
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="profile-container">
  <div class="profile-header">
    <h1><?= htmlspecialchars($attorney['name']) ?></h1>
    <p><?= htmlspecialchars($attorney['specialty']) ?> | <?= htmlspecialchars($attorney['experience_years']) ?> yrs experience | <?= htmlspecialchars($attorney['city']) ?></p>
  </div>

  <div class="profile-info">
    <p><strong>Consultation Fee:</strong> ₹<?= number_format($attorney['fee']) ?>/session</p>
    <p><strong>Phone:</strong> <?= htmlspecialchars($attorney['phone']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($attorney['email']) ?></p>
    <p><strong>Specialty:</strong> <?= htmlspecialchars($attorney['specialty']) ?></p>
    <p><strong>City:</strong> <?= htmlspecialchars($attorney['city']) ?></p>
  </div>

  <div class="contact-buttons">
    <button onclick="window.location.href='tel:<?= htmlspecialchars($attorney['phone']) ?>'">📞 Call Now</button>
    <button onclick="window.location.href='mailto:<?= htmlspecialchars($attorney['email']) ?>'">📧 Email</button>
  </div>
</div>

</body>
</html>