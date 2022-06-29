<!DOCTYPE html>
<html 
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="../assets/"
data-template="vertical-menu-template-free"
>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  
  <title>RC Dwella</title>
  <meta content="" name="keywords">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/grid/">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet"
  />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/grid.css" rel="stylesheet">

  <script src="../assets/js/config.js"></script>
  <script src="../assets/vendor/js/helpers.js"></script>

  <!-- =======================================================
  * Template Name: Medilab - v4.7.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  {{-- <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div> --}}

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/"> <img src="img/Dwella.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/home#home">Home</a></li>
          {{-- <li><a class="nav-link scrollto" href="#about">About</a></li> --}}
          <li><a class="nav-link scrollto" href="/home#services">Treatments</a></li>
          <li><a class="nav-link scrollto" href="/home#departments">Tentang Dwella</a></li>
          <li><a class="nav-link scrollto" href="/jadwal">Jadwal Praktek</a></li>
          <li><a class="nav-link scrollto" href="/produk">Produk</a></li>
          <li><a class="nav-link scrollto" href="/daftar">Buat Janji</a></li>
          <li><a class="nav-link scrollto" href="/profile">Profile</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/login" class="appointment-btn scrollto"><span class="d-none d-md-inline">Login</a>

    </div>
  </header><!-- End Header -->
  <section id="jadwal">
    <div class="section-title mt-3">
      <h2>Jadwal Praktik</h2>
    </div>
    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Hari \ Jam Praktik</th>
              <th><strong>09:00</strong></th>
              <th><strong>10:00</strong></th>
              <th><strong>11:00</strong></th>
              <th><strong>13:00</strong> </th>
              <th><strong>14:00</strong> </th>
              <th><strong>15:00</strong></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td><strong>Senin</strong></td>
              <td><span class="badge bg-label-success">Booked</span></td>
              <td><span class="badge bg-label-success">Booked</span></td>
              <td><span class="badge bg-label-secondary">Avail</span></td>
              <td><span class="badge bg-label-success">Booked</span></td>
              <td><span class="badge bg-label-secondary">Avail</span></td>
              <td><span class="badge bg-label-secondary">Avail</span></td>
            </tr>
            <tr>
              <td> <strong>Selasa</strong></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><strong>Rabu</strong></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

            </tr>
            <tr>
              <td>
                <strong>Kamis</strong>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

            </tr>
            <tr>
              <td>
                <strong>Jumat</strong>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              
            </tr>
            <tr>
              <td>
                <strong>Sabtu</strong>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>

            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </section>
{{-- <section class="table">
  <table class="table table-success table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

</section> --}}
<script src="{{ asset ('/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset ('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset ('/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset ('/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
</body>