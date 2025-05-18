<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Know Your Rights - Home</title>
  
  <link rel="stylesheet" href="master.css">
</head>
<body>


<?php include 'navbar.php'; ?>

  <section class="homepage-hero">
    <h1>KNOW YOUR RIGHTS</h1>
    <p>Know Your Rights, Understand the Law, Empower Yourself</p>
    <div class="cta">
      <a href="ourlaws.php" class="primary">Get Started</a>
      <a href="#how-it-works" class="secondary">How it Works</a>
    </div>
  </section>

  <!-- WHO WE ARE SECTION -->

  <section class="homepage-who-we-are">
    <h2>Who we are?</h2>
    <div class="homepage-who-content">
      <div class="homepage-who-image"></div>
      <div class="homepage-who-info">
        <div class="homepage-stats">
          <div><span>24k+</span><p>Users<br>Empowered</p></div>
          <div><span>50+</span><p>Legal<br>Topics covered</p></div>
          <div><span>100+</span><p>Legal<br>Questions Answered</p></div>
        </div>
        <p>We’re a legal awareness and lawyer discovery platform built to bridge the gap between complex legal systems and everyday people</p>
        <p>Whether you're navigating workplace issues, personal disputes, or just trying to understand your rights, we provide clear, jargon-free guidance and connect you with the legal support you need.</p>
        <p class="homepage-highlight">Know your rights. Take control.</p>
        <a href="about.php" class="homepage-about-btn">Know More</a>
      </div>
    </div>
  </section>
  

  <!-- FEATURES SECTION -->
  


  <section class="homepage-feature-section">
    <h2>Our Features</h2>
    <div class="homepage-featurecards-container">
      <div class="homepage-feature-card">
        <h3>24/7 Access to Legal Information and Support</h3><br>
        
        <p>Users can access legal resources and get support at any time, day or night</p>
        <p>Whether they need help in an urgent situation or simply want to research something on their own schedule, our website offers constant availability.</p>
      </div>
      <div class="homepage-feature-card">
        <h3>Simplified Legal Language for Better Understanding</h3><br>
        
        <p>Legal terms can be overwhelming—we get it.</p>
        <p>That’s why we break down complex concepts into plain, human-friendly language so anyone can understand the law with confidence.</p>
      </div>
      <div class="homepage-feature-card">
        <h3>Easy Legal Guides for Everyday People</h3><br>
        
        <p>No legal background? No problem.</p>
        <p>Our step-by-step guides simplify legal processes so you can take action confidently, whether you’re drafting a contract or understanding tenant rights.</p>
      </div>
    </div>
  </section>
  
  
  <!-- HOW IT WORKS -->

  <section id="how-it-works">
    <h2>How It Works?</h2>
  
    <div class="steps">
      <div class="step"><span class="step-number">STEP 1 :</span> Browse our library of legal categories—Family Law, Criminal Law, Consumer Rights, Employment Law, and more. We break down complex laws into clear, easy-to-understand and actionable insights that anyone can understand.</div>
      <div class="step"><span class="step-number">STEP 2 :</span> Use interactive tools like legal glossaries, flashcards, and guides to learn about your rights and responsibilities. Understand real-world legal situations through simple examples and case scenarios.</div>
      <div class="step"><span class="step-number">STEP 3 :</span> Scroll through a curated list of trusted attorneys. Compare based on expertise, location, experience, and fees. View detailed profiles and connect directly—no forms or filters needed.</div>
      <div class="step"><span class="step-number">STEP 4 :</span> Use our built-in calculator to estimate legal costs for common services like divorce, lease reviews, or company registration. Know what to expect—before making any moves.</div>
    </div>
  </section>
  

  <!-- FAQ GLOBAL SECTION -->
    
  <section class="faq-section">
    <div class="faq-container">
      <h2 class="faq-heading">Frequently Asked Questions</h2>
  
      <div class="faq-item">
        <button class="faq-question">
          <span>What is Know Your Right and who is it for?</span>
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <p>Know Your Right is a legal awareness platform built for anyone who wants to understand their legal rights and connect with professional lawyers—no legal background needed.</p>
        </div>
      </div>
  
      <div class="faq-item">
        <button class="faq-question">
          <span>Can I get legal advice directly from this platform?</span>
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <p>While Know Your Right doesn’t provide legal advice itself, it helps you find trusted articles & attorneys. You can view the attorneys profiles, compare, and connect directly.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>How do I know the lawyers listed are trustworthy?</span>
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <p>All attorneys on the platform are verified based on experience, bar license information, user feedback, and public credentials.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          <span>Is it free to use the website?</span>
          <span class="faq-icon">+</span>
        </button>
        <div class="faq-answer">
          <p>Yes! Browsing laws, learning resources, and lawyer profiles is completely free. You only pay if you choose to hire a lawyer.</p>
        </div>
      </div>
  
      
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS GLOBAL SECTION -->
  <?php include ' testimonial.php'; ?>
  

  <?php include 'footer.php'; ?>
  

<script>




  // FAQ SECTION 
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const button = item.querySelector('.faq-question');

    button.addEventListener('click', () => {
      item.classList.toggle('open');
    });
  });
</script>
  

  
</body>
</html>
