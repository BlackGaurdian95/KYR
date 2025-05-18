<!DOCTYPE html>
<html lang="en">
<head>
  <title>Subscribed</title>
  <link rel="stylesheet" href="master.css">
</head>
<body>
  <style>
    .a {
      background-color: #5F00FF;
      color: white;
      border: none;
      padding: 14px 24px;
      font-size: 14px;
      font-weight: 600;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none; /* make it look like a button */
      display: inline-block;
      margin-top: 20px;
    }
    .a:hover {
      background-color: #7a4bff;
    }
  </style>

  <?php include 'navbar.php'; ?>

  <div style="text-align:center; margin-top:100px;">
    <h1>🎉 You're subscribed!</h1>
    <p>Thank you for joining our newsletter.</p>
    <a href="homepage.php" class="a">← Back to Home</a>
  </div>
</body>
</html>