<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Page</title>
    <link rel="stylesheet" href="master.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Paytone+One&display=swap" rel="stylesheet">

</head>
<body>

<!--NAVBAR-->
<?php include 'navbar.php'; ?>
<!-- END OF NAVBAR-->
   
    <!-- Hero Section -->
    

    <div class="support-container">
        <p>Welcome to</p>
        <h1>SUPPORT</h1>
        <p>Simplify your workflow with our intuitive task management tool, designed to help you stay on top of your daily responsibilities and long-term goals.</p>
      </div>

    <!-- How It Works -->
    <section id="how-it-works">
      <h2>How It Works?</h2>
    
      <div class="steps">
        <div class="step"><span class="step-number">STEP 1 :</span> Browse our library of legal categories—Family Law, Criminal Law, Consumer Rights, Employment Law, and more. We break down complex laws into clear, easy-to-understand and actionable insights that anyone can understand.</div>
        <div class="step"><span class="step-number">STEP 2 :</span> Use interactive tools like legal glossaries, flashcards, and guides to learn about your rights and responsibilities. Understand real-world legal situations through simple examples and case scenarios.</div>
        <div class="step"><span class="step-number">STEP 3 :</span> Scroll through a curated list of trusted attorneys. Compare based on expertise, location, experience, and fees. View detailed profiles and connect directly—no forms or filters needed.</div>
        <div class="step"><span class="step-number">STEP 4 :</span> Use our built-in calculator to estimate legal costs for common services like divorce, lease reviews, or company registration. Know what to expect—before making any moves.</div>
      </div>
    </section>

    <!-- FAQ Section -->
    
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
      

    <!-- Testimonial -->
    <?php include ' testimonial.php'; ?>

    

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>

    <script>



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
