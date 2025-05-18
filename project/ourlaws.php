<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Law Categories</title>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="master.css">
  </head>
<body>
    
  <!--NAVBAR-->
  <?php include 'navbar.php'; ?>
<!-- END OF NAVBAR-->

  <div class="law-category-container">
    <section class="law-category-hero">
      <p class="law-category-welcome">Welcome to</p>
      <h1>LAWS</h1>
      <p class="law-category-description">
        Simplify your workflow with our intuitive task management tool, designed to help you stay on top of your daily responsibilities and long-term goals.
      </p>
    </section>

    <section class="law-category-section">

      <!-- SEARCH BAR -->
      <div class="search-wrapper">
        <div class="search-bar-container" id="searchContainer">
          <input
            type="text"
            class="search-bar"
            placeholder="Search for legal help, e.g. divorce lawyer in Mumbai"
            onfocus="handleFocus(true)"
            onblur="handleFocus(false)"
          />
          <button type="submit" class="search-button">
            ➔
          </button>
        </div>
      </div>
      <!-- SEARCH RESULTS DROPDOWN -->
      <div class="search-results" id="searchResults"></div>
      <!-- SEARCH BAR END -->
      
      




      <h2>LAW CATEGORY</h2>
      <div class="law-card-grid">
        <!-- Repeat this card 6 times -->
        <a href="lawcategory_familylaws.php" class="law-category-card">
          <h3>FAMILY LAWS</h3>
          <p>
            Family Law deals with matters like marriage, divorce, child custody, alimony, and adoption. If you have issues related to your family relationships — separation, parenting rights, or support — this is the section where you’ll find guidance and legal solutions.
          </p>
        </a>
        <a href="lawcategory_criminallaws.php" class="law-category-card">
          <h3>CRIMINAL LAWS</h3>
          <p>
            Criminal Law covers situations where someone is accused of breaking the law, like theft, assault, or fraud. If you or someone you know is facing criminal charges, you’ll find information about your rights, defense options, and how criminal cases work.
          </p>
        </a>
        <a href="lawcategory_propertylaws.php" class="law-category-card">
          <h3>PROPERTY LAWS</h3>
          <p>
            Property Law helps with buying, selling, renting, or inheriting land or buildings. If you are dealing with real estate disputes, land transfers, tenant rights, or ownership questions, this section will guide you through the legal aspects of property.
          </p>
        </a>
        <a href="lawcategory_employmentlaws.php" class="law-category-card">
          <h3>EMPLOYMENT LAWS</h3>
          <p>
            Employment Law protects workers and employers. Whether you're facing workplace discrimination, wrongful termination, salary disputes, or unsafe working conditions, this category helps you understand your rights and next steps.
          </p>
        </a>
        <a href="lawcategory_businesslaws.php" class="law-category-card">
          <h3>BUSINESS & CORPORATE LAWS</h3>
          <p>
            Business and Corporate Law is for anyone starting a business, signing contracts, or managing a company. If you need help with agreements, business disputes, or legal compliance for your startup or organization, you’ll find the answers here.
          </p>
        </a>
        <a href="lawcategory_intellectuallaws.php" class="law-category-card">
          <h3>INTELLECTUAL PROPERTY LAWS</h3>
          <p>
            Intellectual Property Law protects your creations — from brand names and logos to inventions and artistic work. If you need help registering a trademark, copyright, or patent, or if your work has been copied without permission, this section will assist you.
          </p>
        </a>
        <a href="lawcategory_immigrationlaws.php" class="law-category-card hidden-card">
            <h3>IMMIGRATION LAW</h3>
            <p>
              Immigration Law covers visas, citizenship, asylum, and deportation matters. If you are moving to a new country, applying for a work visa, or facing immigration challenges, you’ll find resources here to guide your journey legally.
            </p>
          </a>
          <a href="lawcategory_consumerrightlaws.php" class="law-category-card hidden-card">
            <h3>CONSUMER RIGHTS LAWS</h3>
            <p>
              Consumer Rights Law protects you when you buy products or services. If you’ve been sold something defective, been scammed, or misled by advertising, this category explains how to file complaints, seek refunds, or take legal action.
            </p>
          </a>
          <a href="lawcategory_personalinjurylaws.php" class="law-category-card hidden-card">
            <h3>PERSONAL INJURY LAWS</h3>
            <p>
              Personal Injury Law helps you get justice if you’ve been physically or emotionally hurt due to someone else’s negligence. If you’ve been in a car accident, suffered medical malpractice, or a workplace injury, this section explains how you can seek compensation.
            </p>
          </a>
      </div>
      <button class="load-more" id="loadMoreBtn">LOAD MORE</button>
    </section>
 <!-- Footer Section -->
 <?php include 'footer.php'; ?>
<!-- FOOTER END -->





<script>

// ------------------------
// SEARCH BAR GLOW on focus
// ------------------------
function handleFocus(isFocused) {
  const container = document.getElementById('searchContainer');
  if (isFocused) {
    container.classList.add('glow');
  } else {
    container.classList.remove('glow');
  }
}

// ------------------------
// Search button click triggers search
// ------------------------
document.querySelector('.search-button').addEventListener('click', function(event) {
  event.preventDefault(); // Prevents page reload
  performSearch();
});

// ------------------------
// LIVE SEARCH while typing
// ------------------------
document.querySelector('.search-bar').addEventListener('input', performSearch);

// ------------------------
// SEARCH FUNCTION (via PHP + DB)
// ------------------------
function performSearch() {
  const query = document.querySelector('.search-bar').value.trim().toLowerCase();
  const resultsContainer = document.getElementById('searchResults');
  resultsContainer.innerHTML = ''; // Clear previous results

  if (query === '') {
    resultsContainer.classList.remove('active');
    return;
  }

  // Send POST request to search_backend.php
  fetch('search_backend.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: 'query=' + encodeURIComponent(query)
  })
  .then(response => response.json())
  .then(matches => {
    if (matches.length > 0) {
      matches.forEach(match => {
        const item = document.createElement('div');
        item.classList.add('search-result-item');
        item.innerHTML = `
          <div class="search-result-title">${match.title}</div>
          <div class="search-result-snippet">${match.snippet}</div>
        `;
        // Clicking result redirects to the link
        item.addEventListener('click', () => {
          window.location.href = match.link;
        });
        resultsContainer.appendChild(item);
      });
    } else {
      resultsContainer.innerHTML = `<div class="search-result-item">No results found.</div>`;
    }

    resultsContainer.classList.add('active');
  })
  .catch(error => {
    console.error('Search error:', error);
    resultsContainer.innerHTML = `<div class="search-result-item">An error occurred. Please try again.</div>`;
    resultsContainer.classList.add('active');
  });
}

// ------------------------
// Close dropdown when clicking outside
// ------------------------
document.addEventListener('click', function(event) {
  const searchWrapper = document.querySelector('.search-wrapper');
  const searchResults = document.getElementById('searchResults');

  if (!searchWrapper.contains(event.target)) {
    searchResults.classList.remove('active');
  }
});


  // LOAD MORE BUTTON FUNCTION

  const loadMoreBtn = document.getElementById('loadMoreBtn');
const hiddenCards = document.querySelectorAll('.hidden-card');

loadMoreBtn.addEventListener('click', () => {
  hiddenCards.forEach(card => {
    card.classList.toggle('hidden-card');
  });
  
  if (loadMoreBtn.innerText === 'LOAD MORE') {
    loadMoreBtn.innerText = 'SHOW LESS';
  } else {
    loadMoreBtn.innerText = 'LOAD MORE';
  }
});
</script>

</body>
</html>
