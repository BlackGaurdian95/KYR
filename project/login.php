<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Know Your Rights</title>

  <link rel="stylesheet" href="master.css">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Inter', sans-serif;
      background: url('website_background.png') no-repeat center center/cover;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 16px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 20px rgba(161, 73, 212, 0.2);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 24px;
      font-weight: 600;
      font-size: 24px;
    }

    .form-group { margin-bottom: 20px; }

    label {
      display: block;
      margin-bottom: 8px;
      font-size: 14px;
      opacity: 0.8;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 14px;
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 8px;
      background-color: rgba(255, 255, 255, 0.05);
      color: white;
      font-size: 15px;
      outline: none;
      transition: box-shadow 0.3s ease;
    }

    input:focus {
      box-shadow: 0 0 10px rgba(161, 73, 212, 0.3);
    }

    .login-button {
      width: 100%;
      padding: 14px;
      background-color: #5F00FF;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s ease;
    }

    .login-button:hover {
      background-color: #7a4bff;
    }

    .login-footer {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }

    .login-footer a {
      color: #8f5eff;
      text-decoration: none;
    }

    .login-footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .login-container { padding: 30px 20px; }
      .login-container h2 { font-size: 20px; }
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Log In to Know Your Rights</h2>
    <form action="loginformhandler.inc.php" method="POST">
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="pwd" placeholder="Enter your password" required />
      </div>
      <button type="submit" class="login-button">Log In</button>
    </form>
    <div class="login-footer">
      <p>Don't have an account? <a href="signup.php">Sign Up</a></p><br>
      <p>Go to <a href="homepage.php">HOME</a></p>
    </div>
  </div>

</body>
</html>