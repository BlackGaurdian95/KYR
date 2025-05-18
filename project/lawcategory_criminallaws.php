<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Criminal Laws | Know Your Rights</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="master.css">
  <style>
    
  </style>
</head>

<body>

<!--NAVBAR-->
<?php include 'navbar.php'; ?>
<!-- END OF NAVBAR-->

<div class="category-content-container">
  <p>Welcome to</p>
  <h1>Criminal Laws</h1>
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
    <a href="lawcategory_criminallaws.php" class="situation-tab active">Criminal Laws</a>
    <a href="lawcategory_propertylaws.php" class="situation-tab">Property Laws</a>
    <a href="lawcategory_employmentlaws.php" class="situation-tab">Employment Laws</a>
    <a href="lawcategory_businesslaws.php" class="situation-tab">Business & Corporate Laws</a>
    <a href="lawcategory_intellectuallaws.php" class="situation-tab">Intellectual Property Laws</a>
    <a href="lawcategory_immigrationlaws.php" class="situation-tab">Immigration Laws</a>
    <a href="lawcategory_consumerrightlaws.php" class="situation-tab">Consumer Right Laws</a>
    <a href="lawcategory_personalinjurylaws.php" class="situation-tab">Personal Injury Laws</a>
  </div>

  <div class="section">
    <h2>Criminal Laws</h2>
    <p>Criminal Law covers some of the most personal and life-changing issues you may encounter. From starting a marriage to navigating custody, support, and safety concerns, understanding your rights is crucial for protecting yourself and your loved ones.</p>
    <br>
    <!-- Law Card Example -->
    <div class="law-card">
      <h3>Deterrence</h3>
      <p>To discourage criminal behavior by setting consequences for law-breaking. Criminal law seeks to prevent crime by making the consequences of illegal actions clear and severe enough to deter people from engaging in unlawful behavior.</p>
      <div class="rights">
        <h4>Your Rights:</h4>
        <ul>
          <li>Right to Be Informed of the Law – People can only be punished for acts clearly defined as crimes.</li>
          <li>Right to Due Process – The law must be applied fairly, not arbitrarily.</li>
          <li>Right to Legal Representation – Everyone has the right to a defense to avoid unjust deterrence.</li>
          <li>Right to Be Informed of Charges – Individuals must know what they are accused of to defend themselves properly.</li>
        </ul>
      </div>
    </div>

    <div class="law-card">
      <h3>Retribution</h3>
      <p>To ensure wrongdoers are justly punished according to their crimes. This objective emphasizes the need for punishment to reflect the seriousness of the crime committed, making offenders “pay” for their wrongdoings in a manner that is proportionate.</p>
      <div class="rights">
        <h4>Your Rights:</h4>
        <ul>
          <li>Right to Proportional Punishment – Penalties must fit the severity of the offense.</li>
          <li>Right to Protection from Cruel and Unusual Punishment – Punishment must respect human dignity.</li>
          <li>Right to a Public Trial – Ensures transparency in sentencing and punishment.</li>
          <li>Right to Appeal – If punishment seems unjust, one can challenge the decision in a higher court.</li>
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
      <h3>Uphold Justice and Rule of Law</h3>
      <p>To ensure fairness, equality, and accountability in the legal system. This objective seeks to guarantee that laws are applied equally to everyone, with justice being administered impartially to protect individuals’ rights.</p>
      <div class="rights">
        <h4>Your Rights:</h4>
        <ul>
          <li>Right to Equality Before the Law – Everyone is treated the same regardless of background.</li>
          <li>Right to a Neutral and Impartial Judge – Prevents biased rulings.</li>
          <li>Right to a Jury Trial (in many systems) – Allows community involvement in deciding guilt.</li>
          <li>Right to Transparent Legal Proceedings – Ensures laws are applied openly and justly.</li>
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
  <?php include 'navbar.php'; ?>

</body>
</html>
