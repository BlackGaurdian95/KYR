// 1️⃣ Dynamically Load the Navigation Bar on All Pages
document.getElementById("navbar").innerHTML = `
    <nav>
        <a href="index.html">Home</a> |
        <a href="about.html">About Us</a> |
        <a href="blog.html">Blog</a> |
        <a href="support.html">Support</a>
    </nav>
`;

// 2️⃣ Interactive "Get Started" Button
document.getElementById("getStartedBtn").addEventListener("click", function() {
    alert("Redirecting to the Get Started page...");
    window.location.href = "get-started.html";
});

// 3️⃣ Dark/Light Mode Toggle
document.getElementById("themeToggle").addEventListener("click", function() {
    document.body.classList.toggle("dark-mode");
});
