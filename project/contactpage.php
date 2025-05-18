<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Know Your Rights - Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="master.css">
  </head>
<body>

  <!--NAVBAR-->
  <?php include 'navbar.php'; ?>



  <section class="contact-container">
    <h2 class="contact-heading">Get In Touch</h2>
    <form class="contact-form" action="contactformhandler.inc.php" method="post">
      <div class="form-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="username" placeholder="Arya Vardam" required>
      </div>
  
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="arya@example.com" required>
      </div>
  
      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="6" placeholder="How can we help you?" required></textarea>
      </div>
  
      <button class="submit-button-form">Send Message</button>
    </form>
  </section>
  






<!-- Footer Section -->
<?php include 'footer.php'; ?>


</body>
</html>
