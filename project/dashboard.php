<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}
$user = $_SESSION['user'];
$page = $_GET['section'] ?? 'home';

// 🕒 Personalized Greeting
$hour = date('H');
if ($hour < 12) {
  $greeting = "Good morning";
} elseif ($hour < 17) {
  $greeting = "Good afternoon";
} else {
  $greeting = "Good evening";
}

// ✨ Quote of the Day
$quotes = [
  "“Justice delayed is justice denied.” – William E. Gladstone",
  "“The law is reason free from passion.” – Aristotle",
  "“Ignorance of the law excuses no one.”",
  "“Injustice anywhere is a threat to justice everywhere.” – Martin Luther King Jr.",
  "“You are never alone when you know your rights.”",
  "“Stand up for your rights, even if you’re standing alone.”",
];
$quoteOfTheDay = $quotes[array_rand($quotes)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard | Know Your Rights</title>
  <link rel="stylesheet" href="master.css" />
  <style>
    body {
      background: url('website_background.png') no-repeat center center/cover;
      font-family: 'Inter', sans-serif;
      color: white;
      margin: 0;
      padding: 0;
    }

    .dashboard {
      max-width: 1200px;
      margin: 100px auto;
      display: flex;
      gap: 32px;
      padding: 0 24px;
    }

    .dashboard-sidebar {
      min-width: 230px;
      background: rgba(255, 255, 255, 0.06);
      backdrop-filter: blur(12px);
      padding: 28px 24px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    }

    .dashboard-sidebar a {
      display: block;
      margin-bottom: 16px;
      text-decoration: none;
      color: #ccc;
      font-size: 16px;
      font-weight: 500;
      padding: 12px 16px;
      border-radius: 10px;
      transition: background 0.2s ease, color 0.2s ease;
    }

    .dashboard-sidebar a:hover {
      background-color: rgba(95, 0, 255, 0.15);
      color: #fff;
    }

    .dashboard-sidebar a.active {
      background-color: #5F00FF;
      color: white;
      font-weight: 600;
      box-shadow: 0 0 12px rgba(95, 0, 255, 0.5);
    }

    .dashboard-content {
      flex: 1;
      background: rgba(255, 255, 255, 0.07);
      padding: 36px;
      border-radius: 16px;
      backdrop-filter: blur(14px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      min-height: 420px;
    }

    .dashboard-content h2 {
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 16px;
    }

    .dashboard-content p {
      font-size: 16px;
      line-height: 1.6;
      color: #ddd;
    }

    .quote-box {
      margin: 20px 0;
      padding: 16px 20px;
      background-color: rgba(255, 255, 255, 0.08);
      border-left: 4px solid #5F00FF;
      font-style: italic;
      border-radius: 12px;
      color: #eee;
    }

    @media screen and (max-width: 768px) {
      .dashboard {
        flex-direction: column;
        margin: 60px auto;
      }

      .dashboard-sidebar {
        width: 100%;
        display: flex;
        justify-content: space-around;
        gap: 8px;
      }

      .dashboard-sidebar a {
        margin-bottom: 0;
        padding: 10px 12px;
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="dashboard">
  <div class="dashboard-sidebar">
    <a href="?section=home" class="<?= $page === 'home' ? 'active' : '' ?>">🏠 Dashboard</a>
    <a href="?section=edit" class="<?= $page === 'edit' ? 'active' : '' ?>">🛠 Edit Profile</a>
    <a href="?section=saved" class="<?= $page === 'saved' ? 'active' : '' ?>">📌 Saved Laws</a>
    <a href="logout.php">🚪 Logout</a>
  </div>

  <div class="dashboard-content">
    <?php
      if ($page === 'edit') {
        include 'dashboard_edit.php';
      } elseif ($page === 'saved') {
        include 'dashboard_saved.php';
      } else {
        echo "<h2>$greeting, <span style='color:#7a4bff'>" . htmlspecialchars($user['username']) . "</span> 👋</h2>";
        echo "<div class='quote-box'>$quoteOfTheDay</div>";
        echo "<p>This is your personal dashboard where you can manage your account, saved content, and activity.</p>";
      }
    ?>
  </div>
</div>

</body>
</html>