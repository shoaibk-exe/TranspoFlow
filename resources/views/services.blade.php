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
  <link rel="shortcut icon" href="/favicon.svg" type="image/svg+xml">

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
  <section class="section services bg-black-10" id="services">
    <div class="container">
        <br><br><br><br>
      <p class="section-subtitle text-center">Transport Simplified</p>
      <h2 class="headline-1 section-title text-center">Our Services</h2>

      <div class="grid-list">
        <div class="service-card">
          <div class="card-icon">
            <img src="images/admin-panel.jpg" alt="Admin Dashboard" class="img-cover">
          </div>
          
          <h3 class="title-4 card-title">Admin Dashboard</h3>
          
          <p class="label-2 card-text">
            Effortlessly oversee your business detailed reports, and company information management.
                </p>
          
          <a href="#" class="btn-text hover-underline">
            <span class="text">View Plan</span>
          </a>
        </div>

        <div class="service-card">
          <div class="card-icon">
            <img src="images/tms.jpg" alt="Ticket Management System" class="img-cover">
          </div>
          
          <h3 class="title-4 card-title">Ticket Management System</h3>
          
          <p class="label-2 card-text">
            Simplify ticket pricing, bookings, and cancellations to provide a seamless experience for your passengers
        </p>
          
          <a href="#" class="btn-text hover-underline">
            <span class="text">View Plan</span>
          </a>
        </div>

        <div class="service-card">
          <div class="card-icon">
            <img src="images/cms.jpg" alt="Corporate Events" class="img-cover">
          </div>
          
          <h3 class="title-4 card-title">Cargo Managment System</h3>
          
          <p class="label-2 card-text">
            Streamline cargo bookings, handle efficiently, and optimize pricing managment.
          </p>
          
          <a href="#" class="btn-text hover-underline">
            <span class="text">View Plan</span>
          </a>
        </div>

        <div class="service-card">
          <div class="card-icon">
            <img src="images/fms.jpg" alt="Fleet Management System" class="img-cover">
          </div>
          
          <h3 class="title-4 card-title">Fleet Management System</h3>
          
          <p class="label-2 card-text">
            Manage vehicle details, create schedules, and oversee drivers to keep your operations running smoothly.
        </p>
          
          <a href="#" class="btn-text hover-underline">
            <span class="text">View Plan</span>
          </a>
        </div>
        <div class="service-card">
          <div class="card-icon">
            <img src="images/csm.jpg" alt="Customer Support Managment" class="img-cover">
          </div>
          
          <h3 class="title-4 card-title">Customer Support Managment</h3>
          
          <p class="label-2 card-text">
            Enhance customer satisfaction with instant chat support, a feedback system, and responsive communication tools.
        </p>
          
          <a href="#" class="btn-text hover-underline">
            <span class="text">View Plan</span>
          </a>
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
          <li><a href="/" class="footer-link">Home</a></li>
          <li><a href="/services" class="footer-link">About</a></li>
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