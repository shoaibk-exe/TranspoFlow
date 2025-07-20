<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services - TranspoFlow</title>

  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="assets/css/style.css">
  @vite('resources/css/style.css')
   <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <style>
    body{
        height: 0px;
    }
    </style>
</head>
<body class="loaded">
  
  <!-- 
    - #TOP BAR
  -->
  <x-topbar/>
  <!-- 
    - #HEADER
  -->
  <x-header />

  <!-- 
    - #BACK TO TOP
  -->
  <a href="#top" class="back-top-btn" data-back-top-btn aria-label="back to top">
    <ion-icon name="chevron-up-outline" aria-hidden="true"></ion-icon>
  </a>

  <!-- 
    - #SERVICES
  -->
<!-- About Us Section -->
<section class="section about-us bg-black-10" id="about-us">
    <div class="container">
      <br><br><br><br>
      <p class="section-subtitle text-center">Learn More About Us</p>
      <h2 class="headline-1 section-title text-center">Who We Are</h2>
  
      <div class="about-content">
        <div class="about-text">
          <h3 class="title-4">Our Mission</h3>
          <p class="label-2">
            We are a dedicated team focused on simplifying transportation management and providing seamless experiences for both passengers and cargo services. Our mission is to make every journey smarter and more efficient.
          </p>
        </div>
  
        <div class="about-text">
          <h3 class="title-4">Our Vision</h3>
          <p class="label-2">
            We envision a future where transportation is fully optimized, easy to manage, and accessible to everyone. Our goal is to innovate continuously and help businesses thrive in an ever-evolving industry.
          </p>
        </div>
  
        <div class="about-text">
          <h3 class="title-4">Our Values</h3>
          <p class="label-2">
            Integrity, innovation, and customer satisfaction are at the heart of everything we do. We aim to deliver value through dependable solutions that are designed with both the customer and business in mind.
          </p>
        </div>
      </div>
<br><br><br>
  
      <div class="team-section">
        <h3 class="title-4">Meet Our Team</h3>
        <div class="team-cards">
          <div class="team-card">
            <img src="assets/images/badge-1.png" alt="Team Member 1" class="team-image">
            <h4 class="team-name">John Doe</h4>
            <p class="team-role">CEO & Founder</p>
          </div>
  
          <div class="team-card">
            <img src="assets/images/hero-slider-2.jpg" alt="Team Member 2" class="team-image">
            <h4 class="team-name">Jane Smith</h4>
            <p class="team-role">CTO</p>
          </div>
  
          <div class="team-card">
            <img src="assets/images/menu-3.png" alt="Team Member 3" class="team-image">
            <h4 class="team-name">Alice Brown</h4>
            <p class="team-role">Head of Operations</p>
          </div>
        </div>
      </div>
  
      <img src="/api/placeholder/200/200" alt="shape" class="shape shape-1 move-anim">
      <img src="/api/placeholder/200/200" alt="shape" class="shape shape-2 move-anim">
    </div>
  </section>
  

<!-- 
  - #FOOTER
-->
<footer class="footer2">
    <div class="container2">
      <div class="footer-content2">
        <ul class="footer-links2">
          <li><a href="#home" class="footer-link">Home</a></li>
          <li><a href="#about" class="footer-link">About</a></li>
          <li><a href="#services" class="footer-link">Services</a></li>
          <li><a href="#contact" class="footer-link">Contact</a></li>
        </ul>
  
        <p class="copyright2">
          &copy; 2024 <a href="#" class="link">TranspoFlow</a>. All Rights Reserved
        </p>
      </div>
    </div>
  </footer>

  <!-- 
    - #SCRIPTS
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
    const header = document.querySelector("[data-header]");
    const backTopBtn = document.querySelector("[data-back-top-btn]");

    let lastScrollPos = 0;

    const hideHeader = function () {
      const isScrollBottom = lastScrollPos < window.scrollY;
      if (isScrollBottom) {
        header.classList.add("hide");
      } else {
        header.classList.remove("hide");
      }

      lastScrollPos = window.scrollY;
    }

    window.addEventListener("scroll", function () {
      if (window.scrollY >= 50) {
        header.classList.add("active");
        backTopBtn.classList.add("active");
        hideHeader();
      } else {
        header.classList.remove("active");
        backTopBtn.classList.remove("active");
      }
    });
  </script>

</body>
</html>