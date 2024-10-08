<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>About Green Digital | Estimasi Emisi Karbon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="estimasi emisi karbon">
    <meta name="dicoding:email" content="juslifatuladnan@gmail.com">
    <meta name="keywords" content="Green Digital, estimasi emisi karbon">
    <meta name="author" content="Green Digital">
    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/img/favicon.ico" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/boxicons/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/swiper/swiper-bundle.min.css"
      rel="stylesheet"
    />
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="article.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <header id="header" class="fixed-top d-flex align-items-center border">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <!-- <h1><img src="/assets/img/logo.png" alt=""><a href="#">Green Digital</a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="./index.html">
            <img src="../assets/img/logo.png" alt="logo" class="pt-3 pb-3"/>
          </a>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
          <li><a href="../index.php" >BERANDA</a></li>
            <li>
              <?php
                session_start();
                if(!$_SESSION){
              ?>
            <a href="../Login/login.php">KALKULATOR</a>
            <?php
              }elseif($_SESSION['id']){
            ?>
            <a href="../kalkulator/kalku.php">KALKULATOR</a>
            <?php        
              }
            ?>
            </li>
            <li><a href="./about.php" class="active" >TENTANG</a></li>
            <li><a href="../articles/articlepage.php">ARTIKEL</a></li>
            <li>
              <?php
              if(!$_SESSION){
            ?>
            <a href="../Login/login.php">AKSI LINGKUNGAN</a>
            <?php
              }elseif($_SESSION['id']){
            ?>
            <a href="../aksi/aksi.php">AKSI LINGKUNGAN</a>
            <?php        
              }
            ?>
            </li>
            <?php
              if(!$_SESSION){
            ?>
            <li>
            <button type="button" class="btn btn-success rounded-5" onclick="window.location.href='../Login/login.php'">
                MASUK
              </button>
              </li>
          <?php
              }elseif($_SESSION['id']){
            ?>
             <li>
             <button type="button" class="btn btn-success rounded-5 logout" onclick="window.location.href='../Login/logout.php'">
                KELUAR
              </button>
              </li>
            <?php
            }
            ?>
           
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5 about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-90 h-90" src="../assets/img/logo-esemka.png" alt="logo" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">TENTANG</h6>
                    <h1 class="mb-4">Selamat Datang di <span class="text-warning">Green Digital </span><span class="text-warning">(Estimasi Emisi Karbon)!</span></h1>
                    <p class="mb-4">Di Green Digital, kami memiliki kepedulian yang tinggi terhadap masalah serius emisi karbon dan dampaknya terhadap lingkungan. Perjalanan kami dimulai sebagai proyek capstone dalam program   Samsung solve for tomorrow, yang memberikan kami kesempatan untuk mengaplikasikan pengetahuan dan keterampilan kami dalam menciptakan solusi inovatif.</p>
                    <p class="mb-4">Tujuan utama Green Digital adalah untuk meningkatkan kesadaran masyarakat akan dampak emisi karbon. Sadar akan dampak emisi karbon mengajak kita untuk mengubah perilaku dan mengambil tindakan berkelanjutan, seperti mengurangi konsumsi energi fosil, beralih ke sumber energi terbarukan, mendukung transportasi ramah lingkungan, dan menerapkan praktik keberlanjutan dalam kehidupan sehari-hari.</p>
                    <p class="mb-4">Dengan kesadaran dan tindakan kolektif, kita dapat menjaga planet ini sebagai tempat yang layak dihuni bagi generasi mendatang, serta melestarikan keanekaragaman hayati dan sumber daya alam yang sangat berharga bagi kita semua.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="row gy-5 gx-4 justify-content-center cards">
        <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="position-relative border border-blue pt-5 pb-4 px-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-blue rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                    <i class="fa fa-globe fa-3x text-white"></i>
                </div>
                <h5 class="mt-4">Misi Green Digital</h5>
                <hr class="w-25 mx-auto bg-blue mb-1">
                <hr class="w-50 mx-auto bg-blue mt-0">
                <p class="mb-0">Menyediakan solusi inovatif yang memberdayakan individu, bisnis, dan komunitas untuk memahami, mengukur, dan mengurangi jejak karbon mereka. Kami percaya bahwa dengan meningkatkan kesadaran dan mengambil tindakan kolektif, kita dapat memberikan dampak positif yang signifikan bagi planet kita.</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="position-relative border border-blue pt-5 pb-4 px-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-blue rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                    <i class="fa fa-book-open fa-3x text-white"></i>
                </div>
                <h5 class="mt-4">Lahirnya Green Digital</h5>
                <hr class="w-25 mx-auto bg-blue mb-1">
                <hr class="w-50 mx-auto bg-blue mt-0">
                <p class="mb-0">Green Digital lahir dari upaya kolektif sekelompok orang yang bersemangat tentang lingkungan. Terinspirasi oleh keinginan untuk mengatasi perubahan iklim, kami memutuskan untuk mewujudkan proyek ini dalam bentuk sebuah website. Program ini memberikan kami kesempatan untuk menggabungkan pengetahuan akademis dengan pengalaman praktis dalam mengembangkan platform yang dapat diandalkan dan mudah digunakan.</p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
            <div class="position-relative border border-blue pt-5 pb-4 px-4">
                <div class="d-inline-flex align-items-center justify-content-center bg-blue rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                    <i class="fa fa-envelope-open-text fa-3x text-white"></i>
                </div>
                <h5 class="mt-4">Nilai-Nilai Green Digital</h5>
                <hr class="w-25 mx-auto bg-blue mb-1">
                <hr class="w-50 mx-auto bg-blue mt-0">
                <p class="mb-0">Kami didorong oleh serangkaian nilai inti yang menjadi panduan dalam setiap tindakan kami. Integritas, inovasi, dan kolaborasi adalah dasar dari pekerjaan kami. Kami berkomitmen untuk transparansi, memastikan pengguna kami memiliki akses pada informasi yang jujur dan dapat dipercaya.</p>
            </div>
        </div>
    </div>


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">TIM KITA</h6>
                <h1 class="mb-5">Tim Developer Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/nurul.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://github.com/SitiNurul24"><i class="fab fa-github" target="_blank"></i></a>
                            <a class="btn btn-square mx-1" href="http://www.linkedin.com/in/siti-nurul-fatimah-85175418b" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/sitinurulftmh_/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Siti Nurul Fatimah</h5>
                            <small>Leader, Back-end Developer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/ravina.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/raviinaaaa_/" target="_blank"><i class="fab fa-github"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/raviinaaaa_/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/raviinaaaa_/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Ravina</h5>
                            <small>Front-End Developer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/ramsa.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/ramsasabil/" target="_blank"><i class="fab fa-github"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/ramsasabil/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/ramsasabil/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Muhammad Ramsa Sabil</h5>
                            <small>UI Design</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/melin.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/melindaadwst/" target="_blank"><i class="fab fa-github"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/melindaadwst/" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square mx-1" href="https://www.instagram.com/melindaadwst/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Melinda Dwi Astuti</h5>
                            <small>Project Manager</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
        

    <!-- Footer Start -->
    <footer class="footer" role="contentinfo">
        <div class="container-footer">
          <div class="row" data-aos="fade-right">
            <div class="col-md-3 mb-4">
              <img src="../assets/img/logo-Green Digital.png" alt="" class="footer-logo" style="width: 90px;"/>
            </div>
            <div class="col-md-9 mt-4">
              <div class="row site-section pt-0">
                <div class="col-md-4 mb-4 mb-md-0">
                  <h3>Navigation</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Article</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">What We Do</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                  <h3>More</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Donate</a></li>
                    <li><a href="#">Blog</a></li>
                  </ul>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                  <h3>Connect</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">LinkedIn</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
  
          <div
            class="row justify-content-center text-center"
            data-aos="fade-right"
          >
            <div class="col-md-7">
              <p class="copyright mt-5">
                &copy; Copyright Green Digital. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </footer>

    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-blue btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>