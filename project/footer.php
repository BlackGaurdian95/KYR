<!-- Footer Section -->
<footer class="footer-section">
  <div class="newsletter">
    <h2>So, what are you waiting for?</h2>
    <p>Stay Updated with the Latest News, Tips, and Updates!</p>
    <form action="subscribe.php" method="post" class="newsletter-form">
  <input type="email" name="email" placeholder="Enter your email..." required />
  <button type="submit" class="subscribe-btn">Subscribe</button>
</form>
  </div>

  <div class="footer-links">
    <div class="footer-column">
      <h3>KNOW YOUR RIGHTS</h3>
      <p>Know Your Rights. Understand the Law. Empower Yourself</p>
      <a href="#">Terms & Policies</a>
    </div>

    <div class="footer-column">
      <h4>Pages</h4>
      <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="support.php">Support</a></li>
        <li><a href="ourlaws.php">Our Laws</a></li>
        <li><a href="getlegalhelp.php">Get Legal Help</a></li>
        <li><a href="learnlaw.php">Learn Law</a></li>
        <li><a href="contactpage.php">Contact</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h4>Our Socials</h4>
      <ul>
        <li><a href="https://www.instagram.com">Instagram</a></li>
        <li><a href="https://www.linkedin.com">LinkedIn</a></li>
        <li><a href="https://www.facebook.com">Facebook</a></li>
        <li><a href="https://x.com">X</a></li>
      </ul>
    </div>

    <div class="footer-auth">
      <?php if (!isset($_SESSION['user'])): ?>
        <a href="signup.php"><button class="auth-btn dark">Sign Up</button></a>
        <a href="login.php"><button class="auth-btn light">Log In</button></a>
      <?php else: ?>
        <a href="dashboard.php"><button class="auth-btn dark">My Account</button></a>
        <a href="logout.php"><button class="auth-btn light">Logout</button></a>
      <?php endif; ?>
    </div>
  </div>

  <hr />
  <p class="copyright">©KNYR. All rights reserved</p>
</footer>