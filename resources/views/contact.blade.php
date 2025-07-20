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
   <x-header/>
  <!-- 
    - #BACK TO TOP
  -->
  <a href="#top" class="back-top-btn" data-back-top-btn aria-label="back to top">
    <ion-icon name="chevron-up-outline" aria-hidden="true"></ion-icon>
  </a>

  <section class="contact-section bg-light" id="contact-section">
    <div class="container">
      <br><br><br><br>
      <p class="section-subtitle text-center">Get in Touch</p>
      <h2 class="headline-1 section-title text-center">Contact Us</h2>
  
      <div class="contact-container">
        <!-- Contact Info -->
        <div class="contact-details">
          <h3 class="title-3">Our Office</h3>
          <p class="label-2">123 Street Name, Lahore, Pakistan</p>
          <p class="label-2">Email: contact@transpoflow.com</p>
          <p class="label-2">Phone: +92000000000</p>
        </div>
  
        <!-- Line Separator -->
        <div class="contact-separator"></div>
  
        <!-- Contact Form -->
        <div class="contact-form-container">
          <h3 class="title-3">Send Us a Mail</h3>
          <form action="#" method="POST" id="contact-form">
            <div class="input-container">
              <input type="text" name="name" placeholder="Your Name" required class="input-field">
            </div>
            <div class="input-container">
              <input type="email" name="email" placeholder="Your Email" required class="input-field">
            </div>
            <div class="input-container">
              <textarea name="message" placeholder="Your Message" rows="5" required class="input-field"></textarea>
            </div>
            <button type="submit" class="btn-submit">Send Mail</button>
          </form>
        </div>
      </div>
  
      <!-- Google Map Embed -->
      <div class="map-container">
        <h3 class="title-3">Find Us Here</h3>
        <iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d717444.2623315892!2d74.2047463!3d31.549671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190474247b34bb%3A0x69b87c21f72bc4d5!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2sin!4v1615349247157!5m2!1sen!2sin"
  width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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