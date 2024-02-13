
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>maw institute</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/faq2.css" rel="stylesheet">

  <style>
    #btt{
      background: white;
      color: black;
      border-radius: 5px;
      margin-left: 30px;
      border:1px solid blue;
      height: 40px;
      width:130px;
    }
     #img3{
      margin-top:-140px;
      width:180px;
      height:100px;
      margin-left:-90px;
    }
    @media (max-width: 768px) {
    #img3{
      margin-top:-100px;
      width:180px;
      height:90px;
      margin-left:-90px;
    }
    #btt{
      background: white;
      color: black;
      border-radius: 5px;
      margin-left: 0;
      border:1px solid blue;
      height: 30px;
      width:100px;
    }
  }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">maw@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+2547564645</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Maw Institute <br>
          <span style="font-size:12px;color:#f85a40;margin-left:-5px;">Of Digital Engineering</span>
        </h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
        <li class="dropdown"><a href="#"><span>Our Courses</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
            <li><a href="http://157.230.37.96/maw/">All Courses</a></li>
              <li><a href="http://157.230.37.96/maw/indexAndroid.php">Mobile app development courses</a></li>
              <li><a href="http://157.230.37.96/maw/indexWeb.php">Web Application develoment courses</a></li>
              <li><a href="http://157.230.37.96/maw/indexDatabase.php">Database programming courses</a></li>
              <li><a href="http://157.230.37.96/maw/indexShortCourses.php">Short Courses </a>
                
              </li>
            </ul>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#faq">FAQs</a></li>
          </li>
          <a href="http://157.230.37.96/maw/">
            <button id="btt"><i class="bi bi-box-arrow-in-right" style="font-size:18px;font-style:normal;"> login</i></button>
          </a>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="color:black;"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" style="color:black;"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

 

  <man id="more">
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

<div class="row gy-4">

  <div class="col-lg-4">
    <div class="content px-xl-5">
      <h3>Frequently Asked <strong>Questions</strong></h3>
      <p>
        Kindly Check out from the questions if your concerns are catered for. Incase you have any other 
        concern please reach out to us through our contact details provided in the contact menu.
      </p>
    </div>
  </div>

  <div class="col-lg-8">

    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

  
      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
            <span class="num">1.</span>
            Are the training courses self-based or instructor-led and physical or online?
          </button>
        </h3>
        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
          <div class="accordion-body">
            Currently our courses are instructor-led involving live online lectures and assignments remotely through
            the internet enabled devices. However we intend to introduce other forms of training such as
            self-based online trainings to allow the learner to study at their own pace.
          </div>
        </div>
      </div><!-- # Faq item-->

      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
            <span class="num">2.</span>
            Are there any requirements for enrolling in any of the courses?
          </button>
        </h3>
        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
          <div class="accordion-body">
           Since our programs offers technical skills courses through online lectures, you are required to have
           a standard to high speed processing laptop and have access to stable internet. We also
           recommend you to find a quiet place during lectures.
          </div>
        </div>
      </div><!-- # Faq item-->

      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
            <span class="num">3.</span>
            What kind of cerfication can I earn from the training?
          </button>
        </h3>
        <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
          <div class="accordion-body">
            At MAW institute we issue a certficate of completion after completing 
            the training. we are focused to start issuing professional certificate of 
            accreditation after acquring full necessary approval.
          </div>
        </div>
      </div><!-- # Faq item-->

      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
            <span class="num">4.</span>
            Are this courses suitable for beginners or advanced professinals?
          </button>
        </h3>
        <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
          <div class="accordion-body">
           The courses we offer caters for all individuals from high school graduates to 
           working software engineers who would want to immerse themselves and get a deeper understanding in software engineering and software development and grow their carer. AS well as people
           in other careers and would want to shift to software engineering career.
          </div>
        </div>
      </div><!-- # Faq item-->

    </div>

  </div>
</div>

</div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Maw Institute</span>
          </a>
          <p>Unlock your software development and software engineering potential at Maw institute.Here, we transform aspiring software engineers and software developers into industry-ready professionals</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="termsAndCondition.php">Terms of service</a></li>
            <li><a href="privacy.php">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Courses</h4>
          <ul>
            <li><a href="http://157.230.37.96/maw/indexShortCourses.php">Short Programming Courses</a></li>
            <li><a href="http://157.230.37.96/maw/indexWeb.php">Web Development</a></li>
            <li><a href="http://157.230.37.96/maw/indexAndroid.php">Mobile  App Development</a></li>
            <li><a href="http://157.230.37.96/maw/indexAndroid.php">Hybrid App Development</a></li>
            <li><a href="http://157.230.37.96/maw/indexDatabase.php">Database Programming</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Nairobi <br>
            Utali house<br>
            Kenya <br><br>
            <strong>Phone:</strong> +254715744358,+254726586630<br>
            <strong>Email:</strong>info@mawinstitute.com,<br>admission@mawinstitute.com,<br>sales@mawinstitute.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Maw</span></strong>. All Rights Reserved
      </div>
      
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script>
    let subMenu=document.getElementById("subMenu");
    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
      
    }
  </script>
  <script src="assets/js/main.js"></script>

</body>

</html>