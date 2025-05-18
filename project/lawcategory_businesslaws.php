<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Business Laws | Know Your Rights</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="master.css">
  
</head>

<body>

<!--NAVBAR-->
<?php include 'navbar.php'; ?>

<div class="category-content-container">
  <p>Welcome to</p>
  <h1>Business Laws</h1>
  <p>Navigate key family matters like marriage, divorce, custody, and adoption with confidence.</p>

  <!-- ✅ Save This Law Button - Only visible to logged-in users -->
  <?php
    session_start();
    $law_title = "Family Laws";
    $law_link = basename($_SERVER['PHP_SELF']); // e.g. lawcategory_businesslaws.php
  ?>

  <?php if (isset($_SESSION['user'])): ?>
    <form action="saved_law.php" method="post" style="margin-top: 16px;">
      <input type="hidden" name="law_title" value="<?= htmlspecialchars($law_title) ?>">
      <input type="hidden" name="law_link" value="<?= htmlspecialchars($law_link) ?>">
      <button style="padding: 10px 16px; border: none; border-radius: 6px; background-color: #5F00FF; color: white; font-weight: 600;">
        📌 Save This Law
      </button>
      
    </form>
  <?php else: ?>
    <p style="margin-top: 16px;"><a href="login.php" style="color: #5F00FF; font-weight: bold;">Log in</a> to save this law.</p>
  <?php endif; ?>
  <!-- ✅ End Save Button -->
</div>





  <div class="situation-tabs">
    <a href="lawcategory_familylaws.php" class="situation-tab">Family Laws</a>
    <a href="lawcategory_criminallaws.php" class="situation-tab">Criminal Laws</a>
    <a href="lawcategory_propertylaws.php" class="situation-tab ">Property Laws</a>
    <a href="lawcategory_employmentlaws.php" class="situation-tab">Employment Laws</a>
    <a href="lawcategory_businesslaws.php" class="situation-tab active">Business & Corporate Laws</a>
    <a href="lawcategory_intellectuallaws.php" class="situation-tab">Intellectual Property Laws</a>
    <a href="lawcategory_immigrationlaws.php" class="situation-tab">Immigration Laws</a>
    <a href="lawcategory_consumerrightlaws.php" class="situation-tab">Consumer Right Laws</a>
    <a href="lawcategory_personalinjurylaws.php" class="situation-tab">Personal Injury Laws</a>
  </div>

  <div class="section">
    <h2>Employment Laws</h2>
    <p>Employment Law covers some of the most personal and life-changing issues you may encounter. From starting a marriage to navigating custody, support, and safety concerns, understanding your rights is crucial for protecting yourself and your loved ones.</p>
    <br>
    <!-- Law Card Example -->
    <div class="law-card">
      <h3>Marriage Rights & Responsibilities</h3>
      <p>Marriage is a legally binding contract with rights and duties. Laws vary by state or country, but typically cover property ownership, inheritance, healthcare decisions, and financial obligations.</p>
      <div class="rights">
        <h4>Your Rights:</h4>
        <ul>
          <li>You cannot be disinherited without a valid signed prenuptial or postnuptial agreement.</li>
          <li>You automatically gain rights to healthcare decision-making for your spouse if they become incapacitated.</li>
          <li>Marital property (anything earned or acquired during marriage) is jointly owned unless stated otherwise.</li>
          <li>You can request court-ordered financial support (maintenance) if separated but not yet divorced.</li>
        </ul>
      </div>
    </div>

    <div class="law-card">
      <h3>Divorce and Legal Separation</h3>
      <p>Divorce laws govern the ending of a marriage, including how property is divided, debts are handled, and whether spousal support (alimony) is awarded.</p>
      <div class="rights">
        <h4>Your Rights:</h4>
        <ul>
          <li>You have the right to ask for temporary spousal support while divorce is pending.</li>
          <li>You are entitled to an equitable share of marital assets, even if they are only in your spouse’s name (bank accounts, retirement, property)</li>
          <li>You can request restraining orders (exclusive use of home) if domestic tension escalates.</li>
          <li>You have the right to fair custody arrangements even if your spouse was the "primary caregiver."</li>
        </ul>
      </div>
    </div>

    <div class="law-card">
      <h3>Child Custody & Child Support</h3>
      <p>Your child's best interests come first — and the law gives you tools to protect them.</p>
      <div class="rights">
        <h4>Your Rights:</h4>
        <ul>
          <li>You can file for joint or sole custody based on the child's best interests (not automatically 50/50).</li>
          <li>You have the right to request child support even without formal divorce or marriage.</li>
          <li>You can seek emergency custody if the other parent poses immediate risk (e.g., substance abuse, neglect).</li>
          <li>You can petition to modify custody/support agreements later if life circumstances change (e.g., new jobs, relocations).</li>
        </ul>
      </div>
    </div>

    <div class="law-card">
      <h3>Protection Against Domestic Abuse</h3>
      <p>You are never alone. The law offers urgent remedies to protect yourself and your children.</p>
      <div class="rights">
        <h4>Your Rights:</h4>
        <ul>
          <li>You can immediately request a Temporary Restraining Order (TRO) without notifying the abuser.</li>
          <li>Courts can order emergency custody transfers if children are at risk.</li>
          <li>Abusers can be forced out of the shared residence (exclusive possession orders).</li>
          <li>Violation of a restraining order is a criminal offense — and police can arrest without a warrant.</li>
        </ul>
      </div>
    </div>

    <div class="important-note">
      <h4>Important:</h4>
      <p>Family law varies by state, especially in property division, custody standards, and domestic violence protections. Always consult a licensed family attorney for advice tailored to your location.</p>
    </div>
  </div>

  <div class="section">
    <h2>What to Expect in Family Law Cases</h2>

    <div class="law-card">
      <h3>1️⃣ Filing Initial Documents</h3>
      <p>You (or your attorney) submit legal petitions to formally open cases for divorce, custody, support, adoption, or protection orders.</p>
    </div>

    <div class="law-card">
      <h3>2️⃣ Temporary Hearings</h3>
      <p>Courts may grant urgent, short-term rulings on custody, housing, or financial support while your case is pending.</p>
    </div>

    <div class="law-card">
      <h3>3️⃣ Negotiation</h3>
      <p>Many cases settle outside of court. You have the right to propose parenting plans, support amounts, and property divisions without needing a trial.</p>
    </div>

    <div class="law-card">
      <h3>4️⃣ Trial (if needed)</h3>
      <p>If no settlement is reached, a family court judge makes final rulings based on testimony, evidence, and legal standards for fairness.</p>
    </div>

  </div>
</div>

 <!-- FOOTER GLOBAL SECTION -->

  <!-- Footer Section -->
  <?php include 'footer.php'; ?>

</body>
</html>
