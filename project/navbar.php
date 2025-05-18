<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<!--NAVBAR-->
<nav class="navbar">
  <!-- Logo -->
  <div class="logo"><a href="homepage.php" style="text-decoration: none; color: white;">KYR</a></div>

  <!-- Hamburger menu -->
  <div class="menu-toggle">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>

  <!-- Navigation Links -->
  <div class="nav-links">
    <a href="homepage.php">Home</a>
    <a href="ourlaws.php">Our Laws</a>
    <a href="getlegalhelp.php">Get Legal Help</a>
    <a href="learnlaw.php">Learn Law</a>

    <div class="dropdown">
      <a href="#" class="dropdown-toggle">Support</a>
      <div class="dropdown-content">
        <a href="support.php">How It Works</a>
        <a href="contactpage.php">Contact Us</a>
      </div>
    </div>

    <div class="dropdown">
      <a href="#" class="dropdown-toggle">More</a>
      <div class="dropdown-content">
        <a href="about.php">About Us</a>
        <a href="blog.php">Blog</a>
      </div>
    </div>
  </div>

  <!-- Right Side: Auth or Profile -->
  <div class="nav-buttons">
    <?php if (!isset($_SESSION['user'])): ?>
      <a href="signup.php" class="sign-up">Sign Up</a>
      <a href="login.php" class="log-in">Log In</a>
    <?php else: ?>
      <div class="profile-icon-dropdown">
        <button class="profile-btn" onclick="toggleProfileDropdown()">👤</button>
        <div class="profile-dropdown" id="profileDropdown">
          <a href="dashboard.php">Dashboard</a>
          <a href="logout.php">Logout</a>
        </div>
      </div>
    <?php endif; ?>
  </div>
</nav>
<!-- END OF NAVBAR -->


<!-- Profile Dropdown Script -->
<script>

// NAVIGATION MENU


document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const navLinks = document.querySelector('.nav-links');
  const dropdowns = document.querySelectorAll('.dropdown');
  const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
  
  // Toggle mobile menu when hamburger is clicked
  menuToggle.addEventListener('click', function() {
    menuToggle.classList.toggle('active');
    navLinks.classList.toggle('active');
  });
  
  // Handle dropdowns in mobile view (click instead of hover)
  dropdownToggles.forEach((toggle, index) => {
    toggle.addEventListener('click', function(e) {
      // Only apply click behavior in mobile view
      if (window.innerWidth <= 768) {
        e.preventDefault();
        
        // Close other dropdowns
        dropdowns.forEach((dropdown, i) => {
          if (i !== index) {
            dropdown.classList.remove('active');
          }
        });
        
        // Toggle current dropdown
        dropdowns[index].classList.toggle('active');
      }
    });
  });
  
  // Close mobile menu when clicking outside
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.navbar')) {
      navLinks.classList.remove('active');
      menuToggle.classList.remove('active');
      dropdowns.forEach(dropdown => {
        dropdown.classList.remove('active');
      });
    }
  });
  
  // Reset mobile menu when resizing to desktop
  window.addEventListener('resize', function() {
    // Switch back to desktop mode when screen gets bigger
    if (window.innerWidth > 768) {
      navLinks.classList.remove('active');
      menuToggle.classList.remove('active');
      dropdowns.forEach(dropdown => {
        dropdown.classList.remove('active');
      });
    }
  });
});





  function toggleProfileDropdown() {
    const dropdown = document.getElementById("profileDropdown");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  }

  document.addEventListener('click', function (event) {
    const dropdown = document.getElementById("profileDropdown");
    const button = document.querySelector(".profile-btn");
    if (!dropdown.contains(event.target) && !button.contains(event.target)) {
      dropdown.style.display = "none";
    }
  });
</script>

<!-- Profile Dropdown Styles -->
<style>
  .profile-icon-dropdown {
    position: relative;
  }

  .profile-btn {
    background-color: rgba(255, 255, 255, 0.1);
    color: white;
    border: none;
    border-radius: 50%;
    padding: 10px 12px;
    cursor: pointer;
    font-size: 16px;
  }

  .profile-dropdown {
    display: none;
    position: absolute;
    right: 0;
    top: 120%;
    background-color: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    padding: 8px 0;
    z-index: 100;
    min-width: 140px;
  }

  .profile-dropdown a {
    display: block;
    padding: 10px 16px;
    color: white;
    text-decoration: none;
    opacity: 0.9;
  }

  .profile-dropdown a:hover {
    
    color: #5F00FF;
  }



  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
      background: url('website_background.png') no-repeat center center/cover;
      color: white;
    }
    




    /*-------------------- NAVBAR-------------------- */
    nav {
      background-color: rgba(255, 255, 255, 0.08);
      border-radius: 38px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 32px;
      width: 90%;
      margin: 24px auto;
      position: relative;
    }
    
    .logo {
      font-family: 'Paytone One', sans-serif;
      font-size: 32px;
      font-weight: bold;
    }
    
    /* Desktop navigation links - horizontal layout */
    .nav-links {
      display: flex;
      gap: 32px;
      align-items: center;
    }
    
    .nav-links a {
      color: white;
      text-decoration: none;
      opacity: 0.8;
      transition: opacity 0.3s ease;
    }

    .nav-links.active{
      color: #5F00FF;
      font-weight: bold; 
    }
    
    .nav-links a:hover {
      opacity: 1;
    }
    
    .nav-buttons a {
      margin-left: 16px;
      padding: 12.8px 24px;
      border: none;
      border-radius: 30px;
      font-family: 'Inter';
      cursor: pointer;
      text-decoration: none;
    }
    
    .sign-up {
      background-color: rgba(255, 255, 255, 0.1);
      color: white;
    }
    
    .log-in {
      background-color: #5F00FF;
      color: white;
    }
    
    /* Dropdown container - desktop styling */
    .dropdown {
      position: relative;
    }
    
    /* Dropdown toggle */
    .dropdown > a {
      color: white;
      text-decoration: none;
      opacity: 0.8;
      padding: 8px 0;
      display: block;
      transition: color 0.3s ease;
    }
    
    /* On hover, just change color */
    .dropdown > a:hover {
      color: #ffffff;
      opacity: 1;
    }
    
    /* Dropdown menu - desktop styling */
    .dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      min-width: 160px;
      z-index: 99;
      padding: 8px 0;
    }
    
    /* Dropdown menu links */
    .dropdown-content a {
      display: block;
      color: white;
      text-decoration: none;
      padding: 9.6px 16px;
      opacity: 0.85;
      transition: background-color 0.2s ease, opacity 0.2s ease;
    }
    
    /* Hover effect on dropdown items */
    .dropdown-content a:hover {
      color: #5F00FF;
    }
    
    /* Show dropdown on hover - desktop only behavior */
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    /* Mobile menu toggle button - hidden in desktop view */
    .menu-toggle {
      display: none;
      cursor: pointer;
    }
    
    .menu-toggle .bar {
      width: 25px;
      height: 3px;
      background-color: white;
      margin: 5px auto;
      transition: all 0.3s ease;
      display: block;
    }
    
    /* Large desktop screens */
    @media screen and (max-width: 1024px) {
      nav {
        padding: 16px 24px;
      }
    
      .nav-links {
        gap: 24px;
      }
    
      .nav-buttons button {
        padding: 11.2px 19.2px;
      }
    }
    
    /* Smaller desktop/tablet */
    @media screen and (max-width: 900px) {
      .nav-links {
        gap: 16px;
      }
    
      .logo {
        font-size: 28px;
      }
    }
    
    /* MOBILE VIEW TRANSFORMATION HAPPENS HERE */
    @media screen and (max-width: 768px) {
      /* Show hamburger menu */
      .menu-toggle {
        display: block;
        position: absolute;
        top: 19.2px;
        right: 32px;
        z-index: 999;
      }
    
      /* Hamburger menu animation */
      .menu-toggle.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
      }
    
      .menu-toggle.active .bar:nth-child(2) {
        opacity: 0;
      }
    
      .menu-toggle.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
      }
    
      nav {
        flex-wrap: wrap;
        padding: 16px;
      }
    
      .logo {
        z-index: 999;
      }
    
    
      
      /* Convert horizontal nav to vertical dropdown */
      .nav-links {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: rgba(25, 25, 25, 0.95);
        backdrop-filter: blur(10px);
        flex-direction: column;
        width: 90%;
        margin: 0 auto;
        padding: 0;
        border-radius: 20px;
        gap: 0;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease, padding 0.5s ease;
        z-index: 100;
        opacity: 0;
        pointer-events: none;
        text-align: center;
      }
      
      /* Show mobile menu when active */
      .nav-links.active {
        max-height: 500px;
        padding: 16px 0;
        opacity: 1;
        pointer-events: all;
      }
      
      /* Center align mobile nav items */
      .nav-links a, 
      .dropdown > a {
        width: 100%;
        text-align: center;
        padding: 16px 0;
      }
      
      .dropdown {
        width: 100%;
      }
      
      /* Mobile dropdown styling */
      .dropdown-content {
        position: static;
        width: 100%;
        background-color: rgba(50, 50, 50, 0.5);
        border-radius: 0;
      }
      
      /* Disable hover behavior in mobile */
      .dropdown:hover .dropdown-content {
        display: none;
      }
      
      /* Use click behavior in mobile instead */
      .dropdown.active .dropdown-content {
        display: block;
      }
      
      /* Reposition buttons for mobile */
      .nav-buttons {
        position: absolute;
        top: 15.2px;
        right: 80px;
        display: flex;
        z-index: 999;
      }
      
      .nav-buttons button {
        margin-left: 8px;
        padding: 9.6px 16px;
        font-size: 14.4px;
      }
    }
    
    /* Small tablets and large phones */
    @media screen and (max-width: 576px) {
      nav {
        padding: 12.8px 16px;
        width: 95%;
        margin: 16px auto;
      }
      
      .logo {
        font-size: 24px;
      }
      
      .nav-buttons {
        right: 64px;
      }
      
      .nav-buttons button {
        padding: 8px 12.8px;
        font-size: 12.8px;
      }
    }
    
    /* Small phones */
    @media screen and (max-width: 480px) {
      .sign-up {
        display: none;
      }
      
      .nav-buttons {
        right: 64px;
      }
      
      .menu-toggle {
        right: 24px;
      }
    }

</style>