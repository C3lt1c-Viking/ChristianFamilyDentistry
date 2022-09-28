<?php 
  include('header.php');
?>

<body>

<?php 
  include('menu.php');
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>We Treat, God Heals</h1>
          <h2>Come get your best smile today!</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="tel:940-627-8400" class="btn-get-started scrollto">(940) 627-8400</a>&nbsp;&nbsp;&nbsp;
            <a href="tel:940-627-8403" class="btn-get-started scrollto">(940) 627-8403</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/clean_teeth.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        
      <h1>Protect Your Smile for Life!</h1>

        <div class="row" data-aos="zoom-in" style="margin-left: 20%">
          
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.6monthsmiles.com/" target="_blank"><img src="assets/img/six_month_smiles.png" class="img-fluid" alt="Six Month Smiles"></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.leddental.com/" target="_blank"><img src="assets/img/velscope.png" class="img-fluid" alt="VelScope"></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.oraverse.com/" target="_blank"><img src="assets/img/oraverse.png" class="img-fluid" alt="OraVerse"></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <a href="https://www.sdcerec.com/" target="_blank"><img src="assets/img/cerec.png" class="img-fluid" alt="Cerec"></a>
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Christian Family Dentistry</h2>
          <p>We appreciate your interest in our dental office, and look forward to serving you soon! Please use any of the methods below to connect with us!</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><a href="https://goo.gl/maps/BLRNohwE8BCicqPZ6" target="_blank" style="cursor: crosshair">2100 South Reeves Lane Decatur, TX 76234</a></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:office@christianfamilydentistry.com" style="cursor: url">office@christianfamilydentistry.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 940-627-8400 | +1 940-6248-8403</p>
              </div>

              <div class="social">
                <i class="bi bi-at"></i>
                <h4>Social Media:</h4>
                <p><a href="https://www.facebook.com/ChristianFamilyDentistry" target="_blank" style="cursor: cell">Facebook</a></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.8948959738395!2d-97.59857434894327!3d33.21685156864085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864d92b0bcfbb8ad%3A0x6227db4fab3d4887!2s2100%20S%20Reeves%20Ln%2C%20Decatur%2C%20TX%2076234%2C%20USA!5e0!3m2!1sen!2sjp!4v1664397302940!5m2!1sen!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

 <!-- ======= Footer ======= -->
 <footer id="footer">

<div class="footer-top">
   <div class="container">
     <div class="row">

       <div class="col-lg-3 col-md-6 footer-contact">
         <h3>Christian Family Dentistry</h3>
         <p>
           2100 South Reeves Lane <br>
           Decatur, TX 76234<br>
           United States <br><br>
           <strong>Phone:</strong> <a href="tel:940-627-8400">+1 940-627-8400</a><br>
           <strong>Email:</strong> <a href="mailto:office@christianfamilydentistry.com">office@christianfamilydentistry.com</a><br>
         </p>
       </div>

       <div class="col-lg-3 col-md-6 footer-links">
         <h4>Useful Links</h4>
         <ul>
           <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="forms.php">Patient Information &amp; Forms</a></li>
         </ul>
       </div>

       <div class="col-lg-3 col-md-6 footer-links">
         <h4>Our Services</h4>
         <ul>
           <li><i class="bx bx-chevron-right"></i> Fillings</li>
           <li><i class="bx bx-chevron-right"></i> Crowns</li>
           <li><i class="bx bx-chevron-right"></i> Veeners</li>
           <li><i class="bx bx-chevron-right"></i> Dentures</li>
           <li><i class="bx bx-chevron-right"></i> Implants</li>
           <li><i class="bx bx-chevron-right"></i> Ortho Services</li>
           <li><i class="bx bx-chevron-right"></i> Endodontics</li>
           <li><i class="bx bx-chevron-right"></i> Cleanings</li>
           <li><i class="bx bx-chevron-right"></i> Periodontal</li>
           <li><i class="bx bx-chevron-right"></i> Teeth Whitening</li>
         </ul>
       </div>

       <div class="col-lg-3 col-md-6 footer-links">
         <h4>Our Social Networks</h4>
         <p>Follow us on your desired social network platform!</p>
         <div class="social-links mt-3">
           <a href="https://www.google.com/search?q=Christian+Family+Dentistry+Decatur+TX&sxsrf=ALiCzsYbwsD3c9yRC9aFpjVjdCo1G1IUFw%3A1664398734584&source=hp&ei=jrU0Y_zAIY2_wAOFnYPwBQ&iflsig=AJiK0e8AAAAAYzTDnjYIcklIRiSaM30JdT5SyuCyqcVN&ved=0ahUKEwj8v9m6sLj6AhWNH3AKHYXOAF4Q4dUDCAc&uact=5&oq=Christian+Family+Dentistry+Decatur+TX&gs_lp=Egdnd3Mtd2l6uAED-AEBMgQQIxgnMgYQABgeGBYyBhAAGB4YFsICBxAjGOoCGCfCAg0QLhjHARivARjqAhgnwgIFEAAYgATCAgsQLhiABBjHARjRA8ICDhAuGIAEGMcBGNEDGNQCwgIIEC4YgAQY1ALCAgUQLhiABMICChAuGMcBGK8BGCfCAgsQLhiABBjHARivAcICCBAAGB4YFhgKwgIHECMYsAIYJ8ICChAjGLACGMkDGCfCAggQABgeGA0YBcICBRAAGIYDwgIGEAAYHhgNwgIJEAAYHhjJAxgWqAIKSKAxUJYDWJYvcAN4AMgBAJABAJgBhwKgAdhJqgEEMi0zOQ&sclient=gws-wiz#lrd=0x864d92b0bd2dbdd7:0x44819215806d0bd9,1,,," class="google" target="_blank"><i class="bx bxl-google"></i></a>
           <a href="https://www.facebook.com/ChristianFamilyDentistry" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
           <a href="https://twitter.com/cfd_tx" target="_blank" class="instagram"><i class="bx bxl-twitter"></i></a>
         </div>
       </div>

     </div>
   </div>
 </div>

 <div class="container footer-bottom clearfix">
   <div class="copyright">
     &copy; Copyright <strong><span>Christian Family Dentistry</span></strong>. All Rights Reserved
   </div>
   <div class="credits">
     Designed by <a href="https://www.vikingwebsolutions.info/">Viking Web Solutions</a>
   </div>
 </div>
</footer><!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>