<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Find Legal Help</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="master.css">
  <style>
    
  

h2 {
  font-size: 32px;
  font-weight: 600;
  margin-bottom: 40px;
  text-align: center;
  color: #ffffff;
}





  </style>
</head>
<body>
<!-- NAVBAR -->
<?php include 'navbar.php'; ?>

  <div class="legal-help-container">
    <p>Welcome to</p>
    <h1>Find Legal Help</h1>
    <p>Simplify your workflow with our intuitive task management tool, designed to help you stay on top of your daily responsibilities and long-term goals.</p>
  </div>

  <!-- Attorney Profiles -->

  <section>
    <h2>Recommended Attorneys</h2>
  
    <!-- Filter Buttons -->
    <div class="category-buttons">
      <button class="filter-btn active" data-category="All">All</button>
      <button class="filter-btn" data-category="Family Law">Family Law</button>
      <button class="filter-btn" data-category="Startup Law">Startup Law</button>
      <button class="filter-btn" data-category="Criminal Law">Criminal Law</button>
      <button class="filter-btn" data-category="Corporate Law">Corporate Law</button>
      <button class="filter-btn" data-category="Property Law">Property Law</button>
    </div>
  
    <!-- Mobile Dropdown -->
    <select id="categoryDropdown">
      <option value="All">All</option>
      <option value="Family Law">Family Law</option>
      <option value="Startup Law">Startup Law</option>
      <option value="Criminal Law">Criminal Law</option>
      <option value="Corporate Law">Corporate Law</option>
      <option value="Property Law">Property Law</option>
    </select>
  
    <!-- Attorney Grid -->
    <div class="attorney-grid">
    <?php
require_once 'dbh.inc.php';
$stmt = $pdo->query("SELECT * FROM attorneys ORDER BY specialty, name");
$attorneys = $stmt->fetchAll();

foreach ($attorneys as $a):
?>
  <div class="attorney-card" data-category="<?= htmlspecialchars($a['specialty']) ?>">
    <h3><?= htmlspecialchars($a['name']) ?></h3>
    <p><?= htmlspecialchars($a['specialty']) ?> | <?= htmlspecialchars($a['experience_years']) ?> yrs | <?= htmlspecialchars($a['city']) ?></p>
    <p>₹<?= number_format($a['fee']) ?>/session</p>
    <button onclick="window.location.href='tel:<?= htmlspecialchars($a['phone']) ?>'">Call Now</button>
    <button onclick="window.location.href='<?= htmlspecialchars($a['profile_link']) ?>'">View Profile</button>
  </div>
<?php endforeach; ?>
    </div>
  </section>
  

  <!-- Legal Fee Estimator -->
   <section>
    <h2>Estimate Your Legal Fees</h2>
  <div class="fee-estimator">
    <label>Service Type</label>
    <select id="service">
      <option>Divorce</option>
      <option>Company Registration</option>
      <option>Lease Review</option>
    </select>
  </div>
  <div class="fee-estimator">
    <label>Expertise Level?</label>
    <select id="expertise">
      <option>Basic</option>
      <option>Mid-Level</option>
      <option>High</option>
      <option>Expert</option>
    </select>
  </div>
  <div class="fee-estimator">
    <label>Which city are you in? </label>
    <select id="location">
      <option>Mumbai</option>
      <option>Delhi</option>
      <option>Pune</option>
      <option>Chennai</option>
      <option>Kolkata</option>
    </select>
  </div>
  
  <button class="calculate-button" onclick="calculateFee()">Calculate</button>
  <div class="fee-result" id="feeResult"></div>
</section>


<!-- Footer Section -->
<?php include 'footer.php'; ?>

  <script>

// LAWYER CATEGORY FILTER

const buttons = document.querySelectorAll(".filter-btn");
  const dropdown = document.getElementById("categoryDropdown");
  const cards = document.querySelectorAll(".attorney-card");

  function filterCards(category) {
    cards.forEach((card) => {
      const cardCategory = card.getAttribute("data-category");
      if (category === "All" || cardCategory === category) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  }

  // Handle buttons (desktop)
  buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
      buttons.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
      filterCards(btn.getAttribute("data-category"));
    });
  });

  // Handle dropdown (mobile)
  dropdown.addEventListener("change", (e) => {
    filterCards(e.target.value);
  });


// FEE CALCULATOR

    function calculateFee() {
      const service = document.getElementById("service").value;
      const expertise = document.getElementById("expertise").value;
      const location = document.getElementById("location").value;
      let base = 3000;

      switch (service) {
        case "Company Registration": base += 1000; break;
        case "Lease Review": base += 2000; break;
        case "Divorce": base += 3000; break;
      }


      switch (expertise) {
        case "Basic": base *= 1; break;
        case "Mid-Level": base *= 1.5; break;
        case "High": base *= 2; break;
        case "Expert": base *= 3; break;
      }

      switch (location) {
        case "Mumbai": base *= 4; break;
        case "Delhi": base *= 3; break;
        case "Pune": base *= 2; break;
        case "Chennai": base *= 2.5; break;
        case "Kolkata": base *= 3; break;
      }

      

      document.getElementById("feeResult").innerText = `Estimated Fee: ₹${base.toFixed(0)}`;
    }
  
  
</script>


</body>
</html>
