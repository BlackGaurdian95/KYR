<?php
require_once "dbh.inc.php";
if (!$pdo) {
    die("Database not connected.");
  }

// Fetch testimonials from database
$stmt = $pdo->query("SELECT * FROM testimonials ORDER BY id DESC");
$testimonials = $stmt->fetchAll();
?>

<!-- TESTIMONIAL SECTION -->
<section class="testimonial-section">
  <h2 class="testimonial-title">Testimonials</h2>

  <div class="testimonial-slider">
    <?php foreach ($testimonials as $testimonial): ?>
        <div class="testimonial-card">
  <div class="testimonial-content">
    <span class="quote-icon">“</span>
    <p class="testimonial-text">
      <?= htmlspecialchars($testimonial['message']) ?>
    </p>
    <div class="testimonial-footer">
      <div>
        <p class="testimonial-name"><?= htmlspecialchars($testimonial['name']) ?></p>
        <p class="testimonial-role"><?= htmlspecialchars($testimonial['role']) ?></p>
      </div>
  
    </div>
  </div>
</div>
    <?php endforeach; ?>
  </div>

  <!-- Navigation Buttons -->
  <div class="testimonial-nav">
    <button class="prev-btn">&#8592;</button>
    <button class="next-btn">&#8594;</button>
  </div>
</section>

<!-- TESTIMONIAL STYLES -->
<style>
.testimonial-section {
  padding: 80px 20px;
  max-width: 1200px;
  margin: auto;
  color: white;
  font-family: 'Inter', sans-serif;
  position: relative;
  overflow: hidden;
}

.testimonial-title {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 48px;
  text-align: center;
}

.testimonial-slider {
  display: flex;
  transition: transform 0.5s ease-in-out;
  gap: 20px;
  overflow-x: auto;
  scroll-behavior: smooth;
  padding-bottom: 10px;
}

.testimonial-card {
  flex: 0 0 100%;
  display: flex;
  background: linear-gradient(145deg, #15112e, #1a1538);
  border-radius: 20px;
  padding: 30px;
  min-width: 100%;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
  align-items: flex-start;
}


.testimonial-content {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.quote-icon {
  font-size: 30px;
  margin-bottom: 15px;
}

.testimonial-text {
  font-size: 16px;
  line-height: 1.7;
  margin-bottom: 30px;
  color: white;
}

.testimonial-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.testimonial-name {
  font-weight: 600;
  font-size: 16px;
  color: #fff;
}

.testimonial-role {
  font-size: 14px;
  color: #a0a0b0;
}

.arrow {
  font-size: 20px;
  color: #fff;
  transition: transform 0.3s;
  cursor: pointer;
}

.arrow:hover {
  transform: translateX(4px);
}

.testimonial-nav {
  text-align: center;
  margin-top: 30px;
}

.testimonial-nav button {
  background-color: rgba(255,255,255,0.1);
  color: white;
  border: none;
  padding: 12px 20px;
  margin: 0 8px;
  border-radius: 8px;
  font-size: 18px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.testimonial-nav button:hover {
  background-color: rgba(255,255,255,0.2);
}

@media (max-width: 768px) {
  .testimonial-card {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .testimonial-image img {
    width: 100%;
    max-width: 300px;
    margin: 0 0 20px 0;
  }
}
</style>

<!-- TESTIMONIAL SLIDER SCRIPT -->
<script>
const slider = document.querySelector('.testimonial-slider');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

prevBtn.addEventListener('click', () => {
  slider.scrollBy({ left: -slider.clientWidth, behavior: 'smooth' });
});

nextBtn.addEventListener('click', () => {
  slider.scrollBy({ left: slider.clientWidth, behavior: 'smooth' });
});
</script>