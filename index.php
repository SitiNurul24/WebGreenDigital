<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Green Digital | Estimasi Emisi Karbons</title>
    <meta name="description" content="estimasi emisi karbon">
    <meta name="dicoding:email" content="juslifatuladnan@gmail.com">
    <meta name="keywords" content="estimasi emisi karbon">
    <meta name="author" content="Green Digital">

    <!-- Favicons -->
    <link href="./assets/img/favicon.ico" rel="icon" />
    <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="./assets/css/style.css" rel="stylesheet" />
    <link
      href="./assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="./assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="./assets/vendor/boxicons/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="./assets/vendor/swiper/swiper-bundle.min.css"
      rel="stylesheet"
    />

    <!-- Template Main CSS File -->
    <link href="./assets/css/style.css" rel="stylesheet" />

  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center border">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <!-- <h1><img src="/assets/img/logo.png" alt=""><a href="#">EsEmKa</a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="./index.html">
            <img src="./assets/img/logo.png" alt="..." class="pt-3 pb-3"/>
          </a>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="./index.php" class="active">BERANDA</a></li>
            <li>
              <?php
               session_start();
              if(!$_SESSION){
            ?>
            <a href="./Login/login.php">KALKULATOR</a>
            <?php
              }elseif($_SESSION['id']){
            ?>
            <a href="./kalkulator/kalku.php">KALKULATOR</a>
            <?php        
              }
            ?>
            </li>
            <li><a href="./about/about.php">TENTANG</a></li>
            <li><a href="./articles/articlepage.php">ARTIKEL</a></li>
            <li>
              <?php
              if(!$_SESSION){
            ?>
            <a href="./Login/login.php">AKSI LINGKUNGAN</a>
            <?php
              }elseif($_SESSION['id']){
            ?>
            <a href="./aksi/aksi.php">AKSI LINGKUNGAN</a>
            <?php        
              }
            ?>
            </li>
            <?php
              if(!$_SESSION){
            ?>
            <li>
              <button type="button" class="btn btn-success rounded-5" onclick="window.location.href='./Login/login.php'">
                MASUK
              </button>
              </li>
          <?php
              }elseif($_SESSION['id']){
            ?>
             <li>
             <button type="button" class="btn btn-success rounded-5" onclick="window.location.href='Login/logout.php'">
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
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero">
      <div class="container">
        <div class="hero-wrap row">
          <div class="hero-title col-lg-7 text-center text-lg-start">
            <h1 class="hero-h1" data-aos="fade-right">Berperan dalam Perubahan:<br>Bersama Kita Kurangi Emisi Karbon dan Wujudkan Masa Depan Biru</h1>
            <p class="mb-4" data-aos="fade-right" data-aos-delay="100">Ikut serta dalam upaya nyata pengurangan CO2 dan membuat dampak kebaikan untuk kelestarian
              bumi dan keberlangsungan kehidupan
            </p>
            <p data-aos="fade-right"><a href="#main"><button class="btn btn-warning pr-5 rounded-5">MULAI</button></a></p>
          </div>
          <div class="col-lg-5 hero-pic">
              <img src="./assets/img/net zero-pana 1.png" alt="" data-aos="fade-right" >
          </div>
        </div>
      </div>
    </section>

    <main id="main">
      <section class="know-about-esemka">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 me-auto">
              <p class="know-about">TENTANG GREEN DIGITAL</p>
              <h2 class="know-about-title mb-4">Estimasi Emisi Karbon</h2>
              <p class="know-about-description mb-4">
              Di Green Digital, kami memiliki kepedulian yang tinggi terhadap masalah 
              serius emisi karbon dan dampaknya terhadap lingkungan. Perjalanan
               kami dimulai sebagai proyek capstone dalam program Samsung solve for tomorrow, yang memberikan kami kesempatan untuk mengaplikasikan 
               pengetahuan dan keterampilan kami dalam menciptakan solusi inovatif.
              </p>
              <p class="know-about-description">
              Tujuan utama Green Digital adalah untuk meningkatkan kesadaran
               masyarakat akan dampak emisi karbon. Sadar akan dampak 
               emisi karbon mengajak kita untuk mengubah perilaku dan 
               mengambil tindakan berkelanjutan, seperti mengurangi 
               konsumsi energi fosil, beralih ke sumber energi terbarukan,
                mendukung transportasi ramah lingkungan, dan menerapkan 
                praktik keberlanjutan dalam kehidupan sehari-hari.
              </p>
              <button type="button" class="btn btn-warning rounded-5 mt-3">
                <a href="./about/about.php" class="text-light">Selengkapnya</a>
              </button>
            </div>
            <div class="col-md-1"></div>
            <div class="youtube col-md-5 mt-5" data-aos="fade-left">
              <iframe
                style="border-radius: 3%"
                width="400"
                height="500"
                src="https://www.youtube.com/embed/n4553xWQGy8"
                title="Emisi Karbon"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
          
      </section>

      <section class="article-esemka" id="article">
        <div class="container">
          <div class="row align-items-center" data-aos="fade-right">
            <div class="col-md-6 me-auto">
              <p class="article">ARTIKEL</p>
              <h2 class="article-title">
                Mengetahui Tentang Dampak Emisi Karbon
              </h2>
              <div class="row">
                <div class="d-flex">
                  <div class="article-icon">
                    <img
                      src="./assets/img/article-icon2.png"
                      alt="Apa itu Carbon"
                    />
                  </div>
                  <div>
                    <p class="article-list-title">Apa itu Carbon</p>
                    <p class="article-list-desc">
                    Karbon merupakan unsur kimia yang mempunyai simbol C 
                    dan nomor atom 6 pada tabel periodik. Unsur ini 
                     dalam golongan non-logam dan memiliki valensi 4, 
                     yang berarti ada 4 elektron yang membentuk ikatan kovalen. 
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="d-flex">
                  <div class="article-icon">
                    <img
                      src="./assets/img/article-icon2.png"
                      alt="Apa itu Carbon"
                    />
                  </div>
                  <div>
                    <p class="article-list-title">
                      Mengapa ini sangat penting?
                    </p>
                    <p class="article-list-desc">
                    Emisi karbon berdampak terhadap perubahan iklim global. 
                    </p>
                  </div>
                  <p></p>
                </div>
              </div>
              <div class="row">
                <div class="d-flex">
                  <div class="article-icon">
                    <img
                      src="./assets/img/article-icon2.png"
                      alt="Apa itu Carbon"
                    />
                  </div>
                  <div>
                    <p class="article-list-title">
                      Artikel tentang Emisi Karbon
                    </p>
                    <p class="article-list-desc">
                    Emisi karbon disebabkan oleh aktivitas pembakaran
                     senyawa-senyawa yang mengandung karbon. 
                    </p>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-warning rounded-5">
                <a href="./articles/articlepage.php" class="text-light">Selengkapnya</a>
              </button>
            </div>
            <div class="col-md-6 mb-5 mt-5" data-aos="fade-left">
              <img
                src="./assets/img/article-pic1.png"
                alt="Emisi Karbon"
                class="article-img"
              />
            </div>
          </div>
        </div>
      </section>

      <section id="graph" class="graph" style="background-color: #90CAF9">
  <div class="container">
    <div class="row">
      <div class="col-md-6" data-aos="fade-right">
        <h1>Data Karbon di Indonesia</h1>
        <p class="graph-description">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam
          natus ipsam assumenda nihil perferendis, cumque saepe commodi
          nemo?
        </p>
        <div class="row">
          <div class="col-md-6">
            <div class="graph-stats d-flex">
              <div class="graph-1">
                <p></p>
              </div>
              <div class="graph-percentage">
                <p>40% Transportasi</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="graph-stats d-flex">
              <div class="graph-2">
                <p></p>
              </div>
              <div class="graph-percentage">
                <p>35% Plastik</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="graph-stats d-flex">
              <div class="graph-3">
                <p></p>
              </div>
              <div class="graph-percentage">
                <p>15% Listrik</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="graph-stats d-flex">
              <div class="graph-4">
                <p></p>
              </div>
              <div class="graph-percentage">
                <p>10% Makanan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-4" data-aos="fade-left">
        <img
          src="./assets/img/graph.jpg"
          alt="Grafik Emisi Karbon di Indonesia"
          class="graph-img img-fluid"
        />
      </div>
    </div>
  </div>
</section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row" data-aos="fade-right">
          <div class="col-md-3 mb-4">
            <img src="./assets/img/logo-green-digital.png" alt="" class="footer-logo" style="width: 90px;"/>
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
            <div class="credits">
              <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            </div>
          </div>
        </div>
      </div>
    </footer>

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="./assets/vendor/aos/aos.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="./assets/js/main.js"></script>
  </body>
</html>
