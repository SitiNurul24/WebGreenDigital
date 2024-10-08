<?php
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Green Digital | Estimasi Emisi Karbon</title>
    <meta name="description" content="estimasi emisi karbon">
    <meta name="dicoding:email" content="sitinurul@gmail.com">
    <meta name="keywords" content="Green Digital, estimasi emisi karbon">
    <meta name="author" content="Green Digital">

    <!-- Favicons -->
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

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../aksi/aksi.css" rel="stylesheet"/>

    <!-- =======================================================
  * Template Name: SoftLand
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center border">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <!-- <h1><img src="/assets/img/logo.png" alt=""><a href="#">EsEmKa</a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="./index.html">
            <img src="../assets/img/logo.png" alt="..." class="pt-3 pb-3"/>
          </a>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="../index.php">BERANDA</a></li>
            <li><a href="./kalku.php" class="active">KALKULATOR</a></li>
            <li><a href="../about/about.php">TENTANG</a></li>
            <li><a href="../articles/articlepage.php">ARTIKEL</a></li>
            <li><a href="../aksi/aksi.php">AKSI LINGKUNGAN</a></li>
            <?php
              if(!$_SESSION){
            ?>
            <li>
            <button type="button" class="btn btn-success rounded-5" onclick="window.location.href='../Login/login.php'">
                MASUK
              </button>
          </li>
          <?php
              }elseif($_SESSION['level'] == "user"){
            ?>
             <button type="button" class="btn btn-success rounded-5 btn-logout" onclick="window.location.href='../Login/logout.php'">
                KELUAR
              </button>
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

    <main class="calculator">
    <main class="calculator">
    <section class="calculators" id="calculate">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-12 text-center" data-aos="fade-up">
            <h1 style="margin-top:200px;">Kalkulator Emisi Karbon</h1>
          </div>

        </div>

        <div class="row">
          <div class="col-md-3 ms-auto" data-aos="fade-up"></div>
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

              <div class="row">
              <div class="clc-type text-center">
                <img src="../assets/img/listrik.png" alt="listrik" >
              </div>
                <div class="col-md-12 form-group">
                  <label for="name">Pemakaian Listrik (Kwh)</label>
                  <input type="number" id="electricity" name="gasoline" class="form-control" required>
                </div>
                <div class="clc-type text-center">
                  <img src="../assets/img/bensin.png" alt="">
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Pemakaian Bensin (Liter)</label>
                  <input type="number" id="gasoline" name="gasoline" class="form-control" required>
                </div>
                <div class="clc-type text-center">
                  <img src="../assets/img/solar.png" alt="">
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Pemakaian Diesel(Liter)</label>
                  <input type="number" id="diesel" name="gasoline" class="form-control" required>
                </div>


                <div class="col-md-12 form-group">
                  <button type="button" class="btn btn-warning d-block w-100 mt-4 pt-4" id="calculate-button">Hitung Jejak Karbon</button>
                  <p class="mt-5 mb-5" id="result"></p>
                </div>
              </div>
              
            </form>
          </div>
          <div class="col-md-3 ms-auto" data-aos="fade-up"></div>

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
            <img src="../assets/img/logo-green-digital.png" alt="logo" class="footer-logo" style="width: 90px;" />
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
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>  
    <script src="kalkulator.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>