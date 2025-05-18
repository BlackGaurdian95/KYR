<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Learning Law | Know Your Right</title>
  <link rel="stylesheet" href="master.css" />

</head>
<body>
  
  <!--NAVBAR-->
  <?php include 'navbar.php'; ?>
<!-- END OF NAVBAR-->

  <!-- HEADING -->
  <div class="aboutus-container">
    <p>Welcome to</p>
    <h1>LEARNING THE LAW</h1>
    <p>Simplify your workflow with our intuitive task management tool, designed to help you stay on top of your daily responsibilities and long-term goals.</p>
  </div>

  <!-- Legal Words Made Simple - Single Card -->
  <section class="legal-terms-section">
    <h2>Legal Words Made Simple</h2>
    <div class="legal-term-card">
      <h3><span id="term-title">Habeas Corpus</span></h3>
      <p id="term-definition">
        Habeas Corpus – A writ requiring a person under arrest to be brought before a judge or into court.
      </p>
      <button onclick="generateNewTerm()">Learn New Word</button>
    </div>
  </section>

  <!-- Real-World Legal Scenarios -->
  <section class="section">
    <h2>Real-World Legal Scenarios</h2>
    <div class="card-grid">
      <div class="card">
        <h3>Scenario: Tenant Rights</h3>
        <p>A landlord enters a tenant's flat without notice. Is that legal?</p>
        <a href="https://www.google.com">Read Now</a>
      </div>
      <div class="card">
        <h3>Scenario: Workplace Harassment</h3>
        <p>Employee faces harassment by a senior. What action can they take?</p>
        <a href="https://www.google.com">Read Now</a>
      </div>
      <div class="card">
        <h3>Scenario: Arrest Without Warrant</h3>
        <p>Police arrest someone without a warrant. Is it valid?</p>
        <a href="https://www.google.com">Read Now</a>
      </div>
      <div class="card">
        <h3>Scenario: Arrest Without Warrant</h3>
        <p>Police arrest someone without a warrant. Is it valid?</p>
        <a href="https://www.google.com">Read Now</a>
      </div>
      <div class="card">
        <h3>Scenario: Arrest Without Warrant</h3>
        <p>Police arrest someone without a warrant. Is it valid?</p>
        <a href="https://www.google.com">Read Now</a>
      </div>
      <div class="card">
        <h3>Scenario: Dowry Harassment</h3>
        <p>A woman is being harassed for dowry after marriage.</p>
        <a href="https://www.google.com">Read Now</a>
      </div>
    </div>
  </section>

  <!-- Step-by-Step Legal Guides - Now with 3 Cards -->
  <section class="section">
    <h2>Step-by-Step Legal Guides</h2>
    <div class="card-grid">
      <div class="card">
        <h3>Guide: Filing an FIR</h3>
        <p>Step-by-step process to file a First Information Report at a police station in India.</p>
        <a>View Guide</a>
      </div>
      <div class="card">
        <h3>Guide: Consumer Complaint</h3>
        <p>Learn how to file complaints in Consumer Court with documents and legal formats.</p>
        <a>View Guide</a>
      </div>
      <div class="card">
        <h3>Guide: RTI Application</h3>
        <p>How to file a Right to Information application to get information from government bodies.</p>
        <a>View Guide</a>
      </div>
    </div>
  </section>

  <!-- Glossary of Common Terms -->
  <section class="section">
    <h2>Glossary of Common Terms</h2>
    <div class="card-grid">
      <div class="card">
        <h3>Glossary: FIR</h3>
        <p>FIR stands for First Information Report — a document recorded by police upon learning of a cognizable offense.</p>
      </div>
      <div class="card">
        <h3>Glossary: IPC</h3>
        <p>Indian Penal Code – Defines crimes and their respective punishments under Indian law.</p>
      </div>
      <div class="card">
        <h3>Glossary: CrPC</h3>
        <p>Code of Criminal Procedure – The procedural law for administration of substantive criminal law in India.</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>
  <script>

    const terms = [
      {
        term: "Affidavit",
        definition: " A written statement sworn under oath, used as evidence in court."
      },
      {
        term: "Plaintiff",
        definition: "The person who files a lawsuit or brings a legal complaint."
      },
      {
        term: "Defendant",
        definition: " The person or party being accused or sued in court."
      },
      {
        term: "Testimony",
        definition: " A statement made by a witness under oath in court."
      },
      {
        term: "Subpoena",
        definition: "A legal order requiring someone to appear in court or produce documents."
      },
      {
        term: "Jurisdiction",
        definition: "The legal authority a court has to hear and decide a case."
      },
      {
        term: "Settlement",
        definition: "An agreement between parties to resolve a dispute without going to trial."
      },
      {
        term: "Appeal",
        definition: " A request to a higher court to review and possibly change a decision."
      },
      {
        term: "Litigation",
        definition: "The process of taking legal action or resolving disputes in court."
      },
      {
        term: "Verdict",
        definition: "The final decision or judgment made by a jury or judge in a trial."
      }

    ];

    function generateNewTerm() {
      const random = terms[Math.floor(Math.random() * terms.length)];
      document.getElementById('term-title').innerText = random.term;
      document.getElementById('term-definition').innerText = `${random.term} – ${random.definition}`;
    }
  </script>
</body>
</html>